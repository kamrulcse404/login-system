<!-- header -->
<?php require_once __DIR__ . '/../views/partials/header.php'; ?>
<!-- header end -->

<!-- nav -->
<?php require_once __DIR__ . '/../views/partials/nav.php'; ?>
<!-- nav end -->

<!-- main -->
<div class="container mt-3">
    <div class="row justify-content-center">
        <?php  echo $content; ?>
    </div>
</div>
<!-- main end-->

<!-- footer -->
<?php require_once __DIR__ . '/../views/partials/footer.php'; ?>
<!-- footer end-->