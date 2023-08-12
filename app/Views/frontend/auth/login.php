<?= $this->extend('frontend/auth/index') ?>
<?= $this->section('content') ?>
<div class="appContent pb-0">

    <div class="sectionTitle text-center">
        <div class="title">
            <h1>Join Us Now!</h1>
        </div>
        <div class="lead mb-3">Sign in to join</div>
    </div>

    <?php $validation = \Config\Services::validation(); ?>
    <?php if (session()->get('validation')): ?>
        <?php $validation = session()->get('validation'); ?>
    <?php endif; ?>

    <?php if (session()->get('fail')): ?>
        <div class="alert alert-danger">
            <?= (session()->get('fail')) ?>
        </div>
    <?php endif; ?>

    <form action="<?= route_to('auth.login') ?>" method="post">
        <?= csrf_field() ?>
        <div class="form-group">
            <input type="text" value="<?= old('login_id') ?>" name="login_id" class="form-control"
                   placeholder="email/username">
            <?php if ($validation->getError('login_id')): ?>
                <span class="text text-danger"><?= $validation->getError('login_id') ?></span>
            <?php endif; ?>

        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <?php if ($validation->getError('password')): ?>
                <span class="text text-danger"><?= $validation->getError('password') ?></span>
            <?php endif; ?>
        </div>

        <div class="d-flex">
            <button type="submit" class="btn btn-primary me-1 btn-lg btn-block">
                Sign in
            </button>
            <a href="<?= route_to('register.index') ?>" class="btn btn-outline-primary btn-lg w-25">register</a>
        </div>
        <div class="form-group mt-1">
            <a href="<?= route_to('auth.reset-form')?>">
                <span>forgot password</span>
            </a>
        </div>
    </form>

</div>

<?= $this->endSection() ?>

