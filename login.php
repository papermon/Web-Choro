<?php
    session_start();
    
    include 'Tutor_PWeb-main/conn.php';

    if($_SESSION){
        header('location: index.php');
    } else{

        if(isset($_GET['redirectProfile'])){
            $profileId = $_GET['redirectProfile'];
        }
    
        if(isset($_POST['submit'])){
            $username = $_POST['username'];           
            $password = MD5($_POST['password']);
    
            $sql = "SELECT * FROM users WHERE `username`='$username' or `email`='$username'";
            $result = mysqli_query($conn,$sql);
            $row = $result->fetch_assoc();
            if($row != NULL){
                if($password==$row['password']){
                    session_start();
                    $_SESSION['username'] = $username;
                    $_SESSION['id'] = $row['id'];
                    // var_dump($_SESSION['id']);
                    if($profileId != NULL){
                        header('location: profile.php?id='.$profileId);
                    } else{
                        header('Location: index.php');
                    }
                }
            } else{
                echo "No Dataset";
            }
        
        }
        mysqli_close($conn);

    }
?>
<br>
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

    <section class="" id="ikan">
      <div class="container" style="">
          <!-- Contact Section Heading-->
          <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Register</h2>
          <!-- Icon Divider-->
          <!-- Contact Section Form-->
          <div class="row">
              <div class="col-lg-8 mx-auto">
                  <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                  <form action="login.php<?php if(isset($_GET['redirectProfile'])){echo "?redirectProfile=".$_GET['redirectProfile'];}?>" method="POST">
                      <div class="control-group">
                          <div class="form-group floating-label-form-group controls mb-0 pb-2">
                              <label>Username</label>
                              <input class="form-control" id="username" name="username" type="text" placeholder="Username or Email" required="required" data-validation-required-message="Please enter your name." />
                              <p class="help-block text-danger"></p>
                          </div>
                      </div>                      
                      <div class="control-group">
                          <div class="form-group floating-label-form-group controls mb-0 pb-2">
                              <label>Password</label>
                              <input type="password" class="form-control" id="password" name="password">
                          </div>
                      </div>                     
                      <br>
                      <div id="success"></div>
                      <button type="submit" name="submit" id="submit" class="btn btn-primary" href="index.html" >Submit</button>
                  </form>
              </div>
          </div>
      </div>
  </section>

<?php include 'Tutor_PWeb-main/footer.php' ?>