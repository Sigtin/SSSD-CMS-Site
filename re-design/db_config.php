<!-- you my need to change some of these values -->

<?php
$host ="localhost";
$username="root";
// $password="siggles";
$password="";
$db_name="CMS_DB";
$table_name="users";

$mysql = new mysqli($host, $username, $password, $db_name);
if(mysqli_connect_errno())
{
    echo "Error: could not connect to database";
    exit;
}
?>