<?php 

        $conn = new mysqli('localhost', 'root', '', 'mydatabase');

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        else
        {
            $regdno = $_POST['regdno'];
            $date = $_POST['date'];
            $month = $_POST['month'];
            $status = $_POST['status'];

            $query = "select * from attendence where REGDNO='$regdno' and DATE='$date' and MONTH='$month' ";
            $result = mysqli_query($conn,$query);
            $count = mysqli_num_rows($result);
            if($count>0)
            {
                header("location: marked.html");
            }
            else
            {
                $sql = "INSERT INTO attendence (REGDNO , DATE , MONTH , STATUS ) VALUES ('$regdno', '$date', '$month', '$status')";
                if ($conn->query($sql) === TRUE) {
                    header("location: marksuccess.html");
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $query1="select * from clg_att_table where REGDNO='$regdno'";
                $query2="select * from attendence where REGDNO='$regdno' and MONTH='$month'";
                $result1=mysqli_query($conn,$query1);
                $result2=mysqli_query($conn,$query2);
                $count1 = mysqli_num_rows($result1);
                $count2 = mysqli_num_rows($result2);


                $query3="update clg_att_table set $month='$count2' where $regdno=REGDNO";
                $result3 = mysqli_query($conn,$query3);
            }    
        }

        ?>
