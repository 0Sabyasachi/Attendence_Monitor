<body style="background-color:#a15e5e38;  font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
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
    $query = "select * from teacher_table ";
    $result = mysqli_query($conn, $query);

    ?>
    <h1 style="text-align:center;">TEACHER'S DATABASE</h1>
    <table style="border:1px solid black; margin:auto; background-color:white">
    <thead style="position:sticky;top:0;">
        <th style="background-color:black; color:white; font-weight:100;">FIRST NAME</th>
        <th style="background-color:black; color:white; font-weight:100;">LAST NAME</th>
        <th style="background-color:black; color:white; font-weight:100;">EMAIL</th>
        <th style="background-color:black; color:white; font-weight:100;">MOBILE</th>
        <th style="background-color:black; color:white; font-weight:100;">EMPLOYEE ID</th>
        <th style="background-color:black; color:white; font-weight:100;">GENDER</th>
    </thead>
        <tr>
    <?php

    while ($data = mysqli_fetch_array($result))
    {
        ?>
            <td style="border:1px solid black; padding:5px 5px; text-align:center; width:10%;"><?php echo $data['FIRSTNAME']; ?></td>
            <td style="border:1px solid black; padding:5px 5px; text-align:center; width:10%;"><?php echo $data['LASTNAME']; ?></td>
            <td style="border:1px solid black; padding:5px 5px; text-align:center; width:10%;"><?php echo $data['EMAIL']; ?></td>
            <td style="border:1px solid black; padding:5px 5px; text-align:center; width:10%;"><?php echo $data['MOBILE']; ?></td>
            <td style="border:1px solid black; padding:5px 5px; text-align:center; width:10%;"><?php echo $data['EID']; ?></td>
            <td style="border:1px solid black; padding:5px 5px; text-align:center; width:10%;"><?php echo $data['GENDER']; ?></td>
            </tr>
        <?php
    }
    ?>
    <table>
    <?php    
}
?>