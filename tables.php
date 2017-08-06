<?php
/**
 * Created by PhpStorm.
 * User: nuha
 * Date: 8/7/17
 * Time: 00:49
 */
#include 'connect.php';
$sql= "CREATE TABLE IF NOT EXISTS subscription (
email VARCHAR (60) NOT NULL 
)";

if ($conn->query($sql) === TRUE) {
    ;
} else {
     $conn->error;
}