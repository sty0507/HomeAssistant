<?php
include('header.php');
$conn = mysqli_connect('localhost','root','root','noc_project');
$query = "select * from light order by num desc limit 10";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
$i = 0;
while($row = mysqli_fetch_assoc($result))
    {
        // echo $row['data'];
        // echo "<br>";
        $mydata[$i] = $row['ldata'];
        $mydate[$i] = $row['ldate'];
        $i ++;
    }
include ('graph.php');

include('footer.php');
?>