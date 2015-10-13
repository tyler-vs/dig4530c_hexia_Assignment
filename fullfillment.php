<?php
/**
*   fullfillment
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

  <!-- Fullfillment Template
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <section id="fullfillment" class="section">
    <div class="container">
      <div class="row section-header">
        <!-- js randomize noun -->
        <h2 class="section-title">Success! <span class="text-muted">Fullfillment</span>.</h2>
      </div>

      <div class="row">
        <div class="six columns offset-by-three">
          <div class="alert alert-success" role="alert">Your Payment Went Through!</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo illum, fugit totam eius minus exercitationem non impedit, incidunt. Error omnis odit distinctio beatae, voluptate fuga nisi sit quia? Magni, debitis.</p>
        </div>
      </div>

    </div>
  </section>


<?php



// include footer
include 'includes/footer.php';