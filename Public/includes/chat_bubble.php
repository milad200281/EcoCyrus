      <!-- chat box pop up -->
      <div class="chat-box-pop link--mouse-effect">
          <i class="fas fa-comments chat-box-pop-icon"></i>
          <div class="chat-box-pop-tooltip">contact us now</div>
      </div>
      <div class="chat-box">
          <div class="chat-box-container">
              <i class="far fa-times-circle chat-box-close"></i>
              <h3 class="chat-box-title">send us a message now!</h3>
              <form action="https://formspree.io/f/xvovldld" method="POST" class="contact-box-form">
                  <div class="form-info">
                      <input type="text" name="firstname" id="form-firstname" class="form-input-box" placeholder="First Name" />
                      <span class="form-error" id="error-fname"> </span>
                      <input type="text" name="lastname" id="form-lastname" class="form-input-box" placeholder="Last Name" />
                      <span class="form-error" id="error-lname"> </span>
                      <input type="email" name="email" id="form-email" class="form-input-box" placeholder="Email" />
                      <span class="form-error" id="error-email"> </span>
                      <input type="text" name="subject" id="form-subject" class="form-input-box" placeholder="Subject" />
                      <span class="form-error" id="error-subject"> </span>
                  </div>
                  <div class="form-detail">
                      <textarea name="message" id="form-message" class="form-input-box" placeholder="Message" cols="50" rows="10"></textarea>
                      <span class="form-error" id="error-msg"> </span>
                      <button type="submit" name="submit_contact" id="form-submit" class="chat-submit-btn">
                          <i class="fas fa-paper-plane"></i> send
                      </button>
                  </div>
              </form>
          </div>
      </div>
      <!-- ChatBox JavaScript -->
      <script src="<?php echo PUBLIC_PATH ?>js/chatbox.js"></script>
      <!-- end of chat box pop up -->