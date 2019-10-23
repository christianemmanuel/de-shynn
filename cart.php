
<?php include ('includes/header.php');?>

  <?php include ('includes/second-navigation.php');?>

  <div class="pt--80"></div>

  <!-- cart-main-area start -->
  <div class="cart-main-area ptb--120 bg__white">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-12">
          <form action="#">
            <div class="table-content table-responsive">
              <table>
                <thead>
                  <tr>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-subtotal">Total</th>
                    <th class="product-remove">Remove</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="product-name"><a href="#">SHIRO Whitening Essence Drink</a></td>
                    <td class="product-price"><span class="amount">£165.00</span></td>
                    <td class="product-quantity"><input type="number" value="1" /></td>
                    <td class="product-subtotal">£165.00</td>
                    <td class="product-remove"><a href="#">X</a></td>
                  </tr>
                  <tr>
                    <td class="product-name"><a href="#">Bian Rejuvinating Serum</a></td>
                    <td class="product-price"><span class="amount">£50.00</span></td>
                    <td class="product-quantity"><input type="number" value="1" /></td>
                    <td class="product-subtotal">£50.00</td>
                    <td class="product-remove"><a href="#">X</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="row">
              <div class="col-md-8 col-sm-12">
                <div class="buttons-cart">
                  <a href="#">Continue Shopping</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-12 ">
                <div class="cart_totals">
                  <h2>Cart Totals</h2>
                  <table>
                    <tbody>
                      <tr class="cart-subtotal">
                        <th>Subtotal</th>
                        <td><span class="amount">£215.00</span></td>
                      </tr>
                      <tr class="shipping">
                        <th>Shipping</th>
                        <td>
                          <ul id="shipping_method">
                            <li><span class="amount">£7.00</span></li>
                          </ul>
                        </td>
                      </tr>
                      <tr class="order-total">
                        <th>Total</th>
                        <td>
                          <strong><span class="amount">£215.00</span></strong>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="wc-proceed-to-checkout">
                    <a href="checkout.php">Proceed to Checkout</a>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- cart-main-area end -->

  <?php include ('includes/footer.php');?>