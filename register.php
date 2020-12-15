<?php
    session_start();

    include 'Tutor_PWeb-main/conn.php';

    if($_SESSION){
        header('location: Tutor_PWeb-main/index.php');
    } else{

        if(isset($_POST['submit'])){
            if($_POST['password'] !== $_POST['confirm_password'])
            header('Location: Tutor_PWeb-main/register.php');
    
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
           
            $sql = "INSERT INTO users (`username`, `email`, `password`)
            VALUES ('$username', '$email', '$password')";
    
            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
        mysqli_close($conn);

    }
    
    $pageTitle = 'Daftar | Instagram KA WE :)';
    include 'Tutor_PWeb-main/header.php';
?>

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/business-casual.min.css" rel="stylesheet">

</head>
    
    <body>
    <form action="register.php" method="POST">
    <!-- Navigation -->
    <section class="page-section" id="contact">
      <div class="container">
          <!-- Contact Section Heading-->
          <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Register</h2>
          <!-- Icon Divider-->
          <div class="divider-custom">
              <div class="divider-custom-line"></div>
              <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
              <div class="divider-custom-line"></div>
          </div>
          <!-- Contact Section Form-->
          <div class="row">
              <div class="col-lg-8 mx-auto">
                  <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                  <form id="contactForm" name="sentMessage" novalidate="novalidate">
                      <div class="control-group">
                          <div class="form-group floating-label-form-group controls mb-0 pb-2">
                              <label>Username</label>
                              <input class="form-control" id="username" name="username" type="text" placeholder="Username" required="required" data-validation-required-message="Please enter your name." />
                              <p class="help-block text-danger"></p>
                          </div>
                      </div>
                      <div class="control-group">
                          <div class="form-group floating-label-form-group controls mb-0 pb-2">
                              <label for="email">Email Address</label>
                              <input class="form-control" id="email" name="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address." />
                              <p class="help-block text-danger"></p>
                          </div>
                      </div>
                      <div class="control-group">
                          <div class="form-group floating-label-form-group controls mb-0 pb-2">
                              <label>Password</label>
                              <input type="password" class="form-control" id="password" name="password" onkeyup='check();' >
                          </div>
                      </div>
                      <div class="control-group">
                          <div class="form-group floating-label-form-group controls mb-0 pb-2">
                              <label>Confirm Password</label>
                              <input type="password" class="form-control" id="confirm_password" name="confirm_password" onkeyup=' check();' >
                             <span id="message"></span>
                          </div>
                      </div>
                      <br />
                      <div id="success"></div>
                      <button type="submit" name="submit" id="submit" class="btn btn-primary" href="index.html" >Submit</button>
                  </form>
              </div>
          </div>
      </div>
  </section>

  
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Script to highlight the active date in the hours list -->
    <script>
      $('.list-hours li').eq(new Date().getDay()).addClass('today');
    </script>

  </body>

    <script type="text/javascript">
        var check= function(){
            if (document.getElementById('password').value ==
          document.getElementById('confirm_password').value) {
          document.getElementById('message').style.color = 'green';
          document.getElementById('message').innerHTML = 'Password Matches!';
            } else {
          document.getElementById('message').style.color = 'red';
          document.getElementById('message').innerHTML = 'Password is not the same!';
            }
        }
    </script>
<?php include 'Tutor_PWeb-main/footer.php' ?>