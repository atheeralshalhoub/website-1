<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>برقية</title>
 <link  rel="stylesheet" type="text/css" href="styles.css" />
      <script type="text/javascript">
          function doSomething() {
              $.get("unsubscribe.php");
              return false;
          }
      </script>
  </head>

  <body>

	 <a class="topright" href="/">
  <img src= "img/logo.png"/>
</a>
  <div class="navbar">
        <a class="thick">اتصل بنا</a>
		<a class="thick">خدماتنا</a>
        <a class="thick">من نحن</a>


</div>

		 <div> <h1  class="center"> مرحبا بك في خدمة برقية </br> إشترك في القائمة البريدية ليتم إعلامك عند إنطلاقها</h1>
		 </div>
		  <div class="center2">
				<form method="post" action="index.php">
					<input type="text" name="email" class="corner">
					<div class="center3">
						<input class="button" type="submit" name="submit" value="اشترك الآن" ><br/>
					</div>

                </form>
              <div>  <a class="under" href="" onclick="doSomething();"> إلغاء الإشتراك </a> </div>
		  </div>



</body>
</html>

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

