    <?php include('includes/header.php') ?>
    <title>EcoCyrus || Contact Us</title>
    <!-- Contact css -->
    <link rel="stylesheet" href="css/contact.css" />

    </head>

    <body>
      <!-- nav -->
      <?php include(INCLUDES_PATH . 'nav.php') ?>
      <!-- contact -->
      <section class="contact">
        <!-- title -->
        <div class="title">
          <div class="title-container">
            <i class="fas fa-envelope title-icon"></i>
            <h2 class="title-text">Contact us</h2>
          </div>
          <div class="title-underline"></div>
        </div>
        <!-- end of title -->
        <div class="form-container">
          <p class="contact-desc">
            Through this page you can send an email to our team at EcoCyrus. For inquiries about resume, hiring, or any other question you can reach us through this page. We try to get back to you as soon as possible. Also please make sure to fill all fields.
          </p>
          <form action="https://formspree.io/f/xvovldld" method="POST" class="contact-form">
            <div class="form-info">

              <span class="form-error" id="error-fname"> </span>
              <input type="text" name="firstname" id="form-firstname" class="form-input" placeholder="First Name" />
              <span class="form-error" id="error-lname"> </span>
              <input type="text" name="lastname" id="form-lastname" class="form-input" placeholder="Last Name" />
              <span class="form-error" id="error-email"> </span>
              <input type="email" name="email" id="form-email" class="form-input" placeholder="Email" />
              <span class="form-error" id="error-subject"> </span>
              <input type="text" name="subject" id="form-subject" class="form-input" placeholder="Subject" />
            </div>
            <div class="form-detail">
              <span class="form-error" id="error-msg"> </span>
              <textarea name="message" id="form-message" class="form-input" placeholder="Message" cols="30" rows="10"></textarea>
              <button type="submit" name="submit_contact" id="form-submit" class="form-submit-btn black-btn"><i class="fas fa-paper-plane"></i> send</button>
            </div>
          </form>

        </div>
      </section>
      <!-- end of contact -->

      <!-- support section -->
      <?php include(INCLUDES_PATH . 'support.php') ?>
      <!-- Contact JavaScript -->
      <script src="js/contact.js"></script>
      <!-- footer -->
      <?php include(INCLUDES_PATH . 'footer.php') ?>