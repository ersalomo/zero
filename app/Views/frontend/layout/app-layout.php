<!doctype html>
<html lang="en">


<head>
    <?= $this->include('frontend/layout/styles/css.php')?>
</head>

<body>

<!-- Page loading -->
<!--<div id="loading">-->
<!--    <div class="spinner-grow"></div>-->
<!--</div>-->
<!-- * Page loading -->
<!-- App Header -->
<div class="appHeader">
    <div class="left">
        <a href="javascript::void();" class="icon goBack">
            <i class="icon ion-ios-arrow-back"></i>
        </a>
    </div>
    <div class="pageTitle">Search</div>
    <div class="right"></div>
</div>
<!-- * App Header -->

<!-- App Capsule -->
<div id="appCapsule">
    <?= $this->renderSection('content')?>
</div>
<!-- appCapsule -->


<!-- App Bottom Menu -->
<?= $this->include('frontend/layout/inc/menu-button-float.php') ?>
<!-- * App Bottom Menu -->

<!-- Sidebar Menu -->
<?= $this->include('frontend/layout/inc/sidebar.php') ?>

</body>
<?= $this->include('frontend/layout/styles/js.php') ?>

</html>

