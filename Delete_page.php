<?php
include "db_config.php";


$tabel_name = "pages";
if(isset($_POST['page']))
{
    $query = "DELETE FROM ".$tabel_name." WHERE ".$tabel_name.".ID = ".$mysqli->real_escape_string([$_POST['ID']])."";
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