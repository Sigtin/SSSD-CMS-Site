<!-- Login page end point -->
<?php
// check if username is in database
if(isset($_POST['username']))
{
    $raw_data = $_POST['username'];
    $username = filter_var($raw_data, FILTER_SANITIZE_STRING);
    $query = "Select * from ".$db_name." Where username = ".$username."";
    $results = $mysqli->query($query);
    $num_results = $results->num_rows;
    $user = new User_data_obj();
    if($num_results>0)
    {
        while($row=$results->fetch_assoc())
        {
            extract($row);
            $user->username=$username;
            $user->password=$password;
            $user->isAdmin=$isAdmin;
        }
        $mysqli->close();
        $raw_pass = $_POST['password'];
        $pass = filter_var($raw_pass, FILTER_SANITIZE_STRING);
        // un hash password
        if($user->password==$pass)
        {
            header("Loaction: localhost:8080/admin/login.html");
            exit();
        }
    }
}
    header("Loaction: error_page.php")
    die();
?>