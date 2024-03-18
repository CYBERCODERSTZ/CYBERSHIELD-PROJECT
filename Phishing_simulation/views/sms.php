  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>CYBERCOACH</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">SMS CHAT BOT</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row"> 
        <!-- /.col -->
        <div class="col-md-8">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">CYBERCOACH</h3> 
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="intro-content display-table">

                <div class="table-cell">
                  <div class="card-body"> 
                    <strong><i class="fas fa-map-marker-alt mr-1"></i>SMS CHATBOT</strong>

                    <p class="text-muted">
                     “Interact with your security coach, copy and paste the message to be tested as spam and wait for response, ask questions and have immediate feedback. “
                    </p> 
                  
                  </div>  
                </div>
              </div>
            </div> 
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
<script src="../stp_con/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> 
<script src="../assets/assets/js/adminlte.min.js"></script>   
<script src="../stp_con/opace-progress/pace.min.js"></script>

   


<script defer async>
  document.addEventListener('DOMContentLoaded', function() {
    // setting global variables
    window.botId = 3207
    
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