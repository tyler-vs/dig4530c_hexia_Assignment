<?php
/**
*   homepage
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


  <!-- Welcomer Template
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <section id="welcomer" class="section">
    <div class="container">
      <div class="jumbo row gradient-2">
        <h1>Hello World</h1>
          <p>Aspernatur et eos, sit sapiente pariatur commodi sint natus expedita alias inventore, blanditiis, quia eius ipsum quisquam eaque magnam.</p>
          <p><a class="button">More</a></p>
      </div>
    </div>
  </section>




  <!-- Featured Item Template
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <section id="featured" class="section">
    <div class="container">
      <div class="row section-header">
        <h2 class="section-title">Featured Item</h2>
      </div>

      <div class="row">
        <div class="seven columns featured-item">
          <h3 class="featured-item_title">The Autobot Gearbox. <span class="text-muted">100% Headshots.</span></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil praesentium dignissimos cupiditate ad suscipit aut tempora repellat quis animi eos, eius corporis illo cumque, corrupti mollitia libero maiores modi quam.</p>
          <p>
            <span class="old-price">$549.99</span> <strong class="new-price text-muted">Now $449.99</strong>
          </p>
          <p><button class="button-primary">See specs</button></p>
        </div>
        <div class="five columns">
          <a href="#"><img src="https://placeholdit.imgix.net/~text?txtsize=19&txt=demo&w=600&h=600" alt="" class="u-max-full-width" /></a>
        </div>

      </div>
    </div>
  </section>


<?php



// include footer
include 'includes/footer.php';