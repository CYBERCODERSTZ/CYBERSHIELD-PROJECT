<!-- Main Sidebar Container -->
  <aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4" style="background: linear-gradient(#142334,#27411e,#142334);" > 
      <a href="admin.php?page=profile" class="brand-link"  >
      <img src="assets/img/Logo_1.jpg" alt="image" class="brand-image img-circle elevation-2">
      <strong> <span class="brand-text font-weight-light color-white">CYBERSHIELD</span></strong>
    </a> 

    <!-- Sidebar -->
    <div class="sidebar"> 
      <div class="pb-3">  
      </div>
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">    
           <?php 
            include('includes/connection.php');
            $query= mysqli_query($conn,"select * from user where Email = '$session_id'")or die(mysqli_error());
            $q = mysqli_fetch_array($query); 
            $ass1="Training";    
            ?> 
            <?php
            if ($q['Role']=="$ass1") {
            ?>   
          <li class="nav-item">
            <a href="admin.php?page=Tra_dashboad" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard 
              </p>
            </a> 
          </li>
           <li class="nav-header"> 
              Training panel
                <span class="right badge badge-warning">Info</span> 
            </li> 
          <li class="nav-item">
            <a href="cyber_tms/story.html" class="nav-link">
              <i class="nav-icon fas fa-university"></i>
              <p>
                Training MS 
              </p>
            </a> 
          </li> 
           <?php }else{
            ?>
            <li class="nav-item">
            <a href="admin.php?page=dashboad" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard 
              </p>
            </a> 
          </li>  
           <li class="nav-header"> 
              Admin panel
                <span class="right badge badge-warning">Info</span> 
            </li>   
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>
                User Management 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">  
              <li class="nav-item">
                <a href="admin.php?page=trainer" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin.php?page=Sponsor" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sponsor</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="admin.php?page=phishing" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ps member</p>
                </a>
              </li>  
              <li class="nav-item">
                <a href="admin.php?page=facilitator" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Facilitetor</p>
                </a>
              </li> 
            </ul>
          </li>  
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                IRP MODULE
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">  
              <li class="nav-item">
                <a href="admin.php?page=Protocal" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Incident Protocal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin.php?page=Guidance" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Incident Guidance</p>
                </a>
              </li>  
               <li class="nav-item">
                <a href="admin.php?page=Security" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Security Compliance</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin.php?page=Coarch" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cyber Coach </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin.php?page=Technical" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Technical Desk </p>
                </a>
              </li>
            </ul>
          </li>  
          
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-sms"></i>
              <p>
                 Chats pannel
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">  
              <li class="nav-item">
                <a href="Chart/login.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chats box</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin.php?page=email" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Email site</p>
                </a>
              </li>  
            </ul>
          </li>
          <li class="nav-item">
            <a href="admin.php?page=Donate_d" class="nav-link">
              <i class="nav-icon fas fa-search"></i>
              <p>
                Donate 
              </p>
            </a> 
          </li>  
          <?php }?> 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

    <div class="sidebar-custom"> 
      <a href="#" class="btn btn-secondary hide-on-collapse pos-right">Cyber</a>
    </div>
    <!-- /.sidebar-custom -->
  </aside>