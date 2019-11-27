<?php
include "db_config";

// gets the pages from the database 
// and returns them as json obj 
// feal free to chages this 
function load(){
    $query = "WRITE THE QUERY";
    $results = $mysqli->query($query);
    $num_results = $results->num_rows;
    if($num_results>0){
        echo "No Pages In Database";
    }else{
        echo json_encode($results);
    }
}
load();
?>