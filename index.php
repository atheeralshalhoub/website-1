<?php

#include 'connect.php';
#include 'tables.php';

if( isset($_POST['submit'])){

    $sql = 'INSERT INTO subscription VALUES ('.$_POST['email'].')';
    if ($conn->query($sql) === TRUE) {
       ;
    } else {
        $conn->error;
    }
    $select = "SELECT * from subscription";
    while($row = mysql_fetch_array($select))
    {
        $addresses[] = $row['email'];


    }
    $to = implode(", ", $addresses);
    $subject = 'أهلًا بكم';
    $message = '<img href="img/رسالة خدمة بريدية.png" alt="">';
    mail($to, $subject, $message, "");

}

