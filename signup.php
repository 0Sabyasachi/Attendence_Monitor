<?php

// Create connection
$conn = new mysqli('localhost', 'root', '', 'mydatabase');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])){
    $FIRSTNAME = $_POST['FIRSTNAME'];
    $LASTNAME = $_POST['LASTNAME'];
    $EMAIL = $_POST['EMAIL'];
    $ADDRESS = $_POST['ADDRESS'];// address=regdno.
    $DOB = $_POST['DOB'];
    $GENDER = $_POST['GENDER'];
    $MOBILE = $_POST['MOBILE'];
    $INSTITUTE = $_POST['INSTITUTE'];
    $IDENTITY = $_POST['IDENTITY'];
    $PASSWORD = $_POST['PASSWORD'];
    $CPASSWORD = $_POST['CPASSWORD'];
    $image = $_POST['image'];

    
    // address=regdno

    $sql = "INSERT INTO signupdata (FIRSTNAME,LASTNAME,EMAIL,ADDRESS,DOB,GENDER,MOBILE,INSTITUTE,IDENTITY,PASSWORD,CPASSWORD,PHOTO) VALUES ('$FIRSTNAME', '$LASTNAME', '$EMAIL', '$ADDRESS', '$DOB', '$GENDER', '$MOBILE', '$INSTITUTE', '$IDENTITY', '$PASSWORD', '$CPASSWORD','$image')";// address=regdno
    if ($conn->query($sql) === TRUE) {
        header("location: signuppass.html");
    } else {
        header("location: signupfail.html");
    }
}

$conn->close();
?>

<?php 

$conn = new mysqli('localhost', 'root', '', 'mydatabase');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit']) ){
    $FIRSTNAME = $_POST['FIRSTNAME'];
    $REGDNO = $_POST['ADDRESS'];// address=regdno
    $IDENTITY = $_POST['IDENTITY'];

    if($IDENTITY == 'S')
    {
        $sql = "INSERT INTO clg_att_table (FIRSTNAME ,REGDNO) VALUES ('$FIRSTNAME', '$REGDNO')";
        if ($conn->query($sql) === TRUE) {
            echo "<br>";
            echo "inserted into attendence table successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();

?>

<?php 

$conn = new mysqli('localhost', 'root', '', 'mydatabase');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit']) ){
    $FIRSTNAME = $_POST['FIRSTNAME'];
    $LASTNAME = $_POST['LASTNAME'];
    $EMAIL = $_POST['EMAIL'];
    $MOBILE = $_POST['MOBILE'];
    $EID = $_POST['ADDRESS'];// address=EMP ID
    $GENDER = $_POST['GENDER'];
    $IDENTITY = $_POST['IDENTITY'];

    if($IDENTITY == 'T')
    {
        $sql = "INSERT INTO teacher_table (FIRSTNAME , LASTNAME , EMAIL , MOBILE  , EID , GENDER) VALUES ('$FIRSTNAME', '$LASTNAME', '$EMAIL', '$MOBILE', '$EID', '$GENDER')";
        if ($conn->query($sql) === TRUE) {
            echo "<br>";
            echo "inserted into teacher table successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();

?>