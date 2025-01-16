<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Orbit Media</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
   <!-- Favicons -->
   <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{url('/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{url('/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{url('/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{url('/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{url('/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{url('/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{url('/css/style.css')}}" rel="stylesheet">


 
</head>

<body>



<header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="#intro" class="scrollto"><img src="{{asset('/img/logo.png')}}" alt="" height="270px" width="100px" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#upcoming_service">Upcoming</a></li>
         
          
             
          
         
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->


  <!--==========================
  Header
  ============================-->
  @yield('content')
    
        <footer id="footer">
          <div class="footer-top">
            <div class="container">
              <div class="row">
    
                <div class="col-lg-4 col-md-6 footer-info">
                  <h3>Orbit</h3>
                  <p>At Orbit Media Solutions, we are dedicated to crafting innovative digital strategies that drive results and build lasting partnerships. Your success is our mission, and we’re here to help your business reach for the stars.</p>
                </div>
    
                <div class="col-lg-2 col-md-6 footer-links">
                  <h4>Useful Links</h4>
                  <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Terms of service</a></li>
                    <li><a href="#">Privacy policy</a></li>
                  </ul>
                </div>
    
                <div class="col-lg-3 col-md-6 footer-contact">
                  <h4>Contact Us</h4>
                  <p>
                    Kirkdale House,
                    Kirkdale Road
                    E11 1HP
                    London
                    UK<br>
                    <strong>Phone:</strong> 07935390848<br>
                    <strong>Email:</strong> info@theorbit.one<br>
                  </p>
    
                  <div class="social-links">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.facebook.com/profile.php?id=61553231765100" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/orbit.mediasolutions/?igsh=MXJqYnd6ZDh5MXkwNw%3D%3D" class="instagram"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                    <a href="https://www.linkedin.com/company/orbitmediasolutions" class="linkedin"><i class="fa fa-linkedin"></i></a>
                  </div>
    
                </div>
    
                <div class="col-lg-3 col-md-6 footer-newsletter">
                  <h4>Our Newsletter</h4>
    
                  <form action="" method="post">
                    <input type="email" name="email"><input type="submit" value="Subscribe">
                  </form>
                </div>
    
              </div>
            </div>
          </div>
    
          <div class="container">
            <div class="copyright">
              &copy; Copyright <strong>Orbit</strong>. All Rights Reserved
            </div>
    
          </div>
        </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="/public/lib/jquery/jquery.min.js"></script>
<script src="/public/lib/jquery/jquery-migrate.min.js"></script>
<script src="/public/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/public/lib/easing/easing.min.js"></script>
<script src="/public/lib/mobile-nav/mobile-nav.js"></script>
<script src="/public/lib/wow/wow.min.js"></script>
<script src="/public/lib/waypoints/waypoints.min.js"></script>
<script src="/public/lib/counterup/counterup.min.js"></script>
<script src="/public/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="/public/lib/isotope/isotope.pkgd.min.js"></script>
<script src="/public/lib/lightbox/js/lightbox.min.js"></script>
<!-- Contact Form JavaScript File -->
<script src="/public/contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="/public/js/main.js"></script>


</body>
</html>
