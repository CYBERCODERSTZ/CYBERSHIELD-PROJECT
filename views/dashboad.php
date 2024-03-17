 
 <div class="content-wrapper">
    <section class="content-header"> 
      <div class="container-fluid"> 
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5><strong>Admin Panel</strong></h5>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li> 
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid --> 
    </section>

   <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
         <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php  
                  $place="CYBER/TR/";
                  $selected = mysqli_query($conn,"SELECT count(roll_number) as student  FROm  user WHERE roll_number LIKE '%$place%'");
                  $sel = mysqli_fetch_array($selected); 
                  ?>
                <h3><?php echo $sel['student']; ?></h3>  
                <p>Total Student</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>  
              <a href="admin.php?page=trainer" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a> 
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner"> 
                <?php  
                  $place="CYBER/Fc/";
                  $selected = mysqli_query($conn,"SELECT count(roll_number) as fac  FROm  user WHERE roll_number LIKE '%$place%'");
                  $sel = mysqli_fetch_array($selected); 
                  ?>
                <h3><?php echo $sel['fac']; ?></h3>  
                <p>Total Facilitator</p>
              </div>
              <div class="icon">
                <i class="fas fa-edit"></i>
              </div> 
              <a href="admin.php?page=facilitator" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a> 
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
              <?php  
                  $place="CYBER/TR/";
                  $selected = mysqli_query($conn,"SELECT count(ID) as donate  FROm  donate");
                  $sel = mysqli_fetch_array($selected); 
                  ?>
                <h3><?php echo $sel['donate']; ?></h3>   
                <p>Donating Information</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div> 
                <a href="admin.php?page=donate" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a> 
            </div>
          </div>
          <!-- ./col -->
          
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <?php  
                  $place="CYBER/TR/";
                  $selected = mysqli_query($conn,"SELECT count(SenderID) as comment  FROm  email");
                  $sel = mysqli_fetch_array($selected); 
                  ?>
                <h3><?php echo $sel['comment']; ?></h3> 
                <p>Total Comments</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>  
                <a href="admin.php?page=email" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a> 
            </div>
          </div>   
        </div> 

        <div class="row">
          <div class="col-md-12">
            <!-- The time line -->
            <div class="timeline">
               
              <div class="time-label">
                <span class="bg-red"><?php echo date('d-m-Y'); ?></span>
              </div> 
              <div>
                <i class="fas fa-envelope bg-blue"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 12:05</span>
                  <h3 class="timeline-header"><a href="#">INCIDENT RESPONSE PLAN MODULE</a></h3>

                  <div class="timeline-body">
                    The content of this module is likely to be uploaded to the DB by the content creator, as the 
                    UI/UX designer you should provide quick links interface to the following document below and 
                    the attached link to the repository by the backend developer.
                  </div>
                  <div class="timeline-footer">
                    <a href="" class="btn btn-primary btn-sm">See more</a> 
                  </div>
                </div>
              </div>  
              <div>
                <i class="fas fa-envelope bg-secondary"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 12:05</span>
                  <h3 class="timeline-header"><a href="#">IT TOOLS</a></h3>

                  <div class="timeline-body">
                   This will cover several tools APIs attached to the platform not limited to (attention to patent rights 
                    and APIs policy.
                  </div>
                  <div class="timeline-footer">
                    <a href="" class="btn btn-secondary btn-sm"><i class="fas fa-download"></i> Download</a> 
                  </div>
                </div>
              </div>   
              <div>
                <i class="fas fa-clock bg-success"></i>
              </div>
            </div>
          </div>
          <!-- /.col -->
        </div>
    </section> 
     <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>
  </div> 
<script src="stp_con/jquery/jquery.min.js"></script> 
<script src="stp_con/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="stp_con/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> 
<script src="assets/assets/js/adminlte.min.js"></script>   
<script src="stp_con/opace-progress/pace.min.js"></script>
</body>
</html> 
 