<?php include ('includes/header.php');?>

  <?php include ('includes/second-navigation.php');?>
			
  <div class="pt--80"></div>
  
  <!-- Start Checkout Area -->
  <section class="our-checkout-area ptb--120 bg__white">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-lg-8">
          <div class="ckeckout-left-sidebar">

            <form action="order-success.html">
              <!-- Start Checkbox Area -->
              <div class="checkout-form">
                <h2 class="section-title-3">Billing details</h2>
                <div class="checkout-form-inner">
                  <div class="single-checkout-box">
                    <input type="text" placeholder="First Name*">
                    <input type="text" placeholder="Last Name*">
                  </div>
                  <div class="single-checkout-box">
                    <input type="email" placeholder="Emil*">
                    <input type="text" placeholder="Phone*">
                  </div>
                  <div class="single-checkout-box">
                    <textarea name="message" placeholder="Message*"></textarea>
                  </div>
                  <div class="single-checkout-box select-option mt--40">
                    <select>
                      <option>Country*</option>
                      <option>Bangladesh</option>
                      <option>Bangladesh</option>
                      <option>Bangladesh</option>
                      <option>Bangladesh</option>
                    </select>
                    <input type="text" placeholder="Company Name*">
                  </div>
                  <div class="single-checkout-box">
                    <input type="email" placeholder="State*">
                    <input type="text" placeholder="Zip Code*">
                  </div>
                </div>
              </div>
              <!-- End Checkbox Area -->
              <!-- Start Payment Box -->
              <div class="payment-form">
                <h2 class="section-title-3">payment details</h2>
                <p>Lorem ipsum dolor sit amet, consectetur kgjhyt</p>
                <div class="payment-form-inner">
                  <div class="single-checkout-box">
                    <input type="text" placeholder="Name on Card*">
                    <input type="text" placeholder="Card Number*">
                  </div>
                  <div class="single-checkout-box select-option">
                    <select>
                      <option>Date*</option>
                      <option>Date</option>
                      <option>Date</option>
                      <option>Date</option>
                      <option>Date</option>
                    </select>
                    <input type="text" placeholder="Security Code*">
                  </div>
                </div>
              </div>
              <!-- End Payment Box -->

              <button type="submit" class="btn-default">Confirm Order</button>
            </form>

            <hr>

            <!-- Start Payment Way -->
            <div class="our-payment-sestem">
              <h2 class="section-title-3">We Accept :</h2>
              <ul class="payment-menu">
                <li><img src="images/payment/1.jpg" alt="payment-img"></li>
                <li><img src="images/payment/2.jpg" alt="payment-img"></li>
                <li><img src="images/payment/3.jpg" alt="payment-img"></li>
                <li><img src="images/payment/4.jpg" alt="payment-img"></li>
                <li><img src="images/payment/5.jpg" alt="payment-img"></li>
              </ul>
            </div>
            <!-- End Payment Way -->
          </div>
        </div>
        <div class="col-md-4 col-lg-4">
          <div class="checkout-right-sidebar">
            <div class="puick-contact-area mt--60">
              <h2 class="section-title-3">Quick Contract</h2>
              <a href="phone:+8801722889963">+88 01900 939 500</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Checkout Area -->

<?php include ('includes/footer.php');?>