<?php
    $conn = mysqli_connect('localhost','root','root','noc_project');
    $query = "select * from humi limit 15";
    
    $result = mysqli_query($conn, $query);
    echo "<h1>온습도값</h1>";
    echo "<table border=1 width=500>";
    echo "<input type=text value=\"humi\" name=\"tbl\" hidden/>";
    echo "<tr>";
    echo "<th>번호</th><th>데이터(온습도)</th><th>시간</th><th>삭제</th>";
    echo "</tr>";

    while($row = mysqli_fetch_assoc($result))
    {   
        echo "<tr>";
        echo "<td>".$row['num']."</td><td>".$row['hdata']."</td><td>".$row['hdate']."</td><td><a href=\"./delete.php?tbl=humi&num=".$row['num']."\">삭제</a></td>";
        echo "</tr>";
    }  
?>