
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nyumbani</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
<nav class="navbar navbar-light bg-warning">
  <div class="container py-3">
    <a class="navbar-brand fw-bolder" href="index.php">nyuMbani</a>
    
    <?php if($_SESSION['auth']){ ?>

        <a href="logout.php" class="btn btn-outline-primary">Log out</a>

    <?php } else { ?>

        <a href="login.php" class="btn btn-outline-primary">Log in</a>

    <?php } ?>

    
    
  </div>
</nav>