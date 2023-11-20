<?php
if (isset($_SESSION['errorMessage'])) :
?>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Lỗi!</strong><?= $_SESSION['errorMessage'] ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php
    unset($_SESSION['$errorMessage']);
endif;
?>