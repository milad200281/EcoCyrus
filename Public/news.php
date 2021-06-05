    <?php include('includes/header.php') ?>
    <title>EcoCyrus || What's New</title>
    <!-- News css -->
    <link rel="stylesheet" href="css/news.css" />
    </head>

    <body>
      <!-- nav -->
      <?php include(INCLUDES_PATH . 'nav.php') ?>
      <!-- news info -->
      <section class="news-info">
        <!-- title -->
        <div class="title">
          <div class="title-container">
            <i class="fas fa-bell title-icon"></i>
            <h2 class="title-text">Our Channel</h2>
          </div>
          <div class="title-underline"></div>
        </div>
        <!-- end of title -->
        <!-- news details -->
        <div class="news-container">
          <p class="news-intro">
            Here at this page, you can view all of the news regarding to EcoCyrus
            and our team. Make sure to subscribe to our channel to not miss any
            event.
          </p>
          <div class="news-subscription">
            <form action="https://formspree.io/f/xvovldld" method="POST" class="news-form" id="subscribe-channel-form">
              <span class="news-email-error" id="subs-email-error"></span>
              <input type="email" class="news-email-input" name="subscribe-email" id="news-letter-email" placeholder="Email" autocomplete="true" />
              <input type="submit" value="subscribe" class="subscribe-submit" id="news-letter-submit" name="subscribe_news" />
            </form>
          </div>
        </div>
        <!-- end of news details -->
      </section>
      <!-- end of news info-->
      <!-- news info -->
      <section class="news-body">
        <!-- title -->
        <div class="title">
          <div class="title-container">
            <i class="fas fa-newspaper title-icon"></i>
            <h2 class="title-text">what's new</h2>
          </div>
          <div class="title-underline"></div>
        </div>
        <!-- end of title -->
        <!-- news details -->
        <div class="news-body-container">
          <!-- single news -->
          <div class="single-news" id="n2">
            <div class="single-news-img">
              <img loading="lazy" src="img/news/underConstruction.jpg" alt="news-photo" class="single-news-photo" />
            </div>
            <div class="single-news-body">
              <div class="single-news-info">
                <h2 class="single-news-title">Website Under Development</h2>
                <h4 class="single-news-author">
                  <i class="fas fa-user-edit single-news-icon"></i> Milad Mobini
                </h4>
                <p class="single-news-date">
                  <i class="fas fa-clock single-news-icon"></i> 2021-06-02
                </p>
              </div>
              <div class="single-news-details">
                <p class="single-new-parag">
                  Currently our website is undergoing a second phase of development. As a result, there may be side effects to other aspects of the website.
                  All the backend plus the UI/UX of the website is changing and improving. These changes may cause unwanted bugs or issue which will be taken care of after implementing the new features. Due to extreme amount of work load and lack of time this process may take some time. <br>
                  You can still contact us at anytime. <br>
                  Thanks for being patient.</p>
                <div class="single-news-links">
                  <!-- <a href="" class="single-news-more">read more</a> -->
                </div>
              </div>
            </div>
          </div>
          <!-- end of single news -->
          <!-- single news -->
          <div class="single-news" id="n1">
            <div class="single-news-img">
              <img loading="lazy" src="img/city-line.jpg" alt="news-photo" class="single-news-photo" />
            </div>
            <div class="single-news-body">
              <div class="single-news-info">
                <h2 class="single-news-title">the website is now up and running</h2>
                <h4 class="single-news-author">
                  <i class="fas fa-user-edit single-news-icon"></i> Milad Mobini
                </h4>
                <p class="single-news-date">
                  <i class="fas fa-clock single-news-icon"></i> 2021-04-27
                </p>
              </div>
              <div class="single-news-details">
                <p class="single-new-parag">
                  We are pleased to announce that finally EcoCyrus's website is finished. You can now explore our different pages. Skills page indicates the areas that we are capable of. About Page gives a background on us and the founder, Milad Mobini. At services we offer the services we provide. On projects page, you can view our sample work. And you can contact us anytime through the contact page or the chat box bubble. We appreciate your support, and you can help us through donation. The link is available at the bottom of every page. </p>
                <div class="single-news-links">
                  <!-- <a href="" class="single-news-more">read more</a> -->
                </div>
              </div>
            </div>
          </div>
          <!-- end of single news -->
        </div>
        <!-- end of news details -->
      </section>
      <!-- end of news info-->

      <!-- support section -->
      <?php include(INCLUDES_PATH . 'support.php') ?>
      <!-- chat bubble -->
      <?php include(INCLUDES_PATH . 'chat_bubble.php') ?>
      <!-- footer -->
      <?php include(INCLUDES_PATH . 'footer.php') ?>