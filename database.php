<body style="background-color:#ff440023; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
</body>
<?php

$conn = new mysqli('localhost' , 'root' , '' , 'mydatabase'); 

if($conn->connect_error)
{
    echo "$conn->connect_error";
    die("connection failed : " . $conn->connect_error);
}
else
{
    $query = "select * from signupdata ";
    $result = mysqli_query($conn, $query);

    ?>
    <h1 style="text-align:center; ">DATABASE</h1>
    <div style="height:90vh; overflow:scroll;">
    <table style="border:1px solid black; margin:auto; background-color:white;" >

    <thead style="position:sticky;top:0;">
        <th style="background-color:black; color:white; font-weight:100;">FIRST NAME</th>
        <th style="background-color:black; color:white; font-weight:100;">LAST NAME</th>
        <th style="background-color:black; color:white; font-weight:100;">EMAIL</th>
        <th style="background-color:black; color:white; font-weight:100;">REGD No.</th>
        <th style="background-color:black; color:white; font-weight:100;">DATE OF BIRTH</th>
        <th style="background-color:black; color:white; font-weight:100;">GENDER</th>
        <th style="background-color:black; color:white; font-weight:100;">MOBILE</th>
        <th style="background-color:black; color:white; font-weight:100;">INSTITUTE</th>
        <th style="background-color:black; color:white; font-weight:100;">TEACHER/STUDENT</th>
        <!-- <th style="background-color:black; color:white; font-weight:100;">PASSWORD</th> -->
        <!-- <th style="background-color:black; color:white; font-weight:100;">RE-TYPED PASSWORD</th> -->
        <th style="background-color:black; color:white; font-weight:100;">USER IMAGE</th>
    </thead>

        <tr>

    <?php

    while ($data = mysqli_fetch_array($result))
    {
        ?>
            <td style="border:1px solid black; padding:5px 5px; text-align:center; width:10%;"><?php echo $data['FIRSTNAME']; ?></td>
            <td style="border:1px solid black; padding:5px 5px; text-align:center; width:10%;"><?php echo $data['LASTNAME']; ?></td>
            <td style="border:1px solid black; padding:5px 5px; text-align:center; width:10%;"><?php echo $data['EMAIL']; ?></td>
            <td style="border:1px solid black; padding:5px 5px; text-align:center; width:10%;"><?php echo $data['ADDRESS']; ?></td>
            <td style="border:1px solid black; padding:5px 5px; text-align:center; width:10%;"><?php echo $data['DOB']; ?></td>
            <td style="border:1px solid black; padding:5px 5px; text-align:center; width:10%;"><?php echo $data['GENDER']; ?></td>
            <td style="border:1px solid black; padding:5px 5px; text-align:center; width:10%;"><?php echo $data['MOBILE']; ?></td>
            <td style="border:1px solid black; padding:5px 5px; text-align:center; width:10%;"><?php echo $data['INSTITUTE']; ?></td>
            <td style="border:1px solid black; padding:5px 5px; text-align:center; width:10%;"><?php echo $data['IDENTITY']; ?></td>
            <!-- <td style="border:1px solid black; padding:5px 5px; text-align:center; width:10%;"><?php echo $data['PASSWORD']; ?></td> -->
            <!-- <td style="border:1px solid black; padding:5px 5px; text-align:center; width:10%;"><?php echo $data['CPASSWORD']; ?></td> -->
            <td style="border:1px solid black; padding:5px 5px; text-align:center; width:10%;"><?php echo '<img src="'.$data['PHOTO'].'" style="width:100px; height:100px; border-radius:10px;">';?></td>
            </tr>
        <?php
    }
    ?>
    <table>
    </div>
    <?php    
}
?>





