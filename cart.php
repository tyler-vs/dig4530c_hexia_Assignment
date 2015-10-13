<?php
/**
*   cart
*   -----------------------------
*
*   homepage for the site.
*
*/



// config include
//
include 'includes/config.inc.php';


// $SESS testing vars
//


// redirect for private user/admin pages
//
authenticateUser();


// mysql conn script
//
include 'includes/mysql_connect.inc.php';


// page variables
//
$page_name = 'Homepage';

// header include
//
include 'includes/header.php';

/*PAGE CONTENT STARTS HERE*/
?>




  <!-- Shopping Cart Template
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <section id="shopping-cart" class="section">
    <div class="container">
      <div class="row section-header">
        <h2 class="section-title">Shopping Cart</h2>
      </div>

      <form id="" name="" action="" class="">
        <div class="row">
          <div class="six columns">
            <button class="button-primary">Conintue shopping</button>
            <button class="button">Clear Cart</button>
          </div>

          <div class="six columns">
            <button class="button-primary">Recalculate</button>
            <button class="button">Proceed to checkout &rarr;</button>
          </div>
        </div>
      </form>

      <div class="row">
        <div class="twelve columns">

          <table class="u-full-width">
            <thead>
              <colgroup>
                <col style="width: 60%;">
              </colgroup>
              <tr>
                <th>Product</th>
                <th>Unit price</th>
                <th>Quantity</th>
                <th>Total price</th>
              </tr>
            </thead>
            <tbody>
              <form action="" method="" id="" class="" accept-charset="UTF-8">
                <tr>
                  <td>
                    <div class="cart-item_info u-cf">
                      <a href="#" title="">
                        <img src="//placeholdit.imgix.net/~text?txtsize=19&txt=200%C3%97200&w=200&h=200" alt="" width="200px" height="200px" class="" />
                      </a>
                      <div class="cart-item_details">
                        <h3><a href="">This product</a></h3>
                        <span>Code: #909090901</span>
                      </div>
                    </div>
                  </td>
                  <td>$26.00</td>
                  <td>
                    <input type="number" name="quantity" min="0" max="5" value="1" />
                  </td>
                  <td>$499.99</td>
                </tr>
                <tr>
                  <td>
                    <div class="cart-item_info u-cf">
                      <a href="#" title="">
                        <img src="//placeholdit.imgix.net/~text?txtsize=19&txt=200%C3%97200&w=200&h=200" alt="" width="200px" height="200px" class="" />
                      </a>
                      <div class="cart-item_details">
                        <h3><a href="">This product</a></h3>
                        <span>Code: #909090901</span>
                      </div>
                    </div>
                  </td>
                  <td>$26.00</td>
                  <td>
                    <input type="number" name="quantity" min="0" max="5" value="1" />
                  </td>
                  <td>$499.99</td>
                </tr>
              </form>
            </tbody>
          </table>
        </div>
      </div>

      <div class="row">
        <table class="u-full-width cart-total">
          <colgroup>
            <col style="width: 60%;">
          </colgroup>
          <tr>
            <td>Apply Coupon</td>
            <td>Subtotal</td>
            <td>$499.99</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>Shipping cost</td>
            <td><a href="#">Calculate</a></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>Total cost</td>
            <td><strong>$499.99</strong></td>
          </tr>
        </table>
      </div>

      <form id="" name="" action="" class="">
        <div class="row">
          <div class="six columns">
            <button class="button-primary">Conintue shopping</button>
          </div>

          <div class="six columns text-right">
            <button class="button-primary">Recalculate</button>
            <button class="button">Proceed to checkout &rarr;</button>
          </div>
        </div>
      </form>
    </div>
  </section>



<?php



// include footer
include 'includes/footer.php';