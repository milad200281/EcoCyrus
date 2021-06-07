      <!-- skills section -->
      <section class="skills">
          <div class="loadOnScroll">
              <!-- title -->
              <div class="title">
                  <div class="title-container">
                      <i class="fas fa-code title-icon"></i>
                      <h2 class="title-text">our skills</h2>
                  </div>
                  <div class="title-underline"></div>
              </div>
              <!-- end of title -->
              <div class="skills-container">
                  <?php
                    $skills_view = new View('featured_skills_view', 'skill_id');
                    $skills = $skills_view->select_all();
                    while ($skill = mysqli_fetch_assoc($skills)) : ?>
                      <!-- single skill -->
                      <article class="skill">
                          <div class="skill-logo">
                              <i class="fab fa-js skill-icon"></i>
                              <h3 class="skill-title"><?php echo $skill['skill_title'] ?></h3>
                          </div>
                          <div class="skill-detail">
                              <h3 class="skill-subtitle"><?php echo $skill['skill_title'] ?></h3>
                              <p class="skill-text">
                                  <?php echo $skill['skill_short_desc'] ?>
                              </p>
                              <a href="https://www.ecocyrus.com/skills" class="btn">see all</a>
                          </div>
                      </article>
                      <!-- end of single skill -->

                  <?php endwhile; ?>
              </div>
          </div>
      </section>
      <!-- end of skills section -->