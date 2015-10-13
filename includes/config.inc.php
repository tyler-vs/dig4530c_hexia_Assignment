<?php
/**
*   config.inc.php
*
*
*   contians site variables and constants
*
*   this script is included on every page on the site
*   so any variables or functions that you want to access
*   everywhere/anywhere should be placed here.
*
*
*
*
*/


// connect to db variables
//
// DEFINE ('DB_USER', 'ty271781');
// DEFINE ('DB_PASSWORD', 'knights4321');
// DEFINE ('DB_HOST', '732FDD2702D5412B822FE5FCD1217A66');
// DEFINE ('DB_NAME', 'ty271781');



//
// helper / settings variables
//
define('DIR_PATH','http://sulley.cah.ucf.edu/~ty271781/dig4530c/demos/dig3540c_hexia_version_3/');

$website_title = 'Hexia';
$website_description = 'Hexia is awesome!';
$website_author = 'The third boss from Megaman';


//
// start session to access session variables.
//
session_start();


//
// error handler
//



//
// redirect invalid user
//
function authenticateUser($check = 'user_id') {

  // if a user_id is NOT set then
  // there is no user logged in and
  // should redirect to the login.php page
  if (!isset($_SESSION[$check])) {
    // absolute url to login.php page
    $url = DIR_PATH . 'login.php';
    header("Location: $url");
    exit();
  }
}

// checks $_SESSION user_type and redirects if
// not a admin user[-type].
function checkUserType($check = 'user_type') {
  if (isset($_SESSION[$check]) && $_SESSION[$check] == 'basic') {
    $url = DIR_PATH . 'homepage.php';
    header("Location: $url");
    exit();
    // if basic -> homepage
    // expired -> forgot password
    // banhammer -> your banned page
    //amin = nuthin'
  }
}





