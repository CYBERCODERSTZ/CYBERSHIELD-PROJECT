<?php    
include ('includes/connection.php'); 
if (isset($_POST['comment_n'])){
$EmailID = $_POST['Email']; 
$SenderID = $_POST['roll_number']; 
$Subject = $_POST['Subject']; 
$RecipientID = $_POST['RecipientID']; 
$Body = $_POST['comment']; 


$assessor=mysqli_query($conn,"INSERT INTO `email`(`EmailID`, `SenderID`, `RecipientID`, `Subject`, `Body`) VALUES ('$EmailID','$SenderID','$RecipientID','$Subject','$Body')");
  
  if($assessor){ 
         ?>
         <script type="text/javascript">
             alert("Comment Success Fully Sent");
         </script>
        <?php  
      }  
      else{
        ?>  
        <script type="text/javascript">
         alert("Sorry Comment Failed to sent Try Again");
        </script>
        <?php
    }
  } 

if (isset($_POST['change'])){  
$Username = $_POST['Username'];
$Age = $_POST['Age'];
$gender = $_POST['gender'];
$vender = $_POST['vender'];
$CurrentLocation = $_POST['CurrentLocation'];
$IndustrialCategory = $_POST['IndustrialCategory'];
$mobile = $_POST['mobile'];
$Email = $_POST['Email'];    

  $query=mysqli_query($conn,"update user set Username = '$Username',gender = '$gender',vender = '$vender',CurrentLocation = '$CurrentLocation',IndustrialCategory = '$IndustrialCategory',mobile = '$mobile',Email = '$Email',Age = '$Age' where Email = '$session_id'")or die(mysqli_error());
  if($query){ 
         ?>
         <script type="text/javascript">
             alert("Your Infomation is successfully change");
         </script>
        <?php  
      }  
      else{
        ?>  
        <script type="text/javascript">
         alert("Sorry Your Infomation is not changed");
        </script>
        <?php
    }
}  
if (isset($_POST['password'])){  
$current_password = md5($_POST['current_password']);
$retype_password = md5($_POST['retype_password']);
$new_password =md5($_POST['new_password']); 
$PasswordHash =$_POST['PasswordHash'];

if ($PasswordHash != $current_password)
{ 
 ?>
 <script type="text/javascript">
     alert("Password does not match with your current password");
 </script>
<?php 
}else if  ($new_password != $retype_password){
   ?>
   <script type="text/javascript">
       alert("Password does not match with your new password");
   </script>
  <?php  
}else if (($PasswordHash == $current_password) && ($new_password == $retype_password)){

  $query=mysqli_query($conn,"update user set PasswordHash = '$new_password' where Email = '$session_id'")or die(mysqli_error());
  if($query){ 
         ?>
         <script type="text/javascript">
             alert("Your Password is successfully change");
         </script>
        <?php  
      }  
      else{
        ?>  
        <script type="text/javascript">
         alert("Sorry Your Password is not changed");
        </script>
        <?php
    }
}
} 
?>
 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid" >
        <div class="row mb-2">
          <?php  
               $query= mysqli_query($conn,"select * from user where Role = '$session_id'")or die(mysqli_error());
               $row = mysqli_fetch_array($query);     
               ?>
          <div class="col-sm-6" >
            <h5><strong >Welcome To your profile </strong></h5>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li> 
              <li class="breadcrumb-item active" style="color: red;">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section> 
   <!-- Main content -->
    <section class="content" >
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?php echo $user_row['thumbnail']; ?>"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $user_row['FullName'] ?></h3> 

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Full Name</b> <a class="float-right"><?php echo $user_row['FullName']?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Roll No.</b> <a class="float-right"><?php echo $user_row['roll_number'] ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Gender</b> <a class="float-right"><?php echo $user_row['gender'] ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Mobile</b> <a class="float-right"><?php echo $user_row['mobile'] ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right" style="color:red;"><?php echo $user_row['Email'] ?></a>
                  </li> 
                </ul> 
                <a data-toggle="modal" href="#upload-picture" class="btn btn-primary btn-block"><i class="fa fa-upload"></i>  Change profile </a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card --> 
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills ">
                  <li class="nav-item" ><a class="nav-link active" href="#timeline" data-toggle="tab"><i class="fas fa-book mr-1"></i> My Profile</a></li> 
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab"><i class="fas fa-cogs"></i> Settings</a></li>
                 
                </ul> 
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                   <!-- /.tab-pane -->
                  <div class="active tab-pane" id="timeline" >
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse"> 
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-th-large bg-primary"></i>
                        <?php 
                         $query= mysqli_query($conn,"SELECT IndustrialCategory FROM `user` WHERE Role = '$session_id'")or die(mysqli_error());
                         $row2 = mysqli_fetch_array($query);     
                         ?> 
                           
                          <?php 
                         $query= mysqli_query($conn,"SELECT vender FROM `user`WHERE Role = '$session_id'")or die(mysqli_error());
                         $row4 = mysqli_fetch_array($query);     
                         ?> 
                        <div class="timeline-item">
                          <span class="time"></span>

                          <h3 class="timeline-header card-outline"><a href="#">Category~</a> <?php echo $user_row['IndustrialCategory'] ?></h3>

                          <div class="timeline-body"> 
                          </div> 
                        </div>
                      </div>
                      <!-- END timeline item -->  
                      <div>
                        <i class="fas fa-building bg-warning"></i>

                        <div class="timeline-item">
                          <span class="time"></span>

                          <h3 class="timeline-header card-outline"><a href="#">Vender~</a><?php echo $user_row['vender'] ?></h3>

                          <div class="timeline-body">  
                          </div> 
                        </div>
                      </div>
                      <!-- END timeline item --> 
                      <div>
                        <i class="fas fa-comments bg-purple"></i>

                        <div class="timeline-item">
                          <span class="time"></span>

                          <h3 class="timeline-header card-outline "><a  href="#">Comment Here</a></h3>
                          <div class="timeline-body">
                           <form action="" method="post">
                              <input type="hidden" name="Email" value="<?php echo $user_row['Email'] ;  ?>"> 
                              <input type="hidden" name="roll_number" value="<?php echo $user_row['roll_number'] ?>"> 
                              <input type="hidden" name="RecipientID" value="cyberShieldTM@gmail.com"> 
                              <input type="hidden" name="Subject" value="Trainner Comment"> 
                              <textarea name="comment" required="required"  class="form-control" placeholder="Enter Your Comment Here"></textarea> <br> 
                              <div class="row" style="text-align: right">
                                  <div class="col-md-12"> 
                                      <button type="submit" name="comment_n" class="btn btn-secondary btn-sm">  <i class="fa fa far fa-envelope"></i> Update</button>
                                  </div>
                              </div>
                          </form>
                          </div> 
                        </div>
                      </div>
                      <!-- END timeline item -->
                    </div>
                  </div> 
                   <div class="modal fade" id="upload-picture">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Change Your Profile Picture</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                              <form method="post" class="form-horizontal" enctype="multipart/form-data"> 
                                    <div class="col-sm-10">
                                      <input type="file" class="form-control" name="image"  id="fileInput" type="file" placeholder="Change profile picture">
                                    </div>

                                    <div class="row" style="text-align: right">
                                        <div class="col-md-12">
                                            <button type="submit" name="picture" class="btn btn-secondary btn-sm">  <i class="fa fa-upload"></i> Change</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal --> 
                  <div class="tab-pane" id="settings">


                    <div class="timeline timeline-inverse">  
                      <div>
                        <i class="fas fa-building bg-purple"></i>

                        <div class="timeline-item">
                          <span class="time"></span>

                          <h3 class="timeline-header card-outline "><a  href="#">User Id</a> ~ <?php echo $user_row['roll_number'] ?>  |  update your information </h3>
                          <div class="timeline-body">
                           <form method="post" action="" class="form-horizontal"> 
                            <div class="row">  
                                <div class="col-sm-4"><div class="form-group">
                                    <label>User name<span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" name="Username" placeholder="Enter your User name" value="<?php echo $user_row['Username']; ?>" required> 
                                  </div>
                                </div> 
                                <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>Gender <span style="color: red;">*</span></label>
                                        <div class="select2-purple"> 
                                          <select class="form-control select2" name="gender" data-dropdown-css-class="Select a Gender"   style="width: 100%;" required>
                                             <option value="<?php echo $user_row['gender']; ?>"><?php echo $user_row['gender']; ?></option> 
                                              <option value="MALE">MALE</option>
                                              <option value="FEMALE">FEMALE</option> 
                                        </select>
                                        </div> 
                                      </div>
                                </div> 
                                 <div class="col-sm-4">
                                  <div class="form-group">
                                    <label>Age<span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" name="Age" placeholder="Enter your Sge" value="<?php echo $user_row['Age']; ?>" required> 
                                  </div>
                                </div> 
                                  <!-- /.form-group -->
                                </div> 
                                            <!-- /.row --> 
                                  <div class="row">
                                    <div class="col-sm-4">
                                      <div class="form-group">
                                        <label>Category <span style="color: red;">*</span></label>
                                        <div class="select2-purple"> 
                                          <select class="form-control select2" name="IndustrialCategory" data-dropdown-css-class="Select a Year of study"   style="width: 100%;" required>
                                             <option value="<?php echo $user_row['IndustrialCategory']; ?>"><?php echo $user_row['IndustrialCategory']; ?></option> 
                                              <option value="education">Education</option>
                                              <option value="ecommerce">Ecommerce</option>
                                              <option value="entrepreneur">Entrepreneur</option>
                                              <option value="businessman">Business</option>
                                              <option value="Other">Other</option> 
                                        </select>
                                        </div> 
                                      </div>
                                    </div>
                                    <div class="col-sm-4">
                                      <div class="form-group">
                                        <label>Vender/Company <span style="color: red;">*</span></label>
                                        <input type="text" class="form-control" name="vender" placeholder="Enter your Company / vender" value="<?php echo $user_row['vender']; ?>" required> 
                                      </div>
                                 </div>
                                    <div class="col-sm-4">
                                      <div class="form-group">
                                        <label>Location <span style="color: red;">*</span></label>
                                        <input type="text" class="form-control" name="CurrentLocation" placeholder="Enter your Current Location" value="<?php echo $user_row['CurrentLocation']; ?>" required> 
                                      </div>
                                 </div>     
                                    <!-- /.col -->
                              </div>
                               <div class="row">  
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <label>Phone Number <span style="color: red;">*</span></label>
                                    <div class="input-group">
                                       <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                     </div>
                                   <input type="text" class="form-control" name="mobile" placeholder="Phone Number" value="<?php echo $user_row['mobile']; ?>" required>
                                 </div>
                                  </div>
                                </div> 
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <label>Email <span style="color: red;">*</span></label>
                                    <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="email" class="form-control" name="Email" placeholder="Email" required value="<?php echo $user_row['Email']; ?>">
                                  </div>
                                  </div>
                                </div> 
                                  <!-- /.form-group -->
                                </div>  
                                <div class="row" style="text-align: right">
                                  <div class="col-md-12"> 
                                      <button type="submit" name="change" class="btn btn-secondary btn-sm">  <i class="fa fa far fa-send"></i> SEND</button>
                                  </div>
                              </div>
                            </form>
                          </div> 
                        </div>
                      </div>
                       <div>
                        <i class="fas fa-key bg-primary"></i>

                        <div class="timeline-item">
                          <span class="time"></span>

                          <h3 class="timeline-header card-outline">Change Password</h3>

                          <div class="timeline-body">  
                            <form method="post" action="" class="form-horizontal"> 
                               <div class="row">  
                                  <div class="col-sm-4">
                                      <div class="form-group">
                                      <input type="hidden" id="password" name="PasswordHash" value="<?php echo $user_row['PasswordHash']; ?>">
                                      <label>Current Password </label>  
                                         <input type="password" class="form-control" id="current_password" name="current_password"  placeholder="Current Password" >
                                      </div>
                                     </div>
                                     <div class="col-sm-4">
                                      <div class="form-group">
                                        <label>New Password  </label>  
                                        <input type="password" class="form-control" id="new_password" name="new_password" placeholder="New Password">
                                      </div>
                                    </div>
                                   <div class="col-sm-4">
                                      <div class="form-group">
                                      <label>Re-Enter Password  </label>  
                                        <input type="password" class="form-control" id="retype_password" name="retype_password" placeholder="Re-type Password" >
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="row" style="text-align: right">
                                  <div class="col-md-12"> 
                                      <button type="submit" name="password" class="btn btn-secondary btn-sm">  <i class="fa fa far fa-edit"></i> CHANGE</button>
                                  </div>
                              </div>
                            </form>
                          </div> 
                        </div>
                      </div>
                      <!-- END timeline item -->
                    </div>
                  </div>  
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    
<script src="../stp_con/jquery/jquery.min.js"></script> 
<script src="../stp_con/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="../stp_con/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> 
<script src="../assets/assets/js/adminlte.min.js"></script>   
<script src="../stp_con/opace-progress/pace.min.js"></script>
</body>
</html> 
         
     <?php 
          $row = mysqli_fetch_array($query);  
          if (isset($_POST['picture'])){   

          $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
          $image_name = addslashes($_FILES['image']['name']);
          $image_size = getimagesize($_FILES['image']['tmp_name']);

          move_uploaded_file($_FILES["image"]["tmp_name"], "../assets/img/" . $_FILES["image"]["name"]);
          $adminthumbnails = "../assets/img/" . $_FILES["image"]["name"];
                
                mysqli_query($conn,"update user set thumbnail = '$adminthumbnails' where Email  = '$session_id' ")or die(mysqli_error());

          mysqli_query($conn,"UPDATE user SET  thumbnail='$adminthumbnails' where Email='$session_id'") 
          or die(mysqli_error()); 
          ?>
          <script> 
          $.jGrowl(" Profile Successfully Changed", { header: 'Profile Update' });  
          </script>
          <?php
        }
     ?>

 <script>
      jQuery(document).ready(function(){
      jQuery("#change_password").submit(function(e){
          e.preventDefault();
            
            var password = jQuery('#password').val();
            var current_password = jQuery('#current_password').val();
            var new_password = jQuery('#new_password').val();
            var retype_password = jQuery('#retype_password').val();
            if (password != current_password)
            {
            $.jGrowl("Password does not match with your current password  ", { header: 'Change Password Failed' });
            }else if  (new_password != retype_password){
            $.jGrowl("Password does not match with your new password  ", { header: 'Change Password Failed' });
            }else if ((password == current_password) && (new_password == retype_password)){
          var formData = jQuery(this).serialize();
          $.ajax({
            type: "POST",
            url: "index.php?page=update_password",
            data: formData,
            success: function(html){
          
            $.jGrowl("Your password is successfully change", { header: 'Change Password Success' });
            var delay = 2000;
              setTimeout(function(){ window.location = 'index.php?page=dashboad'  }, delay);  
            
            }
            
            
          });
      
          }
        });
      });
</script>