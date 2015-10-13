<?php
/*
    logout php

    this page allows a user to logout by using
    session_destroy() function
*/




// config include
//
include 'includes/config.inc.php';


// $SESS testing vars
//


// redirect for private user/admin pages
//
authenticateUser();

$_SESSION = array();

// || session_unset();
session_destroy();
// remove cookie, not used yet
// setcookie (session_name(), '', time()-300); // Destroy the cookie.


// mysql conn script
//
include 'includes/mysql_connect.inc.php';


// page variables
//
$page_name = 'Logout';

// header include
//
include 'includes/header.php';

/*PAGE CONTENT STARTS HERE*/
?>


  <!-- Welcomer Template
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <section id="welcomer" class="section">
    <div class="container">
      <div class="row section-header">
        <h2 class="section-title">You are now logged out!</h2>
        <p>You can log back in here <a href="login.php">here</a>.</p>

      </div>
      <div class="row">
        <?php
          // if (isset($_SESSION['user_id'])) {
            echo '<pre>';
            echo print_r($_SESSION);
            echo '</pre>';
          // }
        ?>
      </div>
    </div>
  </section>



<?php



// include footer
include 'includes/footer.php';

