
<?php

include('database_connection.php');

session_start();

$message = '';

if(isset($_SESSION['user_id']))
{
 header('location:index.php');
}

if(isset($_POST["login"]))
{
 $query = "
   SELECT * FROM login 
    WHERE username = :username
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
    array(
      ':username' => $_POST["username"]
     )
  );
  $count = $statement->rowCount();
  if($count > 0)
 {
  $result = $statement->fetchAll();
    foreach($result as $row)
    {
      if(password_verify($_POST["password"], $row["password"]))
      {
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['username'] = $row['username'];
        $sub_query = "
        INSERT INTO login_details 
        (user_id) 
        VALUES ('".$row['user_id']."')
        ";
        $statement = $connect->prepare($sub_query);
        $statement->execute();
        $_SESSION['login_details_id'] = $connect->lastInsertId();
        header("location:index.php");
      }
      else
      {
       $message = "<label>Wrong Password</label>";
      }
    }
 }
 else
 {
  $message = "<label>Wrong Username</labe>";
 }
}

?>

<html>  
   <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title>Cybershield-Social Engineering</title>  
  <!-- Favicons -->
  <link href="../assets/img/logo.jpg" rel="icon">
  <link href="../assets/img/logo.jpg" rel="apple-touch-icon"> 
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/assets/css/adminlte.min.css">       
  <link href="../assets/assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../stp_con/parsley/parsley.css"/>
 
</head>
<body  class="hold-transition login-page"> 
<div class="login-box"> 
 <div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
    <!-- Widget: user widget style 1 -->
    <div class="card card-widget widget-user card-info card-outline">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="widget-user-header text-white"
           style="background: url('../assets/img/back_1.jpg') center center;">
        <h3 class="widget-user-username text-right">Discussion forum</h3>
        <h5 class="widget-user-desc text-right">Login</h5>
      </div> 
      <div class="widget-user-image">
        <img class="img-circle" src="../assets/img/logo_3.jpg" alt="User Avatar">
     </div> 
     <br>
    <div class="card-body">  
   <p class="text-danger" align="center"><?php echo $message; ?></p>
      <form action="" method="post" id="login_form"> 
        <div class="form-group">
        
          <input type="text" id="Username" name="username" class="form-control"  required autofocus data-parsley-type="email" data-parsley-trigger="keyup" placeholder="Enter Email Address...">
        
        </div>
        <div class="form-group">
        
            <input type="password" id="password" name="password" class="form-control"  required  data-parsley-trigger="keyup" placeholder="Password..." >
          
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4"> 
            <button type="submit" value="Login"  name="login" class="btn btn-info btn-block">Log In </button> 
          </div>
          <!-- /.col -->
        </div>
      </form>  
      <p class="mb-0"> 
        <a href="register.php" class="text-center">Register</a>  
          </p>  
         <hr>
        <center><span style="font-size: 18px;">&copy;</span><?php echo date('Y'); ?></center>
    </div> 
  </div>
</div>
</div>
</div> 
</div> 
<script src="../stp_con/jquery/jquery.min.js"></script>
<script src="../stp_con/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script type="text/javascript" src="../stp_con/parsley/dist/parsley.min.js"></script>
<script src="../assets/assets/js/adminlte.min.js"></script> 
</body>  
</html>
