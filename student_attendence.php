<body style="background-color:#45bfe72e;  font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
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
    $query = "select * from clg_att_table ";
    $result = mysqli_query($conn, $query);

    ?>
    <h1 style="text-align:center ;">ATTENDENCE</h1>
    <table style="border:1px solid black; margin:auto; background-color:white">
    <thead style="position:sticky;top:0;">
        <th style="background-color:black; color:white; font-weight:100;">NAME</th>
        <th style="background-color:black; color:white; font-weight:100;">REGD NO.</th>
        <th style="background-color:black; color:white; font-weight:100;">JAN</th>
        <th style="background-color:black; color:white; font-weight:100;">FEB</th>
        <th style="background-color:black; color:white; font-weight:100;">MAR</th>
        <th style="background-color:black; color:white; font-weight:100;">APR</th>
        <th style="background-color:black; color:white; font-weight:100;">MAY</th>
        <th style="background-color:black; color:white; font-weight:100;">JUN</th>
        <th style="background-color:black; color:white; font-weight:100;">JUL</th>
        <th style="background-color:black; color:white; font-weight:100;">AUG</th>
        <th style="background-color:black; color:white; font-weight:100;">SEP</th>
        <th style="background-color:black; color:white; font-weight:100;">OCT</th>
        <th style="background-color:black; color:white; font-weight:100;">NOV</th>
        <th style="background-color:black; color:white; font-weight:100;">DEC</th>
    </thead>
        <tr>

    <?php

    while ($data = mysqli_fetch_array($result))
    {
        ?>
            <td style="border:1px solid black; padding:5px 5px; text-align:center; width:1%;"><?php echo $data['FIRSTNAME']; ?></td>
            <td style="border:1px solid black; padding:5px 5px; text-align:center; width:1%;"><?php echo $data['REGDNO']; ?></td>
            <td style="border:1px solid black; padding:5px 5px; text-align:center; width:1%;"><?php echo $data['Jan']; ?></td>
            <td style="border:1px solid black; padding:5px 5px; text-align:center; width:1%;"><?php echo $data['Feb']; ?></td>
            <td style="border:1px solid black; padding:5px 5px; text-align:center; width:1%;"><?php echo $data['Mar']; ?></td>
            <td style="border:1px solid black; padding:5px 5px; text-align:center; width:1%;"><?php echo $data['Apr']; ?></td>
            <td style="border:1px solid black; padding:5px 5px; text-align:center; width:1%;"><?php echo $data['May']; ?></td>
            <td style="border:1px solid black; padding:5px 5px; text-align:center; width:1%;"><?php echo $data['Jun']; ?></td>
            <td style="border:1px solid black; padding:5px 5px; text-align:center; width:1%;"><?php echo $data['Jul']; ?></td>
            <td style="border:1px solid black; padding:5px 5px; text-align:center; width:1%;"><?php echo $data['Aug']; ?></td>
            <td style="border:1px solid black; padding:5px 5px; text-align:center; width:1%;"><?php echo $data['Sep']; ?></td>
            <td style="border:1px solid black; padding:5px 5px; text-align:center; width:1%;"><?php echo $data['Oct']; ?></td>
            <td style="border:1px solid black; padding:5px 5px; text-align:center; width:1%;"><?php echo $data['Nov']; ?></td>
            <td style="border:1px solid black; padding:5px 5px; text-align:center; width:1%;"><?php echo $data['Dec']; ?></td>

            </tr>
        <?php
    }
    ?>
    <table>
    <?php    
}
?>