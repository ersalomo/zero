<?php

namespace App\Controllers;
use App\Services\email\EmailService;
use App\Services\ResetPassword\ResetPasswordService;
use CodeIgniter\HTTP\RedirectResponse;
use App\Libraries\{
    Hash,
    CIAuth
};
use App\Services\User\UserServices;
use Carbon\Carbon;

class AuthenticateController extends BaseController
{
    private $userService;
    private $resetPwdService;
    private $emailService;

    public function __construct()
    {
        $this->userService = new UserServices();
        $this->resetPwdService = new ResetPasswordService();
        $this->emailService = new EmailService();
    }

    public function login()
    {
        return view('frontend/auth/login', [
            'pageTitle' => 'Login',
        ]);

    }

    public function register()
    {
        return view('frontend/auth/register', [
            'pageTitle' => 'Register',
        ]);

    }

    public function loginHandler()
    {
        $filter_type = filter_var($this->request->getVar('login_id'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $isValid = $this->validate([
            'login_id' => [
                'rules' => 'required|min_length[4]',
                'errors' => [
                    'required' => 'Kolom ini harus diisi',
                    'min_length' => 'Minimal 4 character',
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[4]',
                'errors' => [
                    'required' => 'Kolom ini harus diisi',
                    'min_length' => 'Minimal 4 character',
                ]
            ],
        ]);
        $login_id = $this->request->getVar('login_id');
        $password = $this->request->getVar('password');

        if (!$isValid) {
            return redirect('login.index')->withInput()->with('validation', $this->validator);
        }
        $user = $this->userService->findBy($filter_type, $login_id);
        if (!$user || !Hash::check($password, $user['password'])) {
            return redirect('login.index')->with('fail', 'user not found');
        }
        CIAuth::setCIAuth($user);
        return redirect('home.index');
    }

    public function registerHandler()
    {
        $isValid = $this->validate([
            'name' => [
                'rules' => 'required|max_length[20]|min_length[4]|string',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'string' => '{field} hanya mengandung alpabet',
                    'max_length' => '{field} max 20 character ',
                    'min_length' => '{field} man 4 character '
                ],
            ],
            'username' => [
                'rules' => 'required|max_length[12]|min_length[4]|is_unique[users.username]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} tidak tersedia',
                    'max_length' => '{field} max 20 character ',
                    'min_length' => '{field} man 4 character '
                ],
            ],
            'email' => [
                'rules' => 'required|max_length[25]|valid_email|is_unique[users.email]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} tidak tersedia',
                    'max_length' => '{field} max 20 character ',
                    'min_length' => '{field} man 4 character '
                ],
            ],
            'password' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'min_length' => '{field} man 8 character '
                ],
            ],
            'password_confirmation' => [
                'rules' => 'required|min_length[8]|matches[password]',
                'errors' => [
                    'required' => 'kolom harus diisi',
                    'min_length' => 'kolom man 8 character',
                    'matches' => 'kolom harus sama dengan password'
                ],
            ],
        ]);

        if (!$isValid) {
            return redirect('register.index')
                ->withInput()
                ->with('validation', $this->validator);
        }

        $data = [
            'email' => $this->request->getVar('email'),
            'name' => $this->request->getVar('name'),
            'username' => $this->request->getVar('username'),
        ];
        $data['password'] = Hash::hash($this->request->getVar('password'));
        $this->userService->create($data);

        return redirect('register.index')
            ->with('success', 'your credentials safe in our database');
    }

    public function resetForm(): string
    {
        return view('frontend/auth/reset-form', [
            'pageTitle' => 'Reset Password'
        ]);
    }

    public function sendResetPassword()
    {
        $isValid = $this->validate([
            'email' => [
                'rules' => 'required|valid_email|is_not_unique[users.email]',
                'errors' => [
                    'required' => '{field} ini harus diisi',
                    'valid_email' => '{field} invalid format',
                    'is_not_unique' => '{field} tidak ditemukan', //danger if a user try to find another email
                ]
            ]
        ]);

        if (!$isValid) {
            return redirect('auth.reset-form')->withInput()
                ->with('validation', $this->validator);
        }

        $email = $this->request->getVar('email');
        $token = bin2hex(openssl_random_pseudo_bytes(64));
        $resetPwd = array(
            'email' => $email,
            'token' => $token,
            'created_at' => Carbon::now(),
        );
        $oldResetPassword = $this->resetPwdService->findByEmail($email);
        $user = $this->userService->findBy('email', $email);
        if ($oldResetPassword) {
            $this->resetPwdService->update($oldResetPassword['email'], $resetPwd);
        } else {
            $this->resetPwdService->create($resetPwd);
        }

        $this->emailService->sendEmail($user, $token);
        return redirect('auth.reset-form')
            ->with('success', 'check your email');

    }

    public function changePasswordView(string $token): string
    {
        return view('frontend/auth/password-change-view', [
            'token' => $token
        ]);
    }

    public function changePassword(string $token)
    {
        $isValid = $this->validate([
            'password' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'min_length' => '{field} man 8 character '
                ],
            ],
            'conf_password' => [
                'rules' => 'required|min_length[8]|matches[password]',
                'errors' => [
                    'required' => 'kolom harus diisi',
                    'min_length' => 'kolom man 8 character',
                    'matches' => 'kolom harus sama dengan password'
                ],
            ],
        ]);

        if (!$isValid) return redirect()->back()
            ->withInput()
            ->with('validation', $this->validator);

        $change_pwd = $this->resetPwdService->findByToken($token);
        if (!$change_pwd) {
            return redirect()->back()
                ->with('fail', 'invalid-token');
        }

//        $new_pass = $this->request->getVar('password');
//
//        $data = [
//            'email' => '',
//            'new_password'=> Hash::hash($new_pass),
//        ];
//        $this->userService->update('email');

        return redirect()->back()
            ->with('success', 'your password has been changed');
    }

    public function logout(): RedirectResponse
    {
        CIAuth::remove();
        return redirect('login.index')->with('success', 'Logout success');
    }
}
