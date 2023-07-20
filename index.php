<?php 
session_start();
include('Assets/header.php');
?>
<div class="container -center my-4">
    <div class="row ">
        <div class="col-md-6">
        <?php if($_SESSION['message']){ ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong> <?= $_SESSION['message']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php 
                        unset($_SESSION['message']);
                     } ?>
        </div>
    </div>
</div>

<?php include('Assets/footer.php'); ?>