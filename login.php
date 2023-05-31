<?php

$EMAIL = $_POST['EMAIL'];
$PASSWORD = $_POST['PASSWORD'];
    
$conn = new mysqli('localhost', 'root', '', 'mydatabase');

if($conn->connect_error)
{
    echo "$conn->connect_error";
    die("connection failed : " . $conn->connect_error);
}
else
{
    $query = "select * from signupdata where EMAIL='$EMAIL' and PASSWORD='$PASSWORD' and CPASSWORD='$PASSWORD' ";

    $result = mysqli_query($conn,$query);

    $count = mysqli_num_rows($result);

    if($count>0)
    {
        header("location: loginpass.html");
    }
    else
    {
        header("location: loginfail.html");
    }

}

?>