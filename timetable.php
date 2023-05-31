<body style="background-color:#edc9002c; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
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
    $query = "select * from time_table ";
    $result = mysqli_query($conn, $query);

    ?>
    <h1 style="text-align:center;">TIME TABLE</h1>
    <table style="border:1px solid black; margin:auto; background-color:white">
    <thead style="position:sticky;top:0;">
        <th style="background-color:black; color:white; font-weight:100;">DAY</th>
        <th style="background-color:black; color:white; font-weight:100;">I</th>
        <th style="background-color:black; color:white; font-weight:100;">II</th>
        <th style="background-color:black; color:white; font-weight:100;">III</th>
        <th style="background-color:black; color:white; font-weight:100;">IV</th>
        <th style="background-color:black; color:white; font-weight:100;">V</th>
        <th style="background-color:black; color:white; font-weight:100;">VI</th>
        <th style="background-color:black; color:white; font-weight:100;">VII</th>
        <th style="background-color:black; color:white; font-weight:100;">VIII</th>
    </thead>
        <tr>

    <?php

    while ($data = mysqli_fetch_array($result))
    {
        ?>
            <td style="border:1px solid black; padding:30px 30px; text-align:center; width:10%;"><?php echo $data['DAY']; ?></td>
            <td style="border:1px solid black; padding:30px 30px; text-align:center; width:10%;"><?php echo $data['I']; ?></td>
            <td style="border:1px solid black; padding:30px 30px; text-align:center; width:10%;"><?php echo $data['II']; ?></td>
            <td style="border:1px solid black; padding:30px 30px; text-align:center; width:10%;"><?php echo $data['III']; ?></td>
            <td style="border:1px solid black; padding:30px 30px; text-align:center; width:10%;"><?php echo $data['IV']; ?></td>
            <td style="border:1px solid black; padding:30px 30px; text-align:center; width:10%;"><?php echo $data['V']; ?></td>
            <td style="border:1px solid black; padding:30px 30px; text-align:center; width:10%;"><?php echo $data['VI']; ?></td>
            <td style="border:1px solid black; padding:30px 30px; text-align:center; width:10%;"><?php echo $data['VII']; ?></td>
            <td style="border:1px solid black; padding:30px 30px; text-align:center; width:10%;"><?php echo $data['VIII']; ?></td>
            </tr>
        <?php
    }
    ?>
    <table>
    <?php    
}
?>
