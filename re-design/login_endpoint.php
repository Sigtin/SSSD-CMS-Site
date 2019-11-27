<?php
include 'db_config.php';
include 'user.php';

// this should work
if(isset($_POST['username'])){
    $raw_data = $_POST['username'];
    $username = filter_var($raw_data, FILTER_SANITIZE_STRING);
    $query = "Select * from `".$table_name."` Where Username = '".$username."'";
    $results = $mysql->query($query);
    $num_results = $results->num_rows;
    $user = new User();
    if($num_results>0){
        while($row=$results->fetch_assoc()){
            extract($row);
            $user->$username;
            $user->$password;
            $user->isAdmin = $isAdmin;
        }
        $mysqli->close();
        $raw_pass = $_POST['password'];
        $pass = filter_var($raw_pass, FILTER_SANITIZE_STRING);
        if($user->password == $pass){
            header("Location: http://localhost/index.php");
            die();
        }else{
            // bad login data do what ever you want
        }
    }
}

?>