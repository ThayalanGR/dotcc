<?php

error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
ob_start();
define('PROJECT_NAME', 'dotCodecommunity');
session_start();
define('DB_DRIVER', 'mysql'); 
define('DB_SERVER', 'sql101.epizy.com');
define('DB_SERVER_USERNAME', 'epiz_22544223');
define('DB_SERVER_PASSWORD', 'peJkWknSP');
define('DB_DATABASE', 'epiz_22544223_dotcc'); 

// must end with a slash
define('SITE_URL', 'http://dotcodecommunity.epizy.com/');

$DB = mysqli_connect(DB_SERVER,DB_SERVER_USERNAME,DB_SERVER_PASSWORD,DB_DATABASE);

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

?>


