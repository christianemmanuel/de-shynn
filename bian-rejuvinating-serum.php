<?php include ('includes/header.php');?>

  <?php include ('includes/second-navigation.php');?>

  <div class="pt--80"></div>

  <!-- Start Product Details -->
  <section class="htc__product__details pt--120 pb--100 bg__white">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-6 col-sm-12">
          <div class="product__details__container">
            <!-- Start Small images -->
            <ul class="nav product__small__images" role="tablist">
              <li role="presentation" class="pot-small-img active">
                <a href="#img-tab-1" role="tab" data-toggle="tab">
                <img src="images/product-details/thumb5.jpg" alt="small-image">
                </a>
              </li>
              <li role="presentation" class="pot-small-img">
                <a href="#img-tab-2" role="tab" data-toggle="tab">
                <img src="images/product-details/thumb6.jpg" alt="small-image">
                </a>
              </li>
              <li role="presentation" class="pot-small-img hidden-xs">
                <a href="#img-tab-3" role="tab" data-toggle="tab">
                <img src="images/product-details/thumb7.jpg" alt="small-image">
                </a>
              </li>
            </ul>
            <!-- End Small images -->
            <div class="product__big__images">
              <div class="portfolio-full-image tab-content">
                <div role="tabpanel" class="tab-pane active" id="img-tab-1">
                  <img src="images/product-details/4.jpg" alt="full-image">
                </div>
                <div role="tabpanel" class="tab-pane" id="img-tab-2">
                  <img src="images/product-details/5.jpg" alt="full-image">
                </div>
                <div role="tabpanel" class="tab-pane" id="img-tab-3">
                  <img src="images/product-details/6.jpg" alt="full-image">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-6 col-sm-12 smt-30 xmt-30">
          <div class="htc__product__details__inner">
            <div class="pro__detl__title">
              <h2>Bian Rejuvinating Serum</h2>
            </div>
            <div class="pro__details">
              <p>EGF (Epidermal Growth Factor) is a protein natural to the human skin. It signals cells to boost collagen and elastin production to help maintain a healthy, dense, and youthful skin. BIAN’s EGF is produce by genetic technology and has a 100% homologous structure with the human body.</p>
            </div>
            <ul class="pro__dtl__prize">
              <li>$10.00</li>
            </ul>
            <div class="product-action-wrap">
              <div class="prodict-statas"><span>Quantity :</span></div>
              <div class="product-quantity">
                <form id='myform' method='POST' action='#'>
                  <div class="product-quantity">
                    <div class="cart-plus-minus">
                      <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <ul class="pro__dtl__btn">
              <li class="buy__now__btn"><a href="#">Add to cart</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Product Details -->
  <!-- Start Product tab -->
  <section class="htc__product__details__tab bg__white pb--120">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
          <ul class="nav product__deatils__tab mb--60" role="tablist">
            <li role="presentation" class="active">
              <a class="active" href="#description" role="tab" data-toggle="tab">Description</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="product__details__tab__content">
            <!-- Start Single Content -->
            <div role="tabpanel" id="description" class="product__tab__content active">
              <div class="product__description__wrap">
                <div class="product__desc">
                  <h2 class="title__7">Bian Rejuvinating Serum</h2>
                  <p>EGF (Epidermal Growth Factor) is a protein natural to the human skin. It signals cells to boost collagen and elastin production to help maintain a healthy, dense, and youthful skin. BIAN’s EGF is produce by genetic technology and has a 100% homologous structure with the human body.</p>
                  <P>Whatever your age or skin condition, BianTM help you feel great in your own skin. We aim to boost your confidence and well-being by addressing some of the long-term skin problems, with solutions for those who are on the quest for younger-looking skin.</P>
                  <P>Bian rejuvenating serum bring many benefits for your skin, including wrinkle improvement, hydration, and pigmentation prevention. The process by which EGF encourages cell growth also stimulates the division of keratinocytes and fibroblasts, which then synthesize fibrous proteins that improve skin elasticity such as collagen and elastin.</P>
                  <P>Because Bian’s EGF repairs skin by stimulating the growth of new skin cells, it also enhances skin barrier. This allows the improvement for skin moisture so that your skin becomes smoother and softer. Lastly, it inhibits melanin production during the wound healing process, therefore improve acne marks and other forms of hyperpigmentation.</P>
                  <h2 class="title__7">OUR TECHNOLOGY</h2>
                  <P>We use liposome technology to increase the absorption rate of stem cell secretory factors on the skin. With our drug delivery technology, nutrients can pass from the sebum on the surface of the skin to the hypodermis through liposomes, penetrating into the skin effectively and completely to keep moisture as well as to fight against aging.</P>
                </div>
                <div class="pro__feature">
                  <h2 class="title__6">Benefits</h2>
                  <ul class="feature__list">
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-chevron-right"></i>Lorem, ipsum dolor sit amet consectetur adipisicing.</a></li>
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-chevron-right"></i>Lorem, ipsum dolor sit amet consectetur adipisicing.</a></li>
                    <li><a href="javascript:void(0)"><i class="zmdi zmdi-chevron-right"></i>Lorem, ipsum dolor sit amet consectetur adipisicing.</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- End Single Content -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Product tab -->

<?php include ('includes/footer.php');?>