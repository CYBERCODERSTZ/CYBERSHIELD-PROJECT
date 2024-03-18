  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Read Mail</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Read Mail</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  <?php
  $id= $_GET['id']; 
  include ('includes/connection.php');  
  $selected = mysqli_query($conn,"SELECT * FROM `email`,`user` WHERE user.roll_number=email.SenderID AND email.id='$id' ");
  $del = mysqli_fetch_array($selected);

  ?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="ps_admin.php?page=compose" class="btn btn-primary btn-block mb-3">Compose</a>

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
              <h3 class="card-title">Read Mail</h3>

              <div class="card-tools">
                <a href="#" class="btn btn-tool" title="Previous"><i class="fas fa-chevron-left"></i></a>
                <a href="#" class="btn btn-tool" title="Next"><i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-read-info">
                <h5><?php echo $del['Subject']; ?></h5>
                <h6>From: Me
                  <span class="mailbox-read-time float-right"><?php echo $del['SendDate']; ?></span></h6>
              </div> 
              <div class="mailbox-read-message">
                 <div class="form-group">
                    <textarea id="compose-textarea" name="comment" class="form-control" style="height: 10px"> 
                       <p>Hello <u><?php echo $del['FullName']; ?></u>,</p>

                        <p><?php echo $del['Body']; ?></p> 
                        <p>Thanks,<u><?php echo $del['Email']; ?></u></p>
                    </textarea>
                </div> 
              
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            
            <div class="card-footer">
              <div class="float-right">
                <button type="button" class="btn btn-default"><i class="fas fa-reply"></i> Reply</button> 
            </div>
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