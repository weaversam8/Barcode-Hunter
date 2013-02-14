<?php
/********************
Config file for Barcode-Hunter

Note: some config files are private, included in the _pfiles directory.
********************/
//Private config file (contains usernames passwords, etc.)
include 'config_pfile.php';

//mysql connection info
//Uncomment these lines if you sre not using the config_pfile.php

//$config_mysql_server = "localhost";
//$config_mysql_user = "john";
//$config_mysql_pass = "abc123";



//mysql connection script
$con = mysql_connect($config_mysql_server,$config_mysql_user,$config_mysql_pass);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

?>