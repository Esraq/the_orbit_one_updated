@extends('layouts.master')

@section('content')



<header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="#intro" class="scrollto"><img src="public/img/logo.png" alt="" height="270px" width="100px" class="img-fluid"></a>
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
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="public/img/intro-img.svg" alt="" class="img-fluid">
      </div>

      <div class="intro-info">
        <h2> 
          Orbit Media Solutions:
          Elevating Your Digital
          Presence to New Heights</h2>


        <div>
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
          <a href="#services" class="btn-services scrollto">Our Services</a>
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>About Us</h3>
          <p>Join us as we embark on a mission to maximize your online potential and help your business reach the stars.</p>
        </header>

        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <p>
              At Orbit Media Solutions, we’re your trusted partner in navigating the ever-changing digital landscape. Our seasoned team of experts orbits your brand, crafting innovative strategies and delivering tailored solutions to propel your online presence to new heights. Whether it’s web design, SEO, content marketing, or social media management, we’re here to fuel your digital journey with stellar results.
            </p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">Why Choose Us</a></h4>
              <p class="description">Our team of digital marketing specialists boasts a wealth of experience and a proven track record of success. We know the digital landscape inside and out, ensuring you’re in the hands of experts who understand your unique needs.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-photo"></i></div>
              <h4 class="title"><a href="">Our Misions</a></h4>
              <p class="description">Our mission is not just about providing services. Now it’s about forging lasting partnerships, delivering measurable results, and empowering businesses to thrive in the ever-evolving digital landscape</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="">Our Aim</a></h4>
              <p class="description">our aim is to propel businesses into the digital forefront by providing innovative solutions that redefine success. Our commitment need to deliver smarter insights to elevate brands and foster sustainable growth.</p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
            <img src="public/img/about-img.svg" class="img-fluid" alt="">
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp">
            <img src="public/img/about-extra-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>Why Orbit.</h4>
            <p>
              Orbit Media Solutions has a history of delivering outstanding results for our clients. With a proven track record of success, we’ve earned a reputation as a reliable and trusted digital marketing agency.

