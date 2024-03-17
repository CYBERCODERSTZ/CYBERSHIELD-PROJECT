 
 <div class="content-wrapper"> 
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <a><strong>Comments Page</strong></a>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Charts</a></li>
              <li class="breadcrumb-item active">Comment</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

   <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row"> 
          <!-- /.col -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills ">
                  <li class="nav-item"> <i class="fas fa-comment"></i> Comment</a></li>  
                </ul>
              </div>
              <!-- /.card-header --> 
              <div class="card-body"> 
              <div class="tab-content">
              <!-- /.tab-pane -->
              <div class="active tab-pane" id="teacher">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-12">  
                    <div class="card"> 
                 <!-- /.card-header -->
                  <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-striped display table-bordered" >
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>ROle NO</th>
                            <th>Name</th> 
                            <th>Email</th> 
                            <th>Recipient</th> 
                            <th>Subject</th> 
                            <th>Message</th> 
                            <th>Date</th> 
                            <th class="not-export-col"></th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php
                            include ('includes/connection.php'); 
                            $i = 1;
                            $selected = mysqli_query($conn,"SELECT * FROM `email`,`user` WHERE email.SenderID=user.roll_number");
                             while($row = mysqli_fetch_array($selected)){ 
                        
                            ?>
                        <tr>
                          <td class="text-center"><?php echo $i++ ?></td>    
                          <td><?php echo $row['SenderID']; ?></td>
                          <td><?php echo $row['FullName']; ?></td>
                          <td><?php echo $row['EmailID']; ?></td> 
                          <td><?php echo $row['RecipientID']; ?></td>
                          <td><?php echo $row['Subject']; ?></td>
                          <td><?php echo $row['Body']; ?></td>
                          <td><?php echo $row['SendDate']; ?></td>
                          <td>
                          <div class="btn-group"> 
                            <a data-id='<?php echo $row['id'] ?>' href="admin.php?page=compose&id=<?php echo $row['id']; ?>" class="btn btn-primary btn-flat">
                              <i class="fas fa-sms"></i></a>
                             <a href="delete_comment.php?del=<?php echo $row['EmailID']; ?>" onclick="return confirm('Are you sure you want to delete?');" class="btn btn-danger btn-flat delete_Resource">
                              <i class="fas fa-trash"></i>
                            </a>   
                         </div>
                         </td>
                      </tr> 
                      <?php }?> 
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>ROle NO</th>
                            <th>Name</th> 
                            <th>Email</th> 
                            <th>Recipient</th> 
                            <th>Subject</th> 
                            <th>Message</th> 
                            <th>Date</th> 
                            <th class="not-export-col"></th>
                        </tr>
                      </tfoot>
                    </table> 
                 </div>
               </div>
              </div> <!-- end card body-->
            </div> <!-- end card --> 
            </div>
            <!-- /.card -->
          </div>
          </div>  
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
    <!-- /.content -->
  </div>
 <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>
 <script src="stp_con/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="stp_con/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="stp_con/datatables/jquery.dataTables.min.js"></script>
<script src="stp_con/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="stp_con/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="stp_con/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="stp_con/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="stp_con/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="stp_con/jszip/jszip.min.js"></script> 
<script src="stp_con/pdfmake/pdfmake.min.js"></script>
<script src="stp_con/pdfmake/vfs_fonts.js"></script> 
<script src="stp_con/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="stp_con/datatables-buttons/js/buttons.print.min.js"></script>
<script src="stp_con/datatables-buttons/js/buttons.colVis.min.js"></script>  
<script src="assets/assets/js/adminlte.min.js"></script>
 <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)'); 
  });
</script>