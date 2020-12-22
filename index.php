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
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="img/navbar-logo.svg" alt="" /></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ml-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Package</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Choice of Flavor</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#subscribe">Subscribe</a></li>
            </ul>
            <?php if ($_SESSION) : ?>
                <p style="color:white" class="nav-link"><?php echo $_SESSION['username']?></p>
                <a href="Tutor_PWeb-main/logout.php">Logout bang</a>
            <?php endif; ?>
        </div>
    </div>
  </nav>
<!-- Masthead-->
<header class="masthead">
    <div class="container">
      <br>
      <br>
      <br>
      <br>
      <br>
        <div class="masthead-subheading">Welcome To Our Studio!</div>
        <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#portfolio">Beli Sekarang!</a>
    </div>
</header>

  <section class="content-section" id="portfolio">
    <div class="container">
      <div class="content-section-heading text-center">
        <h3 class="text-secondary mb-0">Pilihan</h3>
        <h2 class="mb-5">Paket Cookies</h2>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6">
          <a class="portfolio-item" href="box of 2.html">
            <div class="caption">
              <div class="caption-content">
                <div class="h2 text-center">BOX OF 2</div>
                <p class="mb-0 text-center">A yellow pencil with envelopes on a clean, blue backdrop!</p>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio-1.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="box of 2.html">
            <div class="caption">
              <div class="caption-content">
                <div class="h2 text-center">BOX OF 6</div>
                <p class="mb-0 text-center">A dark blue background with a colored pencil, a clip, and a tiny ice cream cone!</p>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio-2.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-12">
          <a class="portfolio-item" href="box of 2.html">
            <div class="caption">
              <div class="caption-content">
                <div class="h1 text-center">minis</div>
                <p class="section-subheading text-center">Kue-kue kecil yang bisa dimakan dengan satu kali gigitan</p>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio-6.jpg" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="page-section" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Flavor</h2>
            <h3 class="section-subheading text-muted">Here are the flavors that we provide</h3>
        </div>
        <ul class="timeline">
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Classic</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Matcha</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                </div>
            </li>
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Dark</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Red Velvet</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image">
                    <h4>
                        <br />
                        MIX
                        <br />
                    </h4>
                </div>
            </li>
        </ul>
    </div>
  </section>

  <section class="page-section cta" id="subscribe">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Subscribe to Our Website to Get</span>
              <span class="section-heading-lower">10% OFF</span>
              <span class="section-heading-upper">for your first order</span>
              <br>
              <a class="btn btn-primary btn-xl text-uppercase" href="pilihan.php">subscribe</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">Copyright &copy; Your Website 2020</p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Bootstrap core JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Third party plugin JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <!-- Contact form JS-->
  <script src="assets/mail/jqBootstrapValidation.js"></script>
  <script src="assets/mail/contact_me.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
</body>

</html>