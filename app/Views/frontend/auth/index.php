
<!doctype html>
<html lang="en">

<head>
    <?= $this->include('frontend/layout/styles/css.php')?>
</head>

<body>

<!-- App Capsule -->
<div id="appCapsule" class="pb-2">
    <?= $this->renderSection('content')?>
</div>
<!-- appCapsule -->

</body>
<?= $this->include('frontend/layout/styles/js.php')?>

</html>