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
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">First Attach information</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
                <div id="accordion">
                  <div class="card card-primary">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                          Get you free Playbook
                        </a>
                      </h4>
                    </div>
                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                      <div class="card-body "> 
                         <div class="card-footer bg-white">
                          <?php    
                          include ('includes/connection.php'); 
                          if (isset($_POST['download'])){
                          $Email = $_POST['Email']; 
                          $down_email = $_POST['down_email']; 
                           
                            if($Email==$down_email){ 
                                   ?>
                                   <a href="../forms/playbook.pdf" target="_blank"    class="btn btn-default" style="color: white;"><i class="fas fa-download"></i> <u>Download Now</u></a>
                                  <?php  
                                }  
                                else{
                                  ?>  
                                  <script type="text/javascript">
                                   alert("Your Email doesn't Much Try Again");
                                  </script>
                                  <?php
                              }
                            } 
                           ?>
                           <br> <br>
                          <ul class="mailbox-attachments d-flex align-items-stretch clearfix"> 
                            <li> 
                              <a data-toggle="modal"  href="#doc" class="mailbox-attachment-name"><span class="mailbox-attachment-icon"><i class="far fa-file-pdf"></i></span></a>

                              <div class="mailbox-attachment-info">
                                <a data-toggle="modal"  href="#doc" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> Playbook.pdf</a>
                                    <span class="mailbox-attachment-size clearfix mt-1">
                                      <span>3.8 KB</span>
                                      <a data-toggle="modal"  href="#doc"   class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                                     <!--  <a href="../forms/Unit-8.pdf" target="_blank" style="">Download <i class="fa fa-download"></i></a> -->
                                    </span>
                              </div>
                              
                            </li> 
                          </ul>

                        </div>  
                           <div class="modal fade" id="doc">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h4 class="modal-title">Do you want To Download Playbook </h4>
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  </div> 
                                  <div class="modal-body">  
                                    <form action="" method="post"> 
                                          <input type="hidden" name="Email" value="<?php echo $row['Email'] ?>">  
                                          <label for="fa-comment" class="form-label">Your Email <span style="color: red;">*</span></label>
                                          <input type="email" name="down_email" required="required"  class="form-control" placeholder="Enter Your Email Here"> <br> 
                                          <div class="row" style="text-align: right">
                                              <div class="col-md-12"> 
                                                  <button type="submit" name="download" class="btn btn-secondary btn-sm">  <i class="fa fa far fa-cloud-download-alt"></i> Download</button>
                                              </div>
                                          </div>
                                      </form>
                                  </div> 
                              </div> 
                          </div> 
                      </div> 
                      </div>
                    </div>
                  </div>
                  <div class="card card-danger">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                          Phishing Mail
                        </a>
                      </h4>
                    </div>
                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                      <div class="card-body text-justify">
                     <h5> What you need to know about the required 2FA initiative</h5>
We are enrolling GitHub users who manage or author code on GitHub. More information about our efforts to make 2FA adoption easy and safe can be found in this <u>blog post</u>. This is a GitHub.com program, and unrelated to any organization or enterprise membership your account may have.
                      </div>
                    </div>
                  </div>
                  <div class="card card-info">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
                         Phishing sms
                        </a>
                      </h4>
                    </div>
                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                       Ndugu, MToto wangu anaumwa sana Nitumie 100,000/= kwenye namba Hii 0745 654 234, Jina ni Amosi Juma
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Blogs</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="../assets/img/IT_tools/2_IT_tools.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="../assets/img/IT_tools/3_IT_tools.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="../assets/img/IT_tools/4_IT_tools.png" alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-custom-icon" aria-hidden="true">
                      <i class="fas fa-chevron-left"></i>
                    </span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-custom-icon" aria-hidden="true">
                      <i class="fas fa-chevron-right"></i>
                    </span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
      </div> 
      </section> 
     <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>
  </div> 
<script src="../stp_con/jquery/jquery.min.js"></script> 
<script src="../stp_con/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="../stp_con/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> 
<script src="../assets/assets/js/adminlte.min.js"></script>   
<script src="../stp_con/opace-progress/pace.min.js"></script>
</body>
</html> 
 

<script defer async>
  document.addEventListener('DOMContentLoaded', function() {
    // setting global variables
    window.botId = 3204
    
    // create div with id = sarufi-chatbox
    const div = document.createElement("div")
    div.id = "sarufi-chatbox"
    document.body.appendChild(div)

    // create and attach script tag
    const script = document.createElement("script")
    script.crossOrigin = true
    script.type = "module"
    script.src = "https://cdn.jsdelivr.net/gh/flexcodelabs/sarufi-chatbox/example/vanilla-js/script.js"
    document.head.appendChild(script)

    // create and attach css
    const style = document.createElement("link")
    style.crossOrigin = true
    style.rel = "stylesheet"
    style.href = "https://cdn.jsdelivr.net/gh/flexcodelabs/sarufi-chatbox/example/vanilla-js/style.css"
    document.head.appendChild(style)
  });
</script>