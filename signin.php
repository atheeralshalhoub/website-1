


<?php
/**
 * Created by PhpStorm.
 * User: nuha
 * Date: 8/8/17
 * Time: 07:18
 */
session_start();


if(isset($_POST['submit'])){
$email = $_POST['name'];
$pass = $_POST['pass'];

$sql = "SELECT email,password FROM registration WHERE(
     email='".$email."' and  password='".$pass."')";



$qury = mysqli_query($sql,$conn);

$result = mysqli_fetch_array($qury);

if($result[0]>0)
{

    $_SESSION['email'] = $email;
    echo "<br />أهلًا بك  ".$_SESSION['email']."!";

}
else
{
    echo "Login Failed";
    echo "<br /><a href='signup.php'>SignUp</a>";
    echo "<br /><a href='signin.php'>SignIn</a>";
}
}
?>

<html>
       <form action="index.php" method="post">
    Email: <input type="text" name="name"><br />
              password: <input type="password" name="pass"><br />
              <input type="submit" name = "submit">
       </form>
</html>