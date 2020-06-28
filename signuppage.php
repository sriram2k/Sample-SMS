<?php

/*$user=$_POST['uname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];*/

$name=$_POST['name'];
$country=$_POST['country'];

$connect=mysqli_connect("localhost","root","","order");

$sql="insert into details values('$name','$country')";

if(mysqli_query($connect,$sql)){

echo '<h1><script>alert("Details Registered")</script></h1>';

header("location:home.html");
}
else{
  echo '<h1><script>alert("Something Went Wrong")</script></h1>';
//header("location:signuppage.html");
}






 ?>
