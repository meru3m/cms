<?php

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "cms");

# heaving an extension or editor error when using foreach constants are not recognized.
// $db['db_host'] = "localhost";
// $db['db_user'] = "root";
// $db['db_pass'] = "";
// $db['db_name'] = "cms";

// foreach($db as $key => $value) {
//   $uppercaseKey = strtoupper($key);
//   define($uppercaseKey, $value);
// }

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME); // @phpstan-ignore-next-line

if ($connection) {
  echo "We are connected!";
} 

