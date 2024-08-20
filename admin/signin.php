
<?php 
    session_start();
    include '../db.php';

    $msg = "";

$username_err = $password_err= ""; 
$username = $password= "";
    
    if (isset($_POST['submit'])) {
        
         if (empty($_POST["username"])) {
            $username_err = "username is required";
          } else {
            $username = test_input($_POST["username"]);
            // check if e-mail address is well-formed
            
          }
          
          
          if (empty($_POST["password"])) {
            $password_err = "Password is required";
          } else {
            $password = test_input($_POST["password"]);
            // check if name only contains letters and whitespace
          }

        if($username == "" || $password == ""){
            $msg = "Email or Password fields cannot be empty!";
        }else{
            $sql = mysqli_query($link, "SELECT id, username, password FROM admin WHERE username='$username' AND password= '$password'");
            if(mysqli_num_rows($sql) > 0){
                $data = mysqli_fetch_assoc($sql);
                $_SESSION['username'] = $data['username'];
                $_SESSION['id'] = $data['id'];

                header("location: dashboard.php");

                
            }else{
                $msg = "Invalid Username and Password";
            }
        }
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
}

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CarGo Care Hub Sign in</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/logo.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="main-panel">
        <div class="content-wrapper d-flex align-items-center auth px-0">
          <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <div class="brand-logo">
                  <img src="../logo/logo.png" alt="logo">
                </div>
                <h4>Hello! let's get started</h4>
                <h6 class="font-weight-light">Sign in to continue.</h6>
                <?php 
                  if ($msg != "") {
                 ?>
                 <div class="alert alert-danger"><?php echo $msg ?></div>
               <?php } ?>
                <form class="pt-3" action="signin.php" method="post">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" name="username" placeholder="Username">
                    <span class="text-danger"><?php echo $username_err ?></span>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="password" placeholder="Password">
                    <span class="text-danger"><?php echo $username_err ?></span>
                  </div>
                  <div class="mt-3">
                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="submit">SIGN IN</button>
                  </div>
                  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/template.js"></script>
  <!-- endinject -->
</body>

</html>
