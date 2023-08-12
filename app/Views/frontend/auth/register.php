<?= $this->extend('frontend/auth/index') ?>
<?= $this->section('content') ?>
<div class="appContent pb-0">


    <div class="sectionTitle text-center">
        <div class="title">
            <h1>Join Us Now!</h1>
        </div>
        <div class="lead mb-3">Sign up to join</div>
    </div>
    <?php if (session()->get('success')): ?>
        <div class="alert alert-success">
            <?= session()->get('success') ?>

        </div>
    <?php endif; ?>

    <?php if (session()->get('fail')): ?>
        <div class="alert alert-danger">
            <?= session()->get('fail') ?>
        </div>
    <?php endif; ?>

<!--    validation -->

    <?php $validation = session()->get('validation') ?? \Config\Services::validation(); ?>

    <form action="<?= route_to('auth.register')?>" method="post">
        <div class="form-group">
            <input name="name" type="text" class="form-control" placeholder="name">
            <?php if ($validation->getError('name')): ?>
                <span class="text text-danger"><?= $validation->getError('name') ?></span>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <input name="username" type="text" class="form-control" placeholder="username">
            <?php if ($validation->getError('username')): ?>
                <span class="text text-danger"><?= $validation->getError('username') ?></span>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <input name="email" type="email" class="form-control" placeholder="e-mail">
            <?php if ($validation->getError('email')): ?>
                <span class="text text-danger"><?= $validation->getError('email') ?></span>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <input name="password" type="password" class="form-control" placeholder="password">
            <?php if ($validation->getError('password')): ?>
                <span class="text text-danger"><?= $validation->getError('password') ?></span>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <input name="password_confirmation" type="password" class="form-control" placeholder="password confirmation"/>
            <?php if ($validation->getError('password_confirmation')): ?>
                <span class="text text-danger"><?= $validation->getError('password_confirmation') ?></span>
            <?php endif; ?>
        </div>
        <div class="d-flex">
            <a href="<?= route_to('login.index') ?>" type="button" class="btn btn-info btn-md w-25">back</a>
            <button type="submit" class="btn btn-primary btn-md btn-block">
                Sign up
            </button>
        </div>
    </form>

</div>

<?= $this->endSection() ?>
