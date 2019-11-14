<!-- the configeration file to connect to the msql database -->
<?php
$host ="";
$username="";
$password="";
$db_name="Users";

$mysql = new mysqli($host, $username, $password, $db_name);
if(mysqli_connect_errno())
{
    echo "Error: could not connect to database";
    exit;
}
?>

