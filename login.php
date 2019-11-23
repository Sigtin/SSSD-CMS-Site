<!-- Login page end point -->
<?php
// check if username is in database
include 'db_config.php';
include 'User_data_obj.php';

if(isset($_POST['username']))
{
    $raw_data = $_POST['username'];
    $username = filter_var($raw_data, FILTER_SANITIZE_STRING);
    $query = "Select * from `".$table_name."` Where Username = '".$username."'";
    $results = $mysql->query($query);
    $num_results = $results->num_rows;
    $user = new User();
    if($num_results>0)
    {
        while($row=$results->fetch_assoc())
        {
            extract($row);
            $user->username=$Username;
            $user->password=$Password;
            $user->isAdmin=$IsAdmin;
        }
        $mysql->close();
        $raw_pass = $_POST['password'];
        $pass = filter_var($raw_pass, FILTER_SANITIZE_STRING);
        // un hash password
        if($user->password == $pass)
        {
            session_start();
            $_SESSION["username"] = $user->username;
            $_SESSION["password"] = $user->password;
            header("Location: http://localhost:8080/pages/index.html");
            exit();
        } 
        else 
        {
            header("Location: http://localhost:8080/admin/login.html");
            exit();
        }
    }
}
    header("Location: error_page.php");
    die();
?>