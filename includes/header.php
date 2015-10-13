<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title><?php if (!isset($website_title)) {
      echo 'Hexia';
    } else {
      echo $website_title . ' &mdash; ' . $page_name;
    }
    ?></title>

    <meta name="description" content="<?php echo $website_description; ?>">
    <meta name="author" content="<?php echo $website_author; ?>">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONT
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="css/normalize.css">

    <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css'>

    <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="css/style.css">




  </head>

<body>

<!-- wrapper -->
<div class="page-wrap">

  <!-- header -->
  <header class="header">

    <div class="container">
      <!-- logo -->
      <div class="logo">
        <a href="homepage.php" title="Hexia company logo.">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/307033/hexia-logo.png" alt="Logo"  class="logo-img u-full-wdth">
          <!--<h2>Hexia</h2>-->
        </a>
      </div>
      <!-- /logo -->

      <!-- nav -->
      <nav class="nav">
        <div class="menu">
          <ul>
          <?php

            $pages = array(
              'homepage' => 'homepage.php',
              'category' => 'category.php',
              'cart' => 'cart.php',
              'fullfillment' => 'fullfillment.php',
              'profile' => 'profile.php',
              'login' => 'login.php',
              'admin' => 'admin.php',
              'demo' => 'demo.php'
            );

            // The page being viewed:
            $this_page = basename($_SERVER['PHP_SELF']);

            // Create each menu item:
            foreach ($pages as $k => $v) {

              // Start the item:
              echo '<li';

              // Add the class if it's the current page:
              if ($this_page == $v) echo ' class="active"';

              // Complete the item:
              echo '><a href="' . $v . '">' . $k . '</a></li>
              ';

            } // End of FOREACH loop.


          ?>

          </ul>
        </div>
      </nav>
      <!-- /nav -->
      <div id="top-search">
        <?php

          if (isset($_SESSION['user_id'])) {
            echo '<a href="profile.php">' . $_SESSION['user_name'] . '\'s Profile</a>';
            echo '<a href="logout.php">Logout</a>';
          } else {
            echo '<a href="login.php">Login</a>';
          }
        ?>
        <form class="top-search_box">
          <input type="text" placeholder="search" />
          <button class="button-primary"><i class="fa fa-search"></i> Search</button>
        </form>
        <button href="shopping_cart.php"><i class="fa fa-shopping-cart"></i> Shopping Cart</button>
      </div>
    </div>
  </header>
  <!-- /header -->