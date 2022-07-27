<?php include("header.php");?>
<section id="contact" class="contact">
      <div class="container">
        <div class="section-title">
          <h2>Contact Us help for needy</h2>
          <p>
            LOCAL CHILDREN & HOMEBOUND SENIORS need help today.
            Donate Nonperishables at drop-off spots throughout Brunswick County. Check below for a location near you. 
          </p>
        </div>
        <div class="row">
          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Office-412 Street No-28 SEC-58 Bhiwadi, Hryana-(INDIA), PIN-00-453</p>
              </div>
                 
              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email Address:</h4>
                <p>info@oshi.com</p>
              </div>
              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Phone Number:</h4>
                <p>+91-906-764-5467</p>
              </div>
              <iframe src="https://www.google.com/maps/" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>
          </div>
           
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="contactus_process.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
    <?php include("footer.php");?>