<?php include ('includes/header.php');?>

  <?php include ('includes/second-navigation.php');?>

  <div class="pt--80"></div>

  <!-- Start Contact Area -->
  <section class="htc__contact__area ptb--120 bg__white">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8 col-sm-12 mx-auto">
          <div class="htc__contact__container">
            <div class="htc__contact__address">
              <h2 class="contact__title">contact info</h2>
              <div class="contact__address__inner">
                <!-- Start Single Adress -->
                <div class="single__contact__address">
                  <div class="contact__icon">
                    <span class="ti-mobile"></span>
                  </div>
                  <div class="contact__details">
                    <p> Phone : <br><a href="#">+00 111 222 333 44</a></p>
                  </div>
                </div>
                <!-- End Single Adress -->
                <!-- Start Single Adress -->
                <div class="single__contact__address">
                  <div class="contact__icon">
                    <span class="ti-email"></span>
                  </div>
                  <div class="contact__details">
                    <p> Mail :<br><a href="#">yourmail@gmail.com</a></p>
                  </div>
                </div>
                <!-- End Single Adress -->
              </div>
            </div>
            
            <div class="contact-form-wrap">
              <div class="contact-title">
                <h2 class="contact__title">Get In Touch</h2>
              </div>

              <form id="contact-form" action="#" method="post">
                <div class="single-contact-form">
                  <div class="contact-box name">
                    <input type="text" name="name" placeholder="Your Nme*">
                    <input type="email" name="email" placeholder="Mail*">
                  </div>
                </div>
                <div class="single-contact-form">
                  <div class="contact-box subject">
                    <input type="text" name="subject" placeholder="Subject*">
                  </div>
                </div>
                <div class="single-contact-form">
                  <div class="contact-box message">
                    <textarea name="message"  placeholder="Massage*"></textarea>
                  </div>
                </div>
                <div class="contact-btn">
                  <button type="submit" class="fv-btn">SEND</button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Area -->

<?php include ('includes/footer.php');?>