    <?php include('includes/header.php') ?>
    <title>EcoCyrus || About Us</title>

    <!-- About css -->
    <link rel="stylesheet" href="css/about.css" />
    </head>
    <body>
      <!-- nav -->
      <?php include(INCLUDES_PATH . 'nav.php') ?>
      <!-- about -->
      <section class="about">
        <!-- title -->
        <div class="title">
          <div class="title-container">
            <i class="fas fa-user title-icon"></i>
            <h2 class="title-text">about us</h2>
          </div>
          <div class="title-underline"></div>
        </div>
        <!-- end of title -->
        <!-- about details -->
        <div class="about-container">
          <div class="about-img-container">
            <img loading="lazy" src="img/about/about-bg.jpg" alt="ecocyrus about" class="about-img" />
          </div>
          <div class="about-details">
            <p class="about-text">
              EcoCyrus is where the dreams of the owner of it, Milad Mobini,
              starts. This website is currenlty being used as the mean of online
              portfolio and getting my name out there. I am be providing different
              technical services as mentioned in the
              <a href="https://www.ecocyrus.com/services">servieces page</a>. You
              can contact me and hire me as a freelancer. My resume has been
              attached which can be downloaded from the link below. I am a young
              and enthusiast programmer who is eager to learn and is expanding his
              knowledge continuously. The future hope of this website is to be an
              AI company helping to bring humanity and artificial intelligence one
              step closer to each other.
            </p>
            <div class="about-btns">
              <a href="Milad-Mobini_Resume.docx" target="_blank" class="about-btn white-btn">download resume</a>
              <a href="https://www.ecocyrus.com/contact" class="about-btn black-btn">contact us</a>
            </div>
          </div>
        </div>
        <!-- end of about details -->
      </section>
      <!-- end of about -->
      <!-- support section -->
      <?php include(INCLUDES_PATH . 'support.php') ?>
      <!-- chat bubble -->
      <?php include(INCLUDES_PATH . 'chat_bubble.php') ?>
      <!-- footer -->
      <?php include(INCLUDES_PATH . 'footer.php') ?>