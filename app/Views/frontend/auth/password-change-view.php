<?= $this->extend('frontend/auth/index') ?>
<?= $this->section('content') ?>
<div class="appContent pb-0">

    <div class="sectionTitle text-center">
        <div class="lead mb-3">Change password</div>
    </div>
    <?php if (session()->has('success')): ?>
        <div class="alert alert-success">
            <?= (session()->get('success')) ?>
        </div>
    <?php endif; ?>
    <?php if (session()->get('fail')): ?>
        <div class="alert alert-danger">
            <?= (session()->get('fail')) ?>
        </div>
    <?php endif; ?>
    <?php $validation = \Config\Services::validation(); ?>
    <?php if (session()->get('validation')): ?>
        <?php $validation = session()->get('validation'); ?>
    <?php endif; ?>


    <form action="<?= route_to('auth.post-change-password', $token) ?>" method="post">
        <?= csrf_field() ?>
        <div class="form-group">
            <input type="password" value="<?= old('password') ?>" name="password"
                   class="form-control <?= $validation->hasError('password') ? 'is-invalid': '' ?>"
                   placeholder="new password">
            <span class="invalid-feedback"><?= $validation->getError('password') ?></span>
        </div>
        <div class="form-group">
            <input type="password"
                   value="<?= old('conf_password') ?>"
                   name="conf_password" class="form-control <?= $validation->hasError('conf_password') ? 'is-invalid': '' ?>"
                   placeholder="confirm new password">
            <span class="invalid-feedback"><?= $validation->getError('conf_password') ?></span>
        </div>
        <div class=>
            <button type="submit" class="btn btn-primary me-1 btn-lg btn-block">
                Send
            </button>
        </div>
    </form>

</div>

<?= $this->endSection() ?>

