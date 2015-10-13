<?php
/**
*   login
*   -----------------------------
*
*   login page will:
*
*   - dec login error arrays
*   - check for username and passsword fields
*     before making user query check to database
*
*/


// config
//
include 'includes/config.inc.php';



// $_SESSION testing vars
//


// redirect for private user/admin pages
// - function from config.inc.php
//   check $_SESSION user_id, as opposed to
//   running a query each page laod, look into better
//   approach!
// authenticateUser();




// mysql conn script
//
include 'includes/mysql_connect.inc.php';


// page variables
//
$page_name = 'Login page';





// init page variables
$login_errors = array();


// check username existance to test in query
if (!empty($_POST['username'])) {
  // $esc_username = escapeData($_POST['username'], $db);
  $esc_username = $db->real_escape_string($_POST['username']);
} else {
  // echo 'Please enter a valid username.';
  $login_errors['username'] = 'Please enter a valid username.';
}


// check password existance to test in query
if (!empty($_POST['password'])) {
  // $esc_password = escapeDate($_POST['password'], $db);
  $esc_password = $db->real_escape_string($_POST['password']);

} else {
  // echo 'Please enter a password.';
  $login_errors['password'] = 'Please enter a valid password.';
}


// if no login errors perform query to check for user
if (empty($login_errors)) {


  /*$query = "SELECT *
      FROM demo_users
      WHERE username = ?
      LIMIT 1"; //  AND password = ?


  if ($stmt = $this->conn-> prepare($query)) {

    // prepare the statement for security
    // 1st indicate what kind of datatype to expect,
    // s for string datatype values
    // 2nd pass two values to be bound to ?\'s in query
    $stmt->bind_param('s', $esc_username);

    // execute statement
    $stmt->execute();

    // check to see if any returns occurred
    if ($stmt->fetch()) {
      $stmt->close();
      return true;
    }
  } // else return false;*/


  $query = "SELECT * FROM demo_users WHERE username='$esc_username'";

  $result = $db->query($query);

  if ( $result->num_rows === 1) {


    while($row = $result->fetch_assoc()) {

      // check password with hash???

      // === , hash HERE
      if ($row['password'] == $_POST['password']) {

        // check for admin / user_type status on user
        // if (condition) {
        //   # code...
        // }

        // store data in a session
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['username'];
        $_SESSION['user_type'] = $row['user_type'];

        // reload $_SESSION['expired'] && re-generate a session_id

        // redirections
        if ($_SESSION['user_type'] === 'basic') {
          header("Location: homepage.php"); // or profile??
          exit();
        } elseif($_SESSION['user_type'] === 'admin') {
          header("Location: admin.php"); // or admin panel profile
          exit();
        }
      } else {
        $login_errors['check1'] = 'The email and password do not match.';
      }

    }
    // end while statement

  } else {
    $login_errors['check2'] = 'The email and password do not appear in the database.';
    // echo = 'The email and password do not appear in the database.';

  }
}


// include header
include 'includes/header.php';
/*PAGE CONTENT STARTS HERE*/
?>


  <!-- Sign In Template
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <section id="signin" class="section">
    <div class="container">
      <div class="row section-header">
        <h2 class="section-title">Sign In</h2>
      </div>

      <?php

      echo '<div class="row">';
      if($login_errors) {
        echo '<pre>';
        echo print_r($login_errors);
        echo '</pre>';
      }

      if (!isset($_SESSION['user_id'])) {
        echo '<pre>';
        echo print_r($_SESSION);
        echo '</pre>';
      }

      echo '</div>';


      // if there is no user_id set in $_SESSION array
      // then user is not signed and has a login form displayed
      if (!isset($_SESSION['user_id'])) {


      ?>



      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
        <div class="row">
          <div class="six columns offset-by-three panel">

            <!-- username -->
            <div class="">
              <label for="username">Username</label>
              <input class="u-full-width" type="text" placeholder="Username" name="username">
            </div>

            <!-- password -->
            <div class="">
              <label for="password">Your Password</label>
              <input class="u-full-width" type="password" name="password">
            </div>
            <div class="">
              <input class="u-full-width button-primary" type="submit" name="submit" />
            </div>
            <p>
              <a href="#">Forgot</a> your password? Want to <a href="#">Register</a>?
            </p>
          </div>
        </div>
      </form>
      <?php
        // if(isset($response)) {
        // echo '<div class="alert alert-info" role="alert">' . $response . '</div>';

      } else {
        // echo `your logged in already` message
      ?>
      <div class="row">
        <div class="alert alert-info">You are already sign in. Click here to <a href="logout.php" title="logout.php">logout.php</a>.</div>
      </div>
      <?php
        // end else conditional
      }
      ?>
    </div>
  </section>



<?php
/*PAGE FOOTER */


// include footer
include 'includes/footer.php';