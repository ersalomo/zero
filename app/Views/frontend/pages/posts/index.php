<?= $this->extend('frontend/layout/app-layout') ?>
<?= $this->section('content') ?>
<div class="appContent">

    <div class="itemList">
        <?php foreach ($posts as $post) : ?>
        <li class="item">
            <a href="" class="d-flex" style="cursor: pointer;">
                <div class="image">
                    <img src="/frontend/assets/img/sample/photo14.jpg" alt="image">
                </div>
                <div class="text">
                    <h4 class="title">Pinky Glasses</h4>
                    <div class="text-muted">Simple and elegant design line and has stunning looks</div>
                </div>
            </a>
        </li>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection() ?>
