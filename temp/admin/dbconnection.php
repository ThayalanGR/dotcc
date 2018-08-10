<?php
define('DB_SERVER', 'sql101.epizy.com');
define('DB_USER','epiz_22544223');
define('DB_PASS' ,'peJkWknSP');
define('DB_NAME', 'epiz_22544223_dotcc');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

?>
