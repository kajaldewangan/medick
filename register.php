<?php include('top_header.php'); ?>

<body>
  <!--header-->
  <div class="header-w3l">
    <!-- header -->
    <?php include('header.php'); ?>
    </div>
    <!-- //header -->
    <!--/breadcrumb-bg-->
    <div class="breadcrumb-bg py-5  w3l-inner-page-breadcrumb">
      <div class="container pt-lg-5 pt-md-3 p-lg-4 pb-md-3 my-lg-3">
        <h2 class="title pt-5">Registration</h2>
        <ul class="breadcrumbs-custom-path mt-3 text-center">
          <li><a href="index.html">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Register </li>
        </ul>
      </div>
    </div>

  <!--//breadcrumb-bg-->
  <!-- banner bottom shape -->
  <div class="position-relative">
    <div class="shape overflow-hidden">
      <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
      </svg>
    </div>
  </div>
  <!-- banner bottom shape -->
  <!--/contact-->
  <section class="w3l-contact-2 py-5" id="contact">
    <div class="container py-lg-5 py-md-4 py-2">
      <div class="contact-grids d-grid">
       <img src="images/1.jpg" style="width: 590px;
    height: 412px;
    margin-left: -61px;">
        <div class="contact-right">
          <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form" >
            <div class="input-grids">
              <br>
              <h2 style="color:skyblue;text-align:center;text-shadow:2px 2px dimgrey;">Register Now</h2>
              <br>
            
            <input type="text" name="w3lName" id="w3lName" placeholder="*Enter Your Name" class="contact-input"
                required="" /  style="margin-left:10px;">
              <input type="email" name="w3lSender" id="w3lSender" placeholder="*Enter Your Phone Number" class="contact-input"
                required="" /><br>

                <input type="text" name="w3lName" id="w3lName"style="margin-left:10px;height:50px;width:425px;" placeholder="*Enter Your Email Address" class="contact-input"
                required="" />
                

                <input type="password" name="w3lName" style="margin-left:10px;" id="w3lName"style="height:50px;width:425px;" placeholder="*Enter Your 9-digit password" class="contact-input"
                required="" />
                <br>
                <input type="text" name="w3lName" style="margin-left:10px;" id="w3lName" placeholder=" City*" class="contact-input"
                required="" />

                <input type="text" name="w3lName" id="w3lName" placeholder=" State*" class="contact-input"
                required="" />

                <input type="text" name="w3lName" id="w3lName" style="margin-left:10px;height:70px;width:425px;" placeholder=" Enter your full adderess*" class="contact-input"
                required="" />
             
               
               <center><button class="but" style="background-color:#4D97F6;height:50px;width:100px;box-shadow:2px 2px 2px 2px grey;"><b style="color:white">Register</b></button></center>
            
          </form>
        </div>
      </div>
  </section>
  <!-- /map-->
  
  <!-- //map-->
  <!-- /contact -->
  <!-- footer -->
  <?php include('top_footer.php'); ?>
  <!-- //footer -->

  <!-- copyright -->
  <?php include('footer.php'); ?>
  <!--//footer-->
  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/theme-change.js"></script>

  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->

  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->


  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>