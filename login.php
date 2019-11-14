<!-- Login page end point -->
<?php

function send_responce()
{

}

// check if username is in database
if(isset($_POST['username']))
{
    $raw_data = $_POST['username'];
    $username = filter_var($raw_data, FILTER_SANITIZE_STRING);
    $query = "Select * from ".$db_name." Where username = " .$username."";
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
        // check password
        $mysqli->close();
        if()
        {}
    }else
    {
        // bad 
    }

}else
{
    // bad 
}
?>