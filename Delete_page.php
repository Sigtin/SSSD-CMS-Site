<?php
include "db_config.php";


$tabel_name = "pages";
if(isset($_POST['page']))
{
    $query = "";
    if($mysqli->query($query))
    {
        header("Location:")
        exit();
    }else
    {
        echo "Database Error: unable to delete record.";
    }
$mysqli->close();
}
?>