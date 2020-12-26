<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Starlight Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="./public/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="./public/lib/Ionicons/css/ionicons.css" rel="stylesheet">

  <?php
    include ("../frontend/database/DBController.php");

    $db = new DBController();
  ?>
  <?php
  if (isset($_POST['submit'])) {
      $user = $_POST['email'];
      $password = $_POST['password'];

      if(!empty($user) && !empty($password)){

        $select_data="SELECT * FROM `admin_login` WHERE `user`='$user' && `password`='$password'";
        $result = $db->query($select_data);
        $fetch=$result->fetch_array();
        if ($user == $fetch[1] && $password == $fetch[2]){

          header('location:home.php');
        }else{
          echo "<script>alert('log in first')</script>";
        }

      }else{
        echo "<script>alert('Filld required')</script>";
      }

  }
  
  
  
  
  ?>
    <!-- Starlight CSS -->
    <link rel="stylesheet" href="./public/css/starlight.css">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Mobile Shope-E <span class="tx-info tx-normal">admin</span></div>
        <div class="tx-center mg-b-60">Only for admin</div>
      <form method="POST"></form>
        <div class="form-group">
          <input name="email" type="text" class="form-control" placeholder="Email">
        </div><!-- form-group -->
        <div class="form-group">
          <input name="password" type="password" class="form-control" placeholder=" password">
          <a href="" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
        </div><!-- form-group -->
        <button type="submit" class="btn btn-info btn-block" name="submit">Sign In</button>
        </form>
        <div class="mg-t-60 tx-center">Not yet a member? <a href="page-signup.html" class="tx-info">Sign Up</a></div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    <script src="./public/lib/jquery/jquery.js"></script>
    <script src="./public/lib/popper.js/popper.js"></script>
    <script src="./public/lib/bootstrap/bootstrap.js"></script>

  </body>
</html>
