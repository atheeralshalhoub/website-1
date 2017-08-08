<?php
/**
 * Created by PhpStorm.
 * User: nuha
 * Date: 8/8/17
 * Time: 06:52
 */
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['p'];
$phone = $_POST['phone'];
#$sql = "INSERT into phplogin values(".$id.",'".$user."','".$pass."')";
$sql = "INSERT into registration values('$fname','$lname','$email',$pass','$phone')";
$qury = mysqli_query($sql,$conn);

#  INSERT into phplogin values(
#   1,
#   'satish',
#   'satish');

if(!$qury)
{
    echo "Failed ".mysqli_error();
    echo "<br /><a href='signup.php'>SignUp</a>";
    echo "<br /><a href='signin.php'>SignIn</a>";
}
else
{
    echo "<br /><a href='signin.php'>SignIn</a>";
}
?>

<html>
<form action="signup.php" method="post">
    first name:<input type="text" name="fname"><br />
    last name:<input type="text" name="lname"><br />
    email: <input type="email" name="email">
    Password:<input type="password" name="p"><br />
    Phone number: <input type="number" name="phone">
    <input type="submit" name="submit" value="Submit">
</form>
</html>
<?php

?>