<?php
/**
 * Created by PhpStorm.
 * User: nuha
 * Date: 8/7/17
 * Time: 01:38
 */

#include 'connect.php';
#include 'tables.php';
include "index.php";


if(isset($_POST['email'])){
    $sql = "delete from subscription where email=" .$_POST['email'];
    if ($conn->query($sql) === TRUE) {
        ;
    } else {
        $conn->error;
    }
}

