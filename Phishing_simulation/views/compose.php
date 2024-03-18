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
  ?>
  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Inbox</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Inbox</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="ps_admin.php?page=email" class="btn btn-primary btn-block mb-3">Back to Inbox</a>

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Folders</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
             <?php 
              $email_id="cyberShieldTM@gmail.com";
              $selected = mysqli_query($conn,"SELECT count(Body) as count FROM `email`,`user` WHERE user.roll_number=email.SenderID AND user.Email='$email_id'");
                $row_count = mysqli_fetch_array($selected);
              ?>
            <div class="card-body p-0">
              <ul class="nav nav-pills flex-column">
                <li class="nav-item active">
                  <a href="ps_admin.php?page=email" class="nav-link">
                    <i class="fas fa-inbox"></i> Inbox
                    <span class="badge bg-primary float-right"><?php echo $row_count['count']; ?></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="ps_admin.php?page=sent" class="nav-link">
                    <i class="far fa-envelope"></i> Sent
                  </a>
                </li>              
              </ul>
            </div>
            <!-- /.card-body -->
          </div> 
        </div>
        <!-- /.col -->
          <div class="col-md-9">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Compose New Message</h3>
              </div>
              <form method="post" action=""> 
              <div class="card-body">
                <div class="form-group">
                  <input class="form-control" placeholder="To: cyberShieldTM@gmail.com" disabled>
                </div>
                 <input type="hidden" name="Email" value="<?php echo $row['Email'] ;  ?>"> 
                  <input type="hidden" name="roll_number" value="<?php echo $row['roll_number'] ?>"> 
                  <input type="hidden" name="RecipientID" value="cyberShieldTM@gmail.com">
                <div class="form-group">
                  <input class="form-control" name="Subject" placeholder="Subject:" required>
                </div>
                <div class="form-group">
                    <textarea id="compose-textarea" name="comment" class="form-control" style="height: 10px" required> 
                      <p>Place some text here</p> 
                    </textarea>
                </div> 
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <div class="float-right"> 
                  <button type="submit" name="comment_n" class="btn btn-primary"><i class="far fa-envelope"></i> Send</button> 
              </div>
            </form>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

<script src="../stp_con/jquery/jquery.min.js"></script> 
<script src="../stp_con/bootstrap/js/bootstrap.bundle.min.js"></script> 
<link rel="stylesheet" href="../stp_con/summernote/summernote-bs4.min.css">
<script src="../stp_con/summernote/summernote-bs4.min.js"></script>
<script src="../assets/assets/js/adminlte.min.js"></script>   
<script src="../stp_con/opace-progress/pace.min.js"></script>

 <script>
  $(function () {
    //Add text editor
    $('#compose-textarea').summernote()
  })
</script>