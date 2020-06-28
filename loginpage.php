<?php

$name=$_POST['name'];
$country=$_POST['country'];

$connect=mysqli_connect("localhost","root","","order");

$sql="select * from details where Name='$name' ";

$result=mysqli_query($connect,$sql);


if($result!=false){

while($row=mysqli_fetch_array($result)){
$check= $row["Country"];

}
mysqli_free_result($result);
mysqli_close($connect);
}

if($check == $country){
  echo '<script language="javascript">';
  echo 'alert("Login Successful")';
  echo '</script>';
}
else{
  echo '<script language="javascript">';
  echo 'alert("Login Failed !!!")';
  echo '</script>';
}

 ?>
