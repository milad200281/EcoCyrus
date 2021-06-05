    <?php include('includes/header.php') ?>
    <title>EcoCyrus || Our Services</title>
    <!-- Services css -->
    <link rel="stylesheet" href="css/services.css" />
    </head>
    <body>
      <!-- nav -->
      <?php include(INCLUDES_PATH . 'nav.php') ?>
      <!-- services -->
      <section class="services">
        <!-- title -->
        <div class="title">
          <div class="title-container">
            <i class="fas fa-cogs title-icon"></i>
            <h2 class="title-text">our services</h2>
          </div>
          <div class="title-underline"></div>
        </div>
        <!-- end of title -->
        <div class="services-center">
          <div class="services-info">
            <p class="service-parag">We offer different services from java application to web and database development. To hire us, get more information, or for the pricing please don't hesitate to contact us. By simply clicking on each service you can get more information about it. </p>
          </div>

          <div class="services-contain">
            <!-- single service -->
            <article class="serv">
              <div class="service-info">
                <h2 class="service-title">java applications</h2>
              </div>
              <div class="service-details">
                <div class="service-image">
                  <img loading="lazy" src="img/services/java-programming.jpg" alt="java programming" class="service-pic" />
                </div>
                <div class="service-description">
                  <p>
                    We provide Java applications with Java Swing or JavaFX for the graphical user interface, and a backend of wide variety of java APIs such as net, nio, and JDBC. The codes are fully commented and unit test files will also be provided.
                  </p>
                  <a href="https://www.ecocyrus.com/contact" class="black-btn serv-btn">Hire Us</a>
                </div>
              </div>
            </article>
            <!-- end of single service -->
            <!-- single service -->
            <article class="serv">
              <div class="service-info">
                <h2 class="service-title">web development</h2>
              </div>
              <div class="service-details">
                <div class="service-image">
                  <img loading="lazy" src="img/services/web-design.jpg" alt="java programming" class="service-pic" />
                </div>
                <div class="service-description">
                  <p>
                    We provide a wide range of web development skills, from static fully responsive websites to E-commerce website with database and CMS (Content management system) for working with the data. We also provide secure websites using PHP and we use a wide variety of APIs and CDNs in our projects. Our web development skills include PHP, JavaScript, CSS, HTML, JQuery, and Boostrap.
                  </p>
                  <a href="https://www.ecocyrus.com/contact" class="black-btn serv-btn">Hire Us</a>
                </div>
              </div>
            </article>
            <!-- end of single service -->
            <!-- single service -->
            <article class="serv">
              <div class="service-info">
                <h2 class="service-title">database development</h2>
              </div>
              <div class="service-details">
                <div class="service-image">
                  <img loading="lazy" src="img/services/database.jpg" alt="java programming" class="service-pic" />
                </div>
                <div class="service-description">
                  <p>
                    Database managment is the most needed skill for the backend of lots of applications. We are experienced with database development using DDL, DML, TCL, and SQL/PSM. Also we support different DBMS products such Oracle SQL Server, MS SQL Server, PostgreSQL, MySql, MS Access.
                  </p>
                  <a href="https://www.ecocyrus.com/contact" class="black-btn serv-btn">Hire Us</a>
                </div>
              </div>
            </article>
            <!-- end of single service -->
          </div>
        </div>
      </section>
      <!-- end of services -->
      <div class="sample-works">
        <p class="sample-text">Check out our projects page for sample works</p>
        <a href="https://www.ecocyrus.com/projects" class="sample-link white-btn">view all projects</a>
      </div>

      <!-- support section -->
      <?php include(INCLUDES_PATH . 'support.php') ?>
      <!-- chat bubble -->
      <?php include(INCLUDES_PATH . 'chat_bubble.php') ?>
      <!-- Services JavaScript -->
      <script src="js/services.js"></script>
      <!-- footer -->
      <?php include(INCLUDES_PATH . 'footer.php') ?>