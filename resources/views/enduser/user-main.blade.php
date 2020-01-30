<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Sena Farms</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('enduser/css/bootstrap.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('enduser/lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('enduser/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('enduser/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('enduser/lib/magnific-popup/magnific-popup.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('enduser/css/style.css') }}" rel="stylesheet">

</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header" class="header-fixed">
    <div class="container">

      <div id="logo" class="pull-left">
        <h3><a href="/" class="scrollto" style="color:white;">Sena Farms</a></h3>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="/">Home</a></li>
          <li><a href="/#about">About Us</a></li>
          <li><a href="/#features">Products</a></li>
          <li><a href="/#contact">Contact Us</a></li>
          @if ($user == null)
          <li><a href="/register">Register</a></li>
          @else
          <li><a href="/account">Hello, {{ $user->fname }}!</a></li>
          @endif
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

     <div class="intro-text">
      <h2>Sena Farms</h2>
      <p>Fresh eggs everyday!</p>
      <a href="/register" class="btn-get-started scrollto">Order Now!</a>
    </div>

  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about" class="section-bg">
      <div class="container-fluid">
        <div class="section-header">
          <h3 class="section-title">About Us</h3>
          <span class="section-divider"></span>
          <p class="section-description">
            Sena Farm produces fresh eggs which are sorted into various sizes for production and can be sold in retail.
          </p>
        </div>

        <div class="row">
          <div class="col-lg-6 about-img wow fadeInLeft">
            <img src="img/sample2.jpg" alt="">
          </div>

          <div class="col-lg-6 content wow fadeInRight">
            <h2>3 years of Poultry Farm Expertise</h2>
            <p>
              Sena Farm, a medium-scale poultry farm located at a 4,000 sq. meter lot in Barangay Lodlod, Lipa City is an establishment founded by Dionisio Gutierrez Sr. and Lourdes M. Gutierrez in 1973 wherein it continues to be the bread and butter of the family till this very day. Today, it is managed by the founders’ daughter, Shirley M. Gutierrez
            </p>
          </div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Product Featuress Section
    ============================-->
    <section id="features">
      <div class="container">

        <div class="row">

          <div class="col-lg-12">
            <div class="section-header wow fadeIn" data-wow-duration="1s">
              <h3 class="section-title">Products</h3>
              <span class="section-divider"></span>
            </div>
          </div>

          

          <div class="col-lg-12 col-md-7 ">

           <center><div class="row">
              <div class="col-lg-6 col-md-4 box wow fadeInRight">
                <h4 class="title"><a href="">Peewee</a></h4><h5>Php 120.00</h5>
              </div>

              <div class="col-lg-6 col-md-4 box wow fadeInRight" data-wow-delay="0.1s">
                <h4 class="title"><a href="">Small</a></h4><h5>Php 130.00</h5>
              </div>

              <div class="col-lg-4 col-md-4 box wow fadeInRight data-wow-delay="0.2s">
                <h4 class="title"><a href="">Medium</a></h4><h5>Php 140.00</h5>
              </div>

             <div class="col-lg-4 col-md-4"><img src="img/Eggs.png" alt="" height="150px"></div>

              <div class="col-lg-4 col-md-4 box wow fadeInRight" data-wow-delay="0.3s">
                <h4 class="title"><a href="">Large</a></h4><h5>Php 150.00</h5>
              </div>

              <div class="col-lg-6 col-md-4 box wow fadeInRight" data-wow-delay="0.3s">
                <h4 class="title"><a href="">Extra Large</a></h4><h5>Php 160.00</h5>
              </div>

              <div class="col-lg-6 col-md-4 box wow fadeInRight" data-wow-delay="0.3s">
                <h4 class="title"><a href="">Jumbo</a></h4><h5>Php 170.00</h5>
              </div>
          </div></center>

          </div>

        </div>

      </div>

    </section><!-- #features -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container">
        <div class="row wow fadeInUp">

          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3>Sena Farm</h3>
            </div>
            <center>Don't have an account?
            <a href="/register"><h5>Register now!</h5></a></center>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="info">
            
              <div>
                <i class="ion-ios-location-outline"></i>
                <p>Badagry,<br>Lagos-Badagry Expressway, Lagos</p>
              </div>

              <div>
                <i class="ion-ios-email-outline"></i>
                <p>senafarm@gmail.com</p>
              </div>

              <div>
                <i class="ion-ios-telephone-outline"></i>
                <p>08108038493</p>
              </div>

            </div>
          </div>

            <div class="contact-about col-lg-5 col-md-4">
              <center><h3>Login</h3>

            <div class="form well well-lg">
            <br>
              <div id="sendmessage">Succesfully Registered! Please Verify your E-mail.</div>
              <div id="errormessage"></div>

              <form action="/login" method="post">

              {{ csrf_field() }}

                 <div class="form-group">
                  Email: <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email Address" value="{{ old('email') }}" data-msg="Please enter email" required="" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  Password: <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" data-msg="Please enter password" required="" />
                  <div class="validation"></div>
                </div>
                <div><center><a href="/user/request-token">Forgot Password?</a></center></div><br>
                <div class="form group text-center"><button type="submit" >Login</button></div>
              </form>
            </div>
            
            </div>


        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>Sena Farms</strong>. All Rights Reserved
          </div>
          <div class="credits">
           
           
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Home</a>
            <a href="#about" class="scrollto">About</a>
          <a href="/#features">Products</a>
          <a href="/register">Register</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="./enduser/lib/jquery/jquery.min.js"></script>
  <script src="./enduser/lib/jquery/jquery-migrate.min.js"></script>
  <script src="./enduser/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="./enduser/lib/easing/easing.min.js"></script>
  <script src="./enduser/lib/wow/wow.min.js"></script>
  <script src="./enduser/lib/superfish/hoverIntent.js"></script>
  <script src="./enduser/lib/superfish/superfish.min.js"></script>
  <script src="./enduser/lib/magnific-popup/magnific-popup.min.js"></script>
  
  <!-- Template Main Javascript File -->
  <script src="./enduser/js/main.js"></script>

</body>
</html>
