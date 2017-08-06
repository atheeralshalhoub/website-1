<?php
/**
 * Created by PhpStorm.
 * User: nuha
 * Date: 8/7/17
 * Time: 00:45
 */

$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE Barqeeyah";
if ($conn->query($sql) === TRUE) {
    ;
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();