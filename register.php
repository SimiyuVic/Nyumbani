<?php

include('Assets/header.php'); 

session_start();

?>



<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            
        <?php if($_SESSION['message']){ ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong> <?= $_SESSION['message']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    
                    <?php
                            unset($_SESSION['message']);
                     } ?>
            <div class="card">
                <div class="card-header">
                    <h5> Register Here</h5>
                </div>
                <div class="card-body">
                <form action="functions/auth.php" method="POST">
                    <div class="mb-3">
                        <label for="" class="form-label">User Name</label>
                        <input type="text" name="" class="form-control" required >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                        <input type="password" name="cpassword" class="form-control" id="exampleInputPassword1" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-outline-primary">Register</button>
                 </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('Assets/footer.php');  ?>

