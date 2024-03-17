<!--
//register.php
!-->

<?php

include('database_connection.php');

session_start();

$message = '';

if(isset($_SESSION['user_id']))
{
 header('location:index.php');
}

if(isset($_POST["register"]))
{
 $username = trim($_POST["username"]);
 $password = trim($_POST["password"]);
 $check_query = "
 SELECT * FROM login 
 WHERE username = :username
 ";
 $statement = $connect->prepare($check_query);
 $check_data = array(
  ':username'  => $username
 );
 if($statement->execute($check_data)) 
 {
  if($statement->rowCount() > 0)
  {
   $message .= '<p><label>Username already taken</label></p>';
  }
  else
  {
   if(empty($username))
   {
    $message .= '<p><label>Username is required</label></p>';
   }
   if(empty($password))
   {
    $message .= '<p><label>Password is required</label></p>';
   }
   else
   {
    if($password != $_POST['confirm_password'])
    {
     $message .= '<p><label>Password not match</label></p>';
    }
   }
   if($message == '')
   {
    $data = array(
     ':username'  => $username,
     ':password'  => password_hash($password, PASSWORD_DEFAULT)
    );

    $query = "
    INSERT INTO login 
    (username, password) 
    VALUES (:username, :password)
    ";
    $statement = $connect->prepare($query);
    if($statement->execute($data))
    {
     $message = "<label>Registration Completed</label>";
    }
   }
  }
 }
}

?>

<html>  
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title>Cybershield-Social Engineering</title>  
  <link href="../assets/img/logo.jpg" rel="icon">
  <link href="../assets/img/logo.jpg" rel="apple-touch-icon">  
  <link rel="stylesheet" href="../stp_con/fontawesome-free/css/all.min.css"> 
  <link rel="stylesheet" href="../stp_con/icheck-bootstrap/icheck-bootstrap.min.css"> 
  <link rel="stylesheet" href="../assets/assets/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
   <div class="card card-widget widget-user card-info card-outline">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="widget-user-header text-white"
           style="background: url('../assets/img/back_1.jpg') center center;">
        <h3 class="widget-user-username text-right">CYBERSHIELD</h3>
        <h5 class="widget-user-desc text-right">Register</h5>
      </div> 
      <div class="widget-user-image">
        <img class="img-circle" src="../assets/img/logo_3.jpg" alt="User Avatar">
     </div>  
     <br>
    <div class="card-body register-card-body">
     <span class="text-danger"><?php echo $message; ?></span> 
      <form action="" method="post"> 
        <div class="input-group mb-3">
          <input type="type" name="username" class="form-control" placeholder="User name" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="confirm_password" class="form-control" placeholder="Retype password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8"> 
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="register" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>  
      <a href="login.php" class="text-center">Login</a>
       <hr>
        <center><span style="font-size: 18px;">&copy;</span><?php echo date('Y'); ?></center>
  </div> 
</div> 
<script src="../stp_con/jquery/jquery.min.js"></script>
<script src="../stp_con/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script type="text/javascript" src="../stp_con/parsley/dist/parsley.min.js"></script>
<script src="../assets/assets/js/adminlte.min.js"></script> 
</body>
<script>
$(function () { 
  $('#quickForm').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a valid email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
</html>
 

