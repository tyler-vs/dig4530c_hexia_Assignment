<?php
/**
*   admin
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
// redirect basic user
checkUserType();

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


  <!-- Admin Template
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <section id="category" class="section">
    <div class="container">
      <!-- section title -->
      <div class="row section-header">
        <h2 class="section-title"><?php echo $_SESSION['user_name']; ?>'s Admin page</h2>
      </div>

      <!-- content -->
      <div class="row">

        <!-- .two .columns was here -->
        <div class="two columns">

          <!-- Admin sidebar -->

          <h5 class="sidebar-header">Analytics</h5>
          <ul class="sidebar-nav">
            <li class="active"><a href="#">Site</a></li>
            <li><a href="#">Reporting</a></li>
          </ul>

          <h5 class="sidebar-header">Products</h5>
          <ul class="sidebar-nav">
            <li><a href="#">Inventory</a></li>
            <li><a href="#">Add product</a></li>
            <li><a href="#">Edit product</a></li>
            <li><a href="#">Coupons</a></li>
          </ul>
          <h5 class="sidebar-header">Users</h5>
          <ul class="sidebar-nav">
            <li><a href="#">All users</a></li>
            <li><a href="#">Search users</a></li>
            <li><a href="#">New users</a></li>
            <li><a href="#">Banhammer list</a></li>
          </ul>

          <h5 class="sidebar-header">Transactions</h5>
          <ul class="sidebar-nav">
            <li><a href="#">New transactions</a></li>
            <li><a href="#">Sales</a></li>
            <li><a href="#">All transactions</a></li>
          </ul>
          <h5 class="sidebar-header">Orders</h5>
          <ul class="sidebar-nav">
            <li><a href="#">New orders</a></li>
            <li><a href="#">Recently completed</a></li>
            <li><a href="#">All orders</a></li>
          </ul>

          <h5 class="sidebar-header">Settings</h5>
          <ul class="sidebar-nav">
            <li><a href="#">Site information</a></li>
            <li><a href="#">General settings</a></li>
          </ul>
        </div>

        <div class="nine columns offset-by-one">
          <div class="container">

            <!-- FORM STARTS HERE -->
            <form action="admin_submit" method="post" accept-charset="utf-8">

            <div class="row">

            <h4>Add A Product Form</h4>
            <table class="u-full-width">
              <tr>
                <!-- product name -->
                <td><label for="product_name">Product name</label></td>
                <td><input class="u-full-width" type="text" placeholder="product name" id="product_name" name="product_name"></td>
              </tr>
              <tr>
                <!-- product Sku -->
                <td><label for="product_sku">Product sku</label></td>
                <td><input class="u-full-width" type="text" placeholder="product sku number" id="product_sku" name="product_sku"></td>
              </tr>
              <tr>
                <!-- product description -->
                <td><label for="product_description">Product description</label></td>
                <td>
                  <textarea class="u-full-width" placeholder="Product description ..." id="product_description" name="product_description"></textarea>
                </td>
              </tr>
              <tr>
                <!-- product sale price -->
                <td><label for="product_saleprice">Sale price</label></td>
                <td><input class="u-full-width" type="text" placeholder="100.00" id="product_saleprice" name="product_saleprice"></td>
              </tr>
              <tr>
                <!-- product MSRP -->
                <td><label for="product_msrp">Product msrp</label></td>
                <td><input class="u-full-width" type="text" placeholder="product msrp" id="product_msrp" name="product_msrp"></td>
              </tr>
              <tr>
                <!-- product stock -->
                <td><label for="product_stock">Product stock</label></td>
                <td><input class="u-full-width" type="text" placeholder="product stock" id="product_stock" name="product_stock"></td>
              </tr>
              <tr>
                <!-- product category -->
                <td><label for="product_category">Product category</label></td>
                <td>
                  <select class="u-full-width" id="product_category" name="product_category">
                    <option value="special">Special</option>
                    <option value="subscription">Subscription</option>
                    <option value="onetime">One Time Buys</option>
                    <option value="dlc">Downloadable Content</option>
                  </select>
                </td>
              </tr>

              <tr>
                <!-- reset form -->
                <td><strong class="text-warning">Reset Form</strong></td>
                <td>
                  <input type="reset" name="form_reset" value="Reset">
                </td>
              </tr>

              <tr>
                <!-- submit form -->
                <td><strong class="text-success">Submit Form</strong></td>
                <td>
                  <input type="submit" name="form_submit" value="Submit">
                </td>
              </tr>
            </table>
            <!-- /end of table -->
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>



<?php



// include footer
include 'includes/footer.php';