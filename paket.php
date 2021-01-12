<?php
    session_start();
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

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

  <title>Choro Cookies</title>

  <!-- Favicon -->
  <link rel="icon" href="img/logo.png">

  <?php include 'head.php' ?>

</head>

<header class="mastahead">
  <div class="container">
    <h2>tes</h2>
  </div>
</header>

<body id="page-top">

  <!-- Page Content -->
  <div class="container">

    <h1 class="content-section-heading text-center">Pilihan Paket Cookies</h1>
    <br>
    
    <!-- Features Section -->
    <div class="row">
      <div class="col-lg-4">
        <img class="img-fluid rounded" src="img/minis.jpg" alt="">
      </div>
      <div class="col-lg-8">
        <br>
        <h2>minis</h2>
        <p>Cookies yang memiliki ukuran kecil dan tekstur yang crunchy cocok untuk dijadikan teman menonton film atau dijadikan sereal saat sarapan.</p>
        <table class="center table-hover">
        <tr>
          <td><strong>Pilihan Rasa:</strong></td>
          <td></td>
          </tr>
          <tr>
          <td>Classic</td>
          <td></td>
          </tr>
        </table><br>
        Beli Disini !&nbsp;&nbsp;<a href="https://www.tokopedia.com/choro/chocolate-chip-cookies-mini-cereal"><img src="img/tokopedia.png" height="30" width="30"></a>&nbsp;&nbsp;<a href="https://shopee.co.id/Chocolate-Chip-Cookies-Mini-Cereal-i.306713952.4652032549"><img src="img/shoppee.png" height="20" width="20"></a>
      </div>
    </div>
    <!-- /.row -->
    <hr>
    <div class="row">
      <div class="col-lg-4">
        <img class="img-fluid rounded" src="img/box-of-six.jpg" alt="">
      </div>
    <div class="col-lg-8">
      <br>
    <h2>Box of Six</h2>
        <p>Paket cookies yang berisi enam kue dengan rasa yang beragam. Anda bisa memesan dengan pilihan rasa mix untuk mendapatkan rasa unik setiap kue yang tersedia dan anda juga dapat memesan hanya dengan satu rasa spesifik saja. </p>
        <table class="center table-hover">
        <tr>
          <td><strong>Pilihan Rasa:</strong></td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          </tr>
          <tr>
          <td>Classic</td>
          <td></td>
          </tr>
          <tr>
          <td>Dark</td>
          <td></td>
          </tr>
          <tr>
          <td>Matcha</td>
          <td></td>
          </tr>
          <tr>
          <td>Red Velvet</td>
          <td></td>
          <tr>
          <td>MIX</td>
          <td><img src="img/logo.png" height=20 width=20 style="float: right;"></img></td>
          </tr>
        </table>
        <br>
        <p><img src="img/logo.png" height=20 width=20> &nbsp;= Recommended untuk paket ini</img><br>
        Beli Disini !&nbsp;&nbsp;<a href="https://www.tokopedia.com/choro/chocolate-chips-cookies-6-pcs"><img src="img/tokopedia.png" height="30" width="30"></a>&nbsp;&nbsp;<a href="https://shopee.co.id/Chocolate-Chips-Cookies-i.306713952.6852027259"><img src="img/shoppee.png" height="20" width="20"></a></p>
      </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-lg-4">
      <img class="img-fluid rounded" src="img/box-of-two.jpg" alt="">
    </div>
    <div class="col-lg-8">
      <br>
    <h2>Box of Two</h2>
        <p>paket cookies yang berisi dua kue dengan rasa yang dapat anda tentukan sendiri. Sangat cocok sebagai kado ulang tahun untuk kerabat atau pasangan anda.</p>
        <table class="center table-hover">
        <tr>
          <td><strong>Pilihan Rasa:</strong></td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          </tr>
          <tr>
          <td>Classic</td>
          <td><img src="img/logo.png" height=20 width=20 style="float: right;"></img></td>
          </tr>
          <tr>
          <td>Dark</td>
          <td></td>
          </tr>
          <tr>
          <td>Matcha</td>
          <td><img src="img/logo.png" height=20 width=20 style="float: right;"></img></td>
          </tr>
          <tr>
          <td>Red Velvet</td>
          <td></td>
          <tr>
          <td>MIX</td>
          <td></td>
          </tr>
        </table>
        <br>
        <p><img src="img/logo.png" height=20 width=20> &nbsp;= Recommended untuk paket ini</img><br>
        Beli Disini !&nbsp;&nbsp;<a href="https://www.tokopedia.com/choro/chocolate-chips-cookies-2-pcs"><img src="img/tokopedia.png" height="30" width="30"></a>&nbsp;&nbsp;<a href="https://shopee.co.id/Chocolate-Chips-Cookies-i.306713952.6852027259"><img src="img/shoppee.png" height="20" width="20"></a></p>        
      </div>

  </div>
  <!-- /.row -->
  <hr>
  </div>

  <!-- Footer -->
  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">Copyright &copy; Your Website 2020</p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

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
  <link href="css/stile.css" rel="stylesheet">

</head>

</html>
