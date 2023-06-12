<?php
    date_default_timezone_set('Asia/Seoul');
    $ldata = $_GET['ldata'];
    $hdata = $_GET['hdata'];
    $date = date("Y-m-d H:i:s", time());
    $conn = mysqli_connect('localhost', 'root', 'root', 'noc_project');
    $query = "insert into light(ldata, ldate) values('".$ldata."','".$date."')";
    $query1 = "insert into humi(hdata, hdate) values('".$hdata."','".$date."')";
    $result = mysqli_query($conn, $query);
    $result1 = mysqli_query($conn, $query1);
?>