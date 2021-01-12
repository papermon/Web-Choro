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
 
<!DOCTYPE html>
<html lang="en">

<link rel="icon" href="img/logo.png">
<?php include 'head.php';?>

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

<title>Choro Cookies</title>

<br><br><br><br>

</head>

    <section class="" id="ikan">
      <div class="container">
          <!-- Contact Section Heading-->
          <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Login</h2><br>
          <!-- Icon Divider-->
          <!-- Contact Section Form-->
          <div class="row">
              <div class="col-lg-8 mx-auto">
                  <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                  <form action="login.php<?php if(isset($_GET['redirectProfile'])){echo "?redirectProfile=".$_GET['redirectProfile'];}?>" method="POST">
                      <div class="control-group">
                          <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                              <label>Username</label>
                              <input class="form-control" id="username" name="username" type="text" placeholder="Username or Email" required="required" data-validation-required-message="Please enter your name." />
                              <p class="help-block text-danger"></p>
                          </div>
                      </div>                      
                      <div class="control-group">
                          <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                              <label>Password</label>
                              <input type="password" class="form-control" id="password" name="password">
                          </div>
                      </div>                     
                      <br>
                      <div id="success"></div>
                      <button style="float: left;" type="submit" name="submit" id="submit" class="btn btn-primary" href="index.html" >Submit</button><br><br>
                      <a style="float: left; margin-top:1rem" href="register.php">Belum punya akun?</a>
                  </form>
              </div>
          </div>
      </div>
  </section>
</html>
