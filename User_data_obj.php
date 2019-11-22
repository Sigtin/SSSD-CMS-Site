<?php
class User
{
    var $username;
    var $password;
    var $isAdmin;

    public function __construct($username, $password, $isAdmin){
        $this->username=$username;
        $this->password=$password;
        $this->isAsmin=$isAdmin;
    }
}

?>