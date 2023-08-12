<?= $this->extend('frontend/auth/index') ?>
<?= $this->section('content') ?>
<div class="appContent pb-0">

    <div class="sectionTitle text-center">
        <div class="lead mb-3">Forgot password</div>
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

    <form action="<?= route_to('auth.send-reset-password') ?>" method="post">
        <?= csrf_field() ?>
        <div class="form-group">
            <input type="email" value="<?= old('email') ?>" name="email" class="form-control <?= $validation->hasError('email') ? 'is-invalid': '' ?>"
                   placeholder="email">
                <span class="invalid-feedback"><?= $validation->getError('email') ?></span>
        </div>
        <div class=>
            <button type="submit" class="btn btn-primary me-1 btn-lg btn-block">
                Send
            </button>
        </div>
    </form>

</div>

<?= $this->endSection() ?>

