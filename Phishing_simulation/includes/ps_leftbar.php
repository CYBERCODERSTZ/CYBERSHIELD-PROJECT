<!-- Main Sidebar Container -->
  <aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4" style="background: linear-gradient(#142334,#27411e,#142334);" > 
      <a href="ps_admin.php?page=dashboad" class="brand-link"  >
      <img src="../assets/img/Logo_1.jpg" alt="image" class="brand-image img-circle elevation-2">
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
          
           <li class="nav-header"> 
              phishing simulation panel
                <span class="right badge badge-warning">Info</span> 
            </li>   
             
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
               Start phishing
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">  
              <li class="nav-item">
                <a href="ps_admin.php?page=email" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Email</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="ps_admin.php?page=sms" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SMS</p>
                </a>
              </li>  
               <li class="nav-item">
                <a href="ps_admin.php?page=Security" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Make a call</p>
                </a>
              </li>
               
            </ul>
          </li>  
          
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-sms"></i>
              <p>
                Check received
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">  
              <li class="nav-item">
                <a href="ps_admin.php?page=Security" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Email</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="ps_admin.php?page=Security" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sms</p>
                </a>
              </li>  
            </ul>
          </li>     
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div> 
    <div class="sidebar-custom"> 
      <a href="#" class="btn btn-secondary hide-on-collapse pos-right">Cyber</a>
    </div>
    <!-- /.sidebar-custom -->
  </aside>