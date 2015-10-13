<?php
/**
*   category
*   -----------------------------
*
*   homepage for the site.
*
*/


// congif
//
include 'includes/config.inc.php';



// $SESS testing vars
//


// redirect for private user/admin pages
// - function();



// mysql conn script
//
include 'includes/mysql_connect.inc.php';


// include header
include 'includes/header.php';

/*PAGE CONTENT STARTS HERE*/
?>


  <!-- Catalog Template
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <section id="category" class="section">
    <div class="container">
      <!-- section title -->
      <div class="row section-header">
        <h2 class="section-title">Catalog page</h2>
      </div>

      <!-- content -->
      <div class="row">

        <!-- .two .columns was here -->
        <div class="sidebar">

          <!-- Catalog sidebar -->

          <h5 class="sidebar-header">Category</h5>
          <ul class="sidebar-nav">
            <li class="active"><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
          </ul>
          <h5 class="sidebar-header">Console</h5>
          <ul class="sidebar-nav">
            <li class="active"><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
          </ul>
          <h5 class="sidebar-header">Type</h5>
          <ul class="sidebar-nav">
            <li class="active"><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
          </ul>
        </div>

        <div class="ten columns offset-by-two">
          <div class="container">
            <div class="row">
              <ul class="catalog-list u-cf">

                <li class="four columns catalog-item panel">
                  <a href="#">
                    <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/307033/10.jpg" alt="" class="u-max-full-width" />
                  </a>
                  <div class="catalog-item_detail">
                    <div>
                      <a href="#">3 Month Subscription</a>
                    </div>
                    <div class="price-tag">
                      <span class="old-price">$55.00</span> <strong class="new-price"><sup>$</sup>49.99</strong>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione consequatur temporibus asperiores, qui ipsa ab eius, laborum.</p>
                    <p>
                      <button class="button-primary u-full-width">Product Page</button>
                    </p>
                    <ul class="stats u-full-width">
                      <li><a href="#">1,056 <span>Likes</span></a></li>
                      <li><a href="#">5 <i class="fa fa-star"></i> <span>Rating</span></a></li>
                      <li><a href="#">316 <span>Reviews</span></a></li>
                    </ul>
                  </div>
                </li>

                <li class="four columns catalog-item panel">
                  <a href="#">
                    <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/307033/10.jpg" alt="" class="u-max-full-width" />
                  </a>
                  <div class="catalog-item_detail">
                    <div>
                      <a href="#">3 Month Subscription</a>
                    </div>
                    <div class="price-tag">
                      <span class="old-price">$55.00</span> <strong class="new-price"><sup>$</sup>49.99</strong>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione consequatur temporibus asperiores, qui ipsa ab eius, laborum.</p>
                    <p>
                      <button class="button-primary u-full-width">Product Page</button>
                    </p>
                    <ul class="stats u-full-width">
                      <li><a href="#">1,056 <span>Likes</span></a></li>
                      <li><a href="#">5 <i class="fa fa-star"></i> <span>Rating</span></a></li>
                      <li><a href="#">316 <span>Reviews</span></a></li>
                    </ul>
                  </div>
                </li>

                <li class="four columns catalog-item panel">
                  <a href="#">
                    <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/307033/10.jpg" alt="" class="u-max-full-width" />
                  </a>
                  <div class="catalog-item_detail">
                    <div>
                      <a href="#">3 Month Subscription</a>
                    </div>
                    <div class="price-tag">
                      <span class="old-price">$55.00</span> <strong class="new-price"><sup>$</sup>49.99</strong>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione consequatur temporibus asperiores, qui ipsa ab eius, laborum.</p>
                    <p>
                      <button class="button-primary u-full-width">Product Page</button>
                    </p>
                    <ul class="stats u-full-width">
                      <li><a href="#">1,056 <span>Likes</span></a></li>
                      <li><a href="#">5 <i class="fa fa-star"></i> <span>Rating</span></a></li>
                      <li><a href="#">316 <span>Reviews</span></a></li>
                    </ul>
                  </div>
                </li>

                <li class="four columns catalog-item panel">
                  <a href="#">
                    <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/307033/10.jpg" alt="" class="u-max-full-width" />
                  </a>
                  <div class="catalog-item_detail">
                    <div>
                      <a href="#">3 Month Subscription</a>
                    </div>
                    <div class="price-tag">
                      <span class="old-price">$55.00</span> <strong class="new-price"><sup>$</sup>49.99</strong>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione consequatur temporibus asperiores, qui ipsa ab eius, laborum.</p>
                    <p>
                      <button class="button-primary u-full-width">Product Page</button>
                    </p>
                    <ul class="stats u-full-width">
                      <li><a href="#">1,056 <span>Likes</span></a></li>
                      <li><a href="#">5 <i class="fa fa-star"></i> <span>Rating</span></a></li>
                      <li><a href="#">316 <span>Reviews</span></a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>



<?php



// include footer
include 'includes/footer.php';