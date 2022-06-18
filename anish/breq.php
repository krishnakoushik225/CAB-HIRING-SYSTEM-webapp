<?php

$con = new mysqli('localhost', 'root', '', 'cabh');

$sql = "SELECT * FROM rideshist";
$result = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Booking Requests</title>
</head>

<body>
    
    <div class="container">
        <div class="header">
            
        </div>
        <div class="content">
            <div class="cards">
        

            
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Ride</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                        <th>username</th>
                <th>from loc</th>
                <th>dest loc</th>
                <th>User phone</th>
                        </tr>

                        <tbody>
                        <?php
            while ($row = $result->fetch_assoc()) {
                $user = $row['username'];
                $sql1 = "SELECT * FROM customerdata WHERE cemail = '$user'";

                $res = $con->query($sql1);
                $row1 = $res->fetch_assoc();
                echo
                "<tr>
                <td>{$row['username']}</td>
                <td>{$row['fromloc']}</td>
                <td>{$row['destloc']}</td>
                <td>{$row1['cphno']}</td>
                </tr>";
            }
            ?>
                        </tbody>
                    </table>
                </div>
                <div class="new-students">
                    <div class="title">
                        <h2>Driver Account </h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <center><form action="http://localhost/cab_php/menu/temp1.php" method="post">
                    <h2 style="font-weight: bold; margin-top: 75px;">Customer Mail-Id</h2><br>
                    <input type="text" name="usrname" placeholder="Mail ID" required></br><br/>
                    <br><br>
                    
                    <button type="submit">Accept Ride</button>
                    </form></center>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
