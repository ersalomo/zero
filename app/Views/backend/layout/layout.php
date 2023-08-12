<!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8"/>
    <title><?= $pageTitle ?? 'Welcome Admin'?></title>

    <?= $this->include('backend/layout/styles/css.php') ?>

</head>
<body>
<!--<div class="pre-loader">-->
<!--    <div class="pre-loader-box">-->
<!--        <div class="loader-logo">-->
<!--            <img src="/backend/vendors/images/deskapp-logo.svg" alt="" />-->
<!--        </div>-->
<!--        <div class="loader-progress" id="progress_div">-->
<!--            <div class="bar" id="bar1"></div>-->
<!--        </div>-->
<!--        <div class="percent" id="percent1">0%</div>-->
<!--        <div class="loading-text">Loading...</div>-->
<!--    </div>-->
<!--</div>-->

<?= $this->include('backend/layout/inc/header.php') ?>
<?= $this->include('backend/layout/inc/sidebar.php') ?>

<div class="mobile-menu-overlay"></div>
<div class="main-container">
    <?=$this->renderSection('content') ?>
</div>

</body>
<?= $this->include('backend/layout/styles/js.php') ?>

</html>
