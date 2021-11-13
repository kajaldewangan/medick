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
        <h2 class="title pt-5">Contact Us</h2>
        <ul class="breadcrumbs-custom-path mt-3 text-center">
          <li><a href="index.html">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Contact </li>
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
        <div class="contact-left">
          <h6 class="title-subhny mb-1">Get in Touch</h6>
          <h3 class="title-w3l mb-2">Contact Us</h3>
          <p>We have a dedicated support center for all of your support needs. We usually get back to you within
            12-24 hours.</p>
          <div class="cont-details">
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-map-marker"></span>
              </div>
              <div class="cont-right">
                <h6>Our Address</h6>
                <p>SEO Agency, 343 Medick, #2214 cravel street, NY - 62617.</p>
              </div>
            </div>
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-phone"></span>
              </div>
              <div class="cont-right">
                <h6>Call Us</h6>
                <p><a href="tel:+1(21) 234 4567">+1(21) 234 4567</a></p>
              </div>
            </div>
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-envelope-o"></span>
              </div>
              <div class="cont-right">
                <h6>Email Us</h6>
                <p><a href="mailto:example@mail.com" class="mail">example@mail.com</a></p>
              </div>
            </div>
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-life-ring"></span>
              </div>
              <div class="cont-right">
                <h6>Customer Support</h6>
                <p><a href="mailto:info@support.com" class="mail">info@support.com</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="contact-right">
          <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
            <div class="input-grids">
              <input type="text" name="w3lName" id="w3lName" placeholder="Your Name*" class="contact-input"
                required="" />
              <input type="email" name="w3lSender" id="w3lSender" placeholder="Your Email*" class="contact-input"
                required="" />
              <input type="text" name="w3lSubect" id="w3lSubect" placeholder="Subject*" class="contact-input"
                required="" />
              <input type="text" name="w3lWebsite" id="w3lWebsite" placeholder="Website URL*" class="contact-input"
                required="" />
            </div>
            <div class="form-input">
              <textarea name="w3lMessage" id="w3lMessage" placeholder="Type your message here*" required=""></textarea>
            </div>
            <div class="w3l-submit text-lg-right">
            <button class="btn btn-style btn-primary">Send Message</button>
            </div>
          </form>
        </div>
      </div>
  </section>
  <!-- /map-->
  <div class="map-iframe">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl"
      width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
  </div>
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