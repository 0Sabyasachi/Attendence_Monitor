<?php 

$conn = new mysqli('localhost', 'root', '', 'mydatabase');

$regdno = "1901292099";
$month = "May";

$query1="select * from clg_att_table where REGDNO='$regdno'";
$query2="select * from attendence where REGDNO='$regdno' and MONTH='$month'";
$result1=mysqli_query($conn,$query1);
$result2=mysqli_query($conn,$query2);
$count1 = mysqli_num_rows($result1);
$count2 = mysqli_num_rows($result2);
print_r($count2);

$query3="update clg_att_table set $month='$count2' where $regdno=REGDNO";
$result3 = mysqli_query($conn,$query3);


?>