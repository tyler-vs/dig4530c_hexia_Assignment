



HEXIA README
====


Hexia is a php, mysql, html, css and javascript ecommerce
store assignments. It features a user system for basic and admin
users to do various functions through the website.


- admin
  - add, track, edit/modify and delete [CRUD] operations on the admin panel.

- users
  - view transactions, order, and user profile


Sulley DB Tables

`demo_users`
- id
- first_name, last_name
- email_address
- username
- password
- user_type

`demo_products`
- ...




## Anatomy of a page w/ session.

  - config inc
      - constants
      - session_start();

  - $_SESSION status variables, IF testing
    - $_SESSION['user_id'] = t
    - $_SESSION['user_type'] = t
    - // $_SESSION['user_status']
    - $_SESSION['user_not_expired'] = t

  - [redirect invalid user function for user pages]
    - function check for $_SESSION['user_id'] // ???
  - Mysql connection
  - header.inc
  - [content]
  - footer.inc


  login.php

  - config

    - variables, constants
    - session_start()
    - err handler
    - redirect user checker

  - $_SESSION test variables

  - redirect IF guarded page

  - mysql connect script

  - checks

    - SEVER POST
      - login script

        - dec error_array
        - check email || username form field
        - check password form field
        - if no login error in error_array
          - query = select user with username | email && password
          - run query
          - IF (num_row === 1)
            - dec $row var to grab db data for user
            [- IF password HASH check]
            - grab user_type
            - grab user_id
            - grab username
            - OR user expired
          - ELSE report login errs




    - $_GET logout
      - login.php?logout
      - Member->logout(username. userid. status );
    - $_POST login
      - Member-> login


## Wallscroll page Anatomy

- session
  - connect.inc
  - authenicate
    - query for username & password
  - login
    - session_start();
    - IF check $_SES username exists && $_SES username == login_name
      return true
    - ELSEIF function(auhtenticate [funct above])
      return true
    - ELSE echo err
      return false
  - logout
    - funct session_unset();
- config
  - mysql conn vars
- header.inc
  - html
- session check
  -
-


IA

// - admin/index.php


USER

- profile.php?user_id // display profile
- edit_profile.php?user_id
  - pre filled or aka Sticky form
  - validate
  - redirect to profile.php?user_id with success || err



## ?' . $_SESSION['user_id'] . ', profile version with using $_GET from url








## coding conventions


/**
*
*
*  block headers
*
*
*
*/



/**
*   code section
*/




// code comments,
// and code subsections


variables_look_like_this, underlined
not Hungarian


##










//procedural style
$mysqli =  mysqli_connect('host','username','password','database_name');

//object oriented style (recommended)
$mysqli = new mysqli('host','username','password','database_name');






<?php
//Open a new connection to the MySQL server
$mysqli = new mysqli('host','username','password','database_name');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

?>




<?php
//Open a new connection to the MySQL server
$mysqli = new mysqli('host','username','password','database_name');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

//MySqli Select Query
$results = $mysqli->query("SELECT id, product_code, product_desc, price FROM products");

print '<table border="1">';
while($row = $results->fetch_assoc()) {
    print '<tr>';
    print '<td>'.$row["id"].'</td>';
    print '<td>'.$row["product_code"].'</td>';
    print '<td>'.$row["product_name"].'</td>';
    print '<td>'.$row["product_desc"].'</td>';
    print '<td>'.$row["price"].'</td>';
    print '</tr>';
}
print '</table>';

// Frees the memory associated with a result
$results->free();

// close connection
$mysqli->close();
?>






<?php
//Open a new connection to the MySQL server
$mysqli = new mysqli('host','username','password','database_name');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

//chained PHP functions
$product_name = $mysqli->query("SELECT product_name FROM products WHERE id = 1")->fetch_object()->product_name;
print $product_name; //output value

$mysqli->close();
?>










<?php
//Open a new connection to the MySQL server
$mysqli = new mysqli('host','username','password','database_name');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

//get total number of records
$results = $mysqli->query("SELECT COUNT(*) FROM users");
$get_total_rows = $results->fetch_row(); //hold total records in variable

$mysqli->close();
?>