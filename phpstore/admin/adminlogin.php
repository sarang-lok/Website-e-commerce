<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <?php
      session_start();
      include('adminpartials/head.php');
      
      if(isset($_POST['login'])){

      include('partials/connect.php');
      
      $email=$_POST['email'];
      $password=$_POST['password'];
      $sql="SELECT * from admins Where username='$email' AND password='$password'";
      $results=$connect->query($sql);
      $final=$results->fetch_assoc();
      
      $_SESSION['email']=$final['username'];
      $_SESSION['password']=$final['password'];
      
      
      
      if($email=$final['username'] AND $password=$final['password']){
        header('location: adminindex.php');
      }else{
        header('location: adminlogin.php');
      } 
      }
?>
   <head>
      <meta charset="utf-8">     
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Login Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
   </head>
   <body class="bg-dark">
      <div class="sufee-login d-flex align-content-center flex-wrap">
         <div class="container">
            <div class="login-content">
               <div class="login-form mt-150">
                   <form class="form-horizontal" action="adminlogin.php" method="POST">
                     <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" placeholder="Email" name="email">
                     </div>
                     <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                     </div>
                     <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" name="login">Log in</button>
					</form>
               </div>
            </div>
         </div>
      </div>
      <script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="assets/js/popper.min.js" type="text/javascript"></script>
      <script src="assets/js/plugins.js" type="text/javascript"></script>
      <script src="assets/js/main.js" type="text/javascript"></script>
   </body>
</html>