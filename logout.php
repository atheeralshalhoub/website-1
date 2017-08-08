<?php
/**
 * Created by PhpStorm.
 * User: nuha
 * Date: 8/8/17
 * Time: 07:33
 */

session_start(); # Starts the session

session_unset(); #removes all the variables in the session

session_destroy(); #destroys the session

if(!$_SESSION['email'])
    echo "Successfully logged out!<br />";
else
    echo "Error Occured!!<br />";