<?php
    include 'Tutor_PWeb-main/conn.php';

    $sql = "SELECT * FROM users";

    $rows = mysqli_query($conn, $sql);
    $i = 0;
    mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Custom fonts for this template -->
    <link href="vendor/css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/css/simple-line-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
  
  
  
    <!-- Custom styles for this template -->
    <link href="css/styles.css" rel="stylesheet">
  
  </head>
  
  
  <body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
          <a class="navbar-brand js-scroll-trigger" href="index.php"><img src="img/nav-logo.png" alt="" /></a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-bars ml-1"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav text-uppercase ml-auto">

              </ul>
              <?php if ($_SESSION) : ?>
                  <a style="color:white" class="nav-link">Halo! <?php echo $_SESSION['username']?></a>
                  <a href="Tutor_PWeb-main/logout.php">Logout</a>
              <?php endif; ?>
          </div>
      </div>
    </nav>
  </body>

</html>
  