The process starts with a comprehensive evaluation of your current digital presence, covering aspects such as website performance, online visibility, social media engagement, and beyond.
            </p>
            
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="public/img/about-extra-2.svg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
            <h4>Most Exclusive Service</h4>
            <p>
              The special service goes beyond the conventional offerings, as it integrates an array of services into a cohesive strategy that addresses every aspect of your digital presence.
            </p>
            <p>
              It begins with a thorough assessment of your current digital footprint, including website performance, online visibility, social media presence, and more
            </p>
            <p>
              Orbit Media Solutions has built a strong reputation for consistently delivering exceptional results for our clients. With a history of success, we are recognized as a trusted and dependable digital marketing agency.
            </p>
          </div>
          
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Services</h3>
          <p>Our team comprises seasoned professionals with expertise in various fields, ensuring that you receive services backed by knowledge and experience.</p>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="/hrm">Human Resource Management</a></h4>
              <p class="description">HRM (Human Resource Management) Software is a digital tool designed to streamline and automate various human resource functions within an organization.  </p> <br><br>
              
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="">Ecommerce Multi Vendor</a></h4>
              <p class="description">A multi-vendor eCommerce platform is a digital marketplace where multiple vendors can list their products for sale.These platforms often feature tools for inventory management, enabling vendors to track stock levels efficiently. </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Point of Sale</a></h4>
              <p class="description">


                Point of Sale (POS) software is a system that streamlines sales transactions, inventory management, payments, billing, customer tracking, employee management, discounts, and sales reports. 



              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Education Management Software</a></h4>
              <p class="description">Education Management Software (EMS) simplifies the administration of educational institutions.It manages student enrollment, tracking, and performance analytics efficiently.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-world-outline" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href="">Portfolio</a></h4>
              <p class="description">A portfolio site showcases personal or professional work, highlighting projects, skills, achievements, testimonials, experience, and creative expertise. </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-clock-outline" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href="">Company Website</a></h4>
              <p class="description">A company website represents a business online, showcasing its services, products, mission, team, testimonials, portfolio, blog, contact details, careers, news.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container">
        <header class="section-header">
          <h3>Why choose us?</h3>
          <p>Ecostructive IT focuses on sustainable technology solutions that reduce environmental impact while optimizing business efficiency and performance</p>
        </header>

        <div class="row row-eq-height justify-content-center">

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-diamond"></i>
              <div class="card-body">
                <h5 class="card-title">Innovative Solutions:</h5>
                <p class="card-text">Pioneering technologies and creative problem-solving approaches that drive business growth and efficiency</p>
                <a href="/" class="readmore">Read more </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-language"></i>
              <div class="card-body">
                <h5 class="card-title">Customer-Centric Service</h5>
                <p class="card-text">Exceptional support and personalized services that cater to the unique needs of each client.</p>
                <a href="/" class="readmore">Read more </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-object-group"></i>
              <div class="card-body">
                <h5 class="card-title">Skilled Expertise:</h5>
                <p class="card-text">A team of highly skilled professionals with deep industry knowledge and technical proficiency.</p>
                <a href="/" class="readmore">Read more </a>
              </div>
            </div>
          </div>

        </div>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">250</span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">15</span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">24</span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">10</span>
            <p>Hard Workers</p>
          </div>
  
        </div>

      </div>
    </section>


    <!--==========================
      Portfolio Section
    ============================-->
    
    <section id="upcoming_service" class="section-bg">
      <div class="container">
    
        <header class="section-header">
          <br><br>
          <h3>Our Upcoming Services</h3>
          <p>Explore our latest products and services designed to meet your needs.</p>
        </header>
        <div class="container my-5">
          <div class="row">
            <!-- First Card -->
            <div class="col-md-4 mb-3">
              <div class="card" style="border: none; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border-radius: 10px;">
                <div class="featured" style="position: absolute; top: 10px; left: 10px; background-color: #007bff; color: white; padding: 5px 10px; border-radius: 5px; font-size: 0.9rem; font-weight: bold;">Upcoming</div>
                <img src="public/img/erp.jpg" height="250px" width="100px" alt="Event" class="card-img-top" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                <div class="card-body">
                  <p class="card-text text-muted">May 5 - May 8, 2025</p>
                  <h5 class="card-title">ERP Software</h5>
                  <a href="#" class="btn btn-outline-primary w-100">View website</a>
                  
                </div>
              </div>
            </div>

           
            <!-- Second Card -->
            <div class="col-md-4">
              <div class="card" style="border: none; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border-radius: 10px;">
                <div class="featured" style="position: absolute; top: 10px; left: 10px; background-color: #007bff; color: white; padding: 5px 10px; border-radius: 5px; font-size: 0.9rem; font-weight: bold;">Upcoming</div>
                <img src="public/img/video-editing.jpg" alt="Event" class="card-img-top" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                <div class="card-body">
                  <p class="card-text text-muted">November 3 - November 7, 2025</p>
                  <h5 class="card-title">Virtual Reality (VR) Experiences</h5>
                  <a href="#" class="btn btn-primary w-100">View Website</a>
                </div>
              </div>
            </div>
    
            <!-- Third Card -->
            <div class="col-md-4 mb-3">
              <div class="card" style="border: none; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border-radius: 10px;">
                <div class="featured" style="position: absolute; top: 10px; left: 10px; background-color: #007bff; color: white; padding: 5px 10px; border-radius: 5px; font-size: 0.9rem; font-weight: bold;">Upcoming</div>
                <img src="public/img/web-design-development.jpg" alt="Event" class="card-img-top" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                <div class="card-body">
                  <p class="card-text text-muted">November 17 - November 21, 2025</p>
                  <h5 class="card-title">Mobile App Development for Niche Markets</h5>
                  <a href="#" class="btn btn-outline-primary w-100">View website</a>
                </div>  
              </div>
            </div>
    
          </div>
        </div>
      </div>
    </section>
    
    
    
    <!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
   <!-- #team -->

    <!--==========================
      Clients Section
    ============================-->
   
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container-fluid">
    
        <div class="section-header">
          <h3>Contact Us</h3>
        </div>
    
        <div class="row wow fadeInUp">
    
          <div class="col-lg-6">
            <div class="map mb-4 mb-lg-0">
              <iframe src="https://www.google.com/maps?q=Kirkdale+House,+Kirkdale+Road,+E11+1HP,+London,+UK&output=embed" frameborder="0" style="border:0; width: 100%; height: 312px;" allowfullscreen></iframe>
            </div>
          </div>
    
          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-5 info">
                <i class="ion-ios-location-outline"></i>
                <p>Kirkdale House,
                  Kirkdale Road
                  E11 1HP
                  London
                  UK</p>
              </div>
              <div class="col-md-4 info">
                <i class="ion-ios-email-outline"></i>
                <p>info@theorbit.one</p>
              </div>
              <div class="col-md-3 info">
                <i class="ion-ios-telephone-outline"></i>
                <p>07935390848</p>
              </div>
            </div>
    
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>
          </div>
    
        </div>
    
      </div>
    </section><!-- #contact -->
    
    </main>
    
    
    @endsection