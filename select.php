<!--
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="refresh" content="10">
<title>PHP SELECTION</title>
</head>

<body>
<h3>The List of Names and Countries are as below : </h3>


<table width="300" border="1">
  <tr>
  <td>NAME</td>
    <td>COUNTRY</td>
  </tr>

</table>
</body>
</html>
-->
<?php

include("connection.php");
$link=Connection();

$str="";

$result=mysqli_query($link,"select * from details");

if($result!=false){

while($row=mysqli_fetch_array($result)){
#echo "<tr> <td>".$row["Name"]."</td>   <td>".$row["Country"]."</td>   </tr>";
#echo $row["Name"]."&nbsp&nbsp".$row["Country"]."<br/>";
$str.=$row["Name"]."&nbsp&nbsp".$row["Country"]."<br/>";
}
echo $str;

mysqli_free_result($result);
mysqli_close($link);
}
?>
