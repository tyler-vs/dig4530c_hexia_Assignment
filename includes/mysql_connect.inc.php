<?php
/**
*   mysql_connect.inc.php
*
*   this will connect us to the database.
*
*
*
*
*/


$db_servername = 'sulley.cah.ucf.edu';
$db_username = 'ty271781';
$db_name = 'ty271781';
$db_password = '732FDD2702D5412B822FE5FCD1217A66';


// connection with mysqli
// !!NOTE: OBJECT ORIENTED APPROACH !!

$db = new mysqli($db_servername, $db_username, $db_password, $db_name);



if ($db->connect_errno > 0 ) {
  // error report
  echo 'Unable to connect to database: [' . $db->connect_errno . ']. ' . $db->connect_error . '.';
}


// escape data function
function escapeData($data, $db) {
  // ref:
  // $data = trim($data);
  // $data = stripslashes($data);
  // $data = htmlspecialchars($data);
  // ref: https://secure.php.net/manual/en/mysqli.real-escape-string.php
  return $db->real_escape_string($data);
}











