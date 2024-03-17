<?php
   
include ('includes/connection.php'); 
if (isset($_POST['comment_n'])){
$EmailID = $_POST['Email'];  
$Subject = $_POST['Subject']; 
$RecipientID = $_POST['RecipientID']; 
$Body = $_POST['comment']; 
$assessor=mysqli_query($conn,"INSERT INTO `email`(`EmailID`,   `RecipientID`, `Subject`, `Body`) VALUES ('$EmailID', '$RecipientID','$Subject','$Body')");
  
  if($assessor){ 
     ?>
         <script type="text/javascript">
             alert("Your message has been sent. Thank you");
         </script>
      <?php  
      }  
      else{
         ?>
         <script type="text/javascript">
             alert("Sorry your message fail Try again!");
         </script>
        <?php 
    }
  } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cybershield-Social Engineering</title>
  <meta content="" name="descriptison"> 

  <link href="assets/img/logo.jpg" rel="icon">
  <link href="assets/img/logo.jpg" rel="apple-touch-icon"> 
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet"> 
  <link href="assets/css/main.css" rel="stylesheet">   
</head>

<body>

  <!-- ======= Top Bar ======= -->
   <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:info@cyberShield.ac.tz">cyberShieldTM@gmail.com</a>
        <i class="icofont-phone"></i> +255 686 969 536
      </div>
      <div class="social-links">
         <a href="views/Tra_login.php" style="color: white;"><i class="icofont-linkedin">  Training Management System </i></a> 
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
     <a href="index.php" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#ICR">IRP MODULE</a></li>
          <li><a href="#services">Services</a></li> 
          <li><a href="#donate">Donate</a></li>
          <li class="drop-down"><a href="">Category</a>
          <ul>
            <li><a href="#">IT TOOL</a></li> 
            <li><a href="views/police.php">Policy</a></li>
            <li><a href="#blog">Blog</a></li> 
          </ul>
        </li> 
          <li><a href="#contact">Contact</a></li> 
          <li><a href="views/login.php">Login</a></li> 
        </ul>
      </nav> 

      <a href="views/PS_index.php" class="appointment-btn bg-primary scrollto"><span class="d-none d-md-inline"> PHISHING </span>SIMULATION</a>

    </div>
  </header><!-- End Header -->

  <section id="hero"  class="intro">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
         <div class="intro-content display-table">
            <div class="table-cell">
              <div class="container">
                <!--<p class="display-6 color-d">Hello, world!</p>-->
                <h2 class="intro-title mb-4">CyberShield, where awareness unlock security </h2>
                <div class="line-mf"></div>
                <p class="intro-subtitle"><span class="text-slider-items">build security posture of your company with Us,train your employees,test thier security posture all with CyberShield TM,We consider the cultural values and local technique used by attacker(s), To develop real world scenarios in our effective mass delivered awareness training</span><strong class="text-slider"></strong></p>
                <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
              </div>
            </div>
          </div> 
    </div>
  </section><!-- End Hero -->

 
  <main id="main">   

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>  
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="assets/img/comp_5.gif" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left"> 
             <p class="lead text-justify">
              CyberShield is the Tanzania’s largest integrated platform for security awareness training, we offer Customized phishing simulations, IR plan templates and disaster recovery plans, for all crosscutting small and medium scale business industries, we provide person privacy cultural practices highlights and   social engineering attack avoidance techniques. The platform solely operates under CyberShield Tanzania Inc., its registry is under precedence.
            </p>
             <p class="lead text-justify">
              We consider the cultural values and local technique used in divulging personal information to develop real world scenarios in our effective mass delivered awareness training. 
            </p>
            <p class="lead text-justify">
                                    
               breaking the chains of technical and language barrier in ensuring outstanding human firewall in first line of defenses through security awareness training in the use 2+ languages including Swahili language
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

     <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
             <i class="bx bx-shield"></i> 
              <span data-toggle="counter-up">0</span>
              <p><strong>WORKS COMPLETED</strong> 
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bx bx-receipt"></i>
              <span data-toggle="counter-up">1</span>
              <p><strong>EXPERIENCE</strong>  
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-people"></i>
              <span data-toggle="counter-up">5</span>
              <p><strong>partners</strong> 
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-award"></i>
              <span data-toggle="counter-up">0</span>
              <p><strong>Awards</strong> 
            </div>
          </div>

        </div>

      </div>
    </section>
 
    <section id="ICR" class="appointment section-bg">
      <div class="container" data-aos="fade-up"> 

        <div class="section-title">
          <h2>INCIDENT RESPONSE</h2>
          <p>A comprehensive resource Pool designed to empower your organization in swiftly and effectively addressing IT security incidents</p>
        </div>
        <div class="row">
          <div class="col-md-4"> 
            <div class="work-box">
              <a href="views/irp_protocal.php" >
                <div class="work-img">
                  <img src="assets/img/Incident_investigation/3_investigation.png" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Protocal</h2> 
                    <div class="w-more">
                      <a href="views/irp_protocal.php"><span class="w-ctegory">get to know</span></a>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="views/irp_protocal.php"> <i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
          </div>
         <div class="col-md-4">
            <div class="work-box">
              <a href="views/irp_guidance.php" >
                <div class="work-img">
                  <img src="assets/img/IT_tools/4_IT_tools.png" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">guidance</h2> 
                    <div class="w-more">
                      <a href="views/irp_guidance.php"><span class="w-ctegory">follow your lead here</span></a>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="views/irp_guidance.php"> <span class="bx bx-link"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="views/irp_security.php" >
                <div class="work-img">
                  <img src="assets/img/Compliance_checklist/2_compliance.png" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">IT security compliance checklist</h2> 
                    <div class="w-more">
                      <a href="views/irp_security.php"><span class="w-ctegory">all in one</span></a>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="views/irp_security.php"> <span class="bx bx-link"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="views/irp_cybercoach.php" >
                <div class="work-img">
                  <img src="assets/img/Cyber_coach/1_cyber_coach.png" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Cyber coach </h2> 
                    <div class="w-more">
                      <a href="views/irp_cybercoach.php"><span class="w-ctegory">talk to experts</span></a>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="views/irp_cybercoach.php"> <span class="bx bx-link"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="views/irp_technical.php" >
                <div class="work-img">
                  <img src="assets/img/Techdesk/2_techdesk.png" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Technical desk </h2> 
                    <div class="w-more">
                      <a href="views/irp_technical.php"><span class="w-ctegory">talk to us</span></a>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="views/irp_technical.php"> <span class="bx bx-link"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> 
          <div class="col-md-4">
            <div class="work-box">
              <a href="views/irp_report.php" >
                <div class="work-img">
                  <img src="assets/img/Incident_report/1_incident.png" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Incident Report</h2> 
                    <div class="w-more">
                      <a href="views/irp_report.php"><span class="w-ctegory">talk to us</span></a>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="views/irp_report.php"> <span class="bx bx-link"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> 
        </div>
      </div>
    </section>

    <!-- ======= Services Section ======= -->
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Tell Us About Your Organization<br>Different size organizations cope with different problems, but all have employees as the weak link in their IT security. The challenges of creating and running an awareness program vary depending on the number of employees. Please fill free to follow your respective industry to obtain a good preference training</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="icofont-monitor"></i></div>
            <h4 class="title"><a href="">Security awareness Training</a></h4>
            <p class="description"> We provide industrial based and customized training to employees and business firms to liverage security posture through awareness.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="icofont-linkedin"></i></div>
            <h4 class="title"><a href="">Phishing simulations</a></h4>
            <p class="description"> A localized and trending social engineering practices to employees to impact thier ability in real world phishing scenarios.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="icofont-camera"></i></div>
            <h4 class="title"><a href="">IT security consultancy</a></h4>
            <p class="description">Proving one pool connection with security experts across the world to build your security posture and ensures IT infrastructures are safe for your business contnuity.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="icofont-phone"></i></div>
            <h4 class="title"><a href="">TMS system</a></h4>
            <p class="description">Bring together your employees from Different locations and offer them one time training/ seminary with CyberShield Learning Management System.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="bx bx-edit"></i></div>
            <h4 class="title"><a href="">Cyber Rescue</a></h4>
            <p class="description">Interact with our trained AI module cyber coach  to respond to real time Cyber security incidents at your own due time.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="bx bx-world"></i></div>
            <h4 class="title"><a href="">Software solution</a></h4>
            <p class="description">Build your company digital profile and safe space with CyberShield coders TM a subsidiary workforce of the cyberShield Tanzania inc.</p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

     

     <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="assets/img/team/god_1.jpg" class="testimonial-img" alt="">
            <h3>Eng.ARUGA Godwin</h3>
            <h4> Chair Man & Cybersecurity practitionerr</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
             Aruga leads our team with a wealth of experience in cybersecurity. His commitment to ensuring digital safety to all business scale companies, and his visionary approach guide our organization's strategic direction. He works hard to control the training content and approach used to ensure successful of our company
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/team/zep_1.jpg" class="testimonial-img" alt="">
            <h3>ZEPHANIA JAMES</h3>
            <h4> CO-founder, Full Stack Developer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Zephania James is our go-to expert for all things Full Stack Development. With a keen eye for detail and a passion for creating seamless user experiences, Zephania brings innovation to every project, he works ultimately to ensure technical consistency of our platform.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/team/din_1.jpg" class="testimonial-img" alt="">
            <h3>DINAH MDOLLO</h3>
            <h4>CO-founder, Content Creator & Front-End Developer & UI UX Designer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
             Dinna is the creative force behind our content. As a Front-End Developer, she combines design flair with technical expertise to deliver engaging and visually appealing digital experiences. Along learning experience, she ensures a beauty of this digital room to its dwellers.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div> 

          <div class="testimonial-item">
            <img src="assets/img/team/dev_1.jpg" class="testimonial-img" alt="">
            <h3>DAVIS MARANDU</h3>
            <h4> CO-founder, desktop & embedded systems design, still and motion graphics, mechatronics.</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Davis, our programming maestro, turns complex challenges into elegant solutions. His expertise in programming languages makes him an invaluable asset to our team, in both desktop & embedded systems design, still and motion graphics, he is the giant of mechatronics.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <section id="donate" class="blog-mf section-bg"">
      <div class="container" data-aos="fade-up" data-aos-delay="100"> 
        <div class="section-title">
          <h2>donate</h2>
          <p> Help to Transform security awareness and Education<br>Your generosity power of supporting us has the power to transform the landscape of cybersecurity education. By enganging with our programs you become a vital part of a community dedicated to safeguarding individuals and organizations from cyber threats</p>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="views/donate.php"><img src="assets/img/Cyber_coach/2_cyber_coach.png" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">who are you</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="views/donate.php" style="color: #393636;">donate here</a></h3>
                <p class="card-description">
                  fintech companies are more targetted by the cyber criminals than other companies while individuals are also in high risk from end devices.
                </p>
              </div>
              <div class="card-footer">
              <div class="post-author">
                  <a href="views/donate.php" style="color: #393636;">
                    <p >See More</p>
                  </a>
                </div> 
                <div class="post-date">
                  <span class="icofont-plus"></span> hints
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="views/donate.php"><img src="assets/img/IT_security/2_IT_security.png" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Phishing landscape</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="views/donate.php" style="color: #393636;">do you know ?</a></h3>
                <p class="card-description text-justify">
                   most of DDOS attack targetting comapny are initiated through phishing techniques becouse employees are the weakest link in IT infrastructure network.
                </p>
              </div>
               <div class="card-footer">
              <div class="post-author">
                  <a href="views/donate.php" style="color: #393636;">
                    <p >See More</p>
                  </a>
                </div> 
                <div class="post-date">
                  <span class="icofont-plus"></span> hints
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="views/donate.php"><img src="assets/img/Cyber_coach/3_cyber_coach.png" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Security breach</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="views/donate.php" style="color: #393636;">do you know ?</a></h3>
                <p class="card-description text-justify">
                 Over 70% attacks security failures are due to ineffective management and 30% are for technical reasons.
                </p>
              </div>
               <div class="card-footer">
              <div class="post-author">
                  <a href="views/donate.php" style="color: #393636;">
                    <p >See More</p>
                  </a>
                </div> 
                <div class="post-date">
                  <span class="icofont-plus"></span> hints
                </div>
              </div>
            </div>
          </div>
        </div> 
      </div>
    </section><!-- End Portfolio Section -->
 
 
    <section id="blog" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2> our community</h2>
          <p>we come together to share what belongs to us, that is digital safety, combining the great force of expertise coming together in a community like classroom, this is your new-school of expertise connection.</p>
        </div>

        <div class="row">  

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="400"> 
               <span class="advanced">Community</span>
              <a href="views/blog_trendings.php" >
                <div class="work-img">
                  <img src="assets/img/blog/trending.png" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8 text-left">
                    <h2 class="w-title">Trending topics</h2> 
                    <div class="w-more">
                      <a href="views/blog_trendings.php"><span class="w-ctegory">explore here</span></a>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="views/irp_technical.php"> <span class="bx bx-link"></span></a>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
          </div> 
         
          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="400"> 
               <span class="advanced">Community</span>
              <a href="views/blog_discussion.php" >
                <div class="work-img">
                  <img src="assets/img/blog/discussion.jpeg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8 text-left">
                    <h2 class="w-title">discussions</h2> 
                    <div class="w-more">
                      <a href="views/blog_discussion.php"><span class="w-ctegory">follow</span></a>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="views/blog_discussion.php"> <span class="bx bx-link"></span></a>
                    </div>
                  </div>
                </div> 
            </div>
            </div>
           </div>

           <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="400"> 
               <span class="advanced">Community</span>
              <a href="views/blog_experts.php" >
                <div class="work-img">
                  <img src="assets/img/blog/expert.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8 text-left">
                    <h2 class="w-title">Expert conner</h2> 
                    <div class="w-more">
                      <a href="views/blog_experts.php"><span class="w-ctegory">Team work</span></a>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="views/irp_technical.php"> <span class="bx bx-link"></span></a>
                    </div>
                  </div> 
              </div>
              </div>
            </div>
          </div> 

           <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="400"> 
               <span class="advanced">Community</span>
              <a href="views/blog_post.php" >
                <div class="work-img">
                  <img src="assets/img/blog/fire.gif" alt="" class="img-fluid"> 
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8 text-left">
                    <h2 class="w-title">Blog with US </h2> 
                    <div class="w-more">
                      <a href="views/blog_post.php"><span class="w-ctegory">share experience here</span></a>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="views/blog_post.php"> <span class="bx bx-link"></span></a>
                    </div>
                  </div> 
              </div>
              </div>
            </div>
          </div> 

           <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="400"> 
               <span class="advanced">Community</span>
              <a href="views/blog_webiner.php" >
                <div class="work-img">
                  <img src="assets/img/blog/webiner.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8 text-left">
                    <h2 class="w-title">Webiner events</h2> 
                    <div class="w-more">
                      <a href="views/blog_webiner.php"><span class="w-ctegory">talk to us</span></a>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="views/blog_webiner.php"> <span class="bx bx-link"></span></a>
                    </div>
                  </div>
                </div> 
            </div>
            </div>
          </div> 

        </div>

      </div>
    </section><!-- End Pricing Section -->

     
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
           
        </div>

      </div> 

      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>CyberShield TM inc.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@cyberShield.ac.tz</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+255 686 969 536</p>
                </div>
              </div>
            </div>

          </div>

 
          <div class="col-lg-6"> 
            <form action="" method="post"> 
            <h5 class="title-left"> Make quotes  </h5> 
            <hr>
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" class="form-control"   placeholder="Your Name"> 
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="Email"  placeholder="Your Email"  required> 
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="Subject"  placeholder="Subject"  required> 
                 <input type="hidden" name="RecipientID" value="cyberShieldTM@gmail.com"> 
              </div>
              <div class="form-group">
                <textarea class="form-control" name="comment" required placeholder="Message"></textarea> 
              </div> 
              <div class="text-center"><button type="submit" name="comment_n" class="form-control btn-primary">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>CyberShield</h3>
              <p>
               CyberShield TM inc<br> 
                <strong>Phone:</strong> +255 686 969 536<br>
                <strong>Email:</strong> cyberShieldTM@gmail.com<br>
              </p>
              <div class="social-links mt-3"> 
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a> 
                
              </div>
              <br>
              <h4>Change Language</h4> 
              <a href="#"> <button type="submit" class="bg-primary" style="border-color: white; color: white"><img src="assets/img/Taz.png" width="40" height="40"  alt="" class="avatar rounded-squre"> Swahili</button>  </a>
               <a href="#"><button type="submit" class=" bg-primary" style="border-color: white; color: white"><img src="assets/img/Eng.png" width="40" height="40"  alt="" class="avatar rounded-squre"> English</button></a> 
              
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Donate</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">IRP Module</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Phishing Simulation</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Security awareness Training</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Phishing simulations</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">IT security consultancy</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">TMS system</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Cyber Rescue</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Software solution</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter text-justify">
            <h4>Tell Us About Your Organization</h4>
            <p> Different size organizations cope with different problems, but all have employees as the weak link in their IT security. The challenges of creating and running an awareness program vary depending on the number of employees. Please fill free to follow your respective industry to obtain a good preference training</p> 

          </div>

        </div>
      </div>
    </div> 

     <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; <?php echo date('Y'); ?> Copyright <strong>CyberShield Tanzania Inc.</strong> All Rights Reserved</p>
            
              <p class="text-center">Designed by <b>CyberShield Coder TM.</b></p>
         
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script> 
  <script src="assets/vendor/counterup/counterup.min.js"></script> 
   <script src="assets/vendor/counterup/jquery.counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/js/main.js"></script> 

   
</body>

</html>

