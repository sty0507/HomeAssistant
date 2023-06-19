<?php
    $conn = mysqli_connect('localhost','root','root','noc_project');
    $query = "select * from light order by num desc limit 15";
    
    $result = mysqli_query($conn, $query);
    echo "<h1>조도값</h1>";
    echo "<input type=text value=\"light\" name=\"tbl\" hidden/>";
    echo "<table border=1 width=500>";
    echo "<tr>";
    echo "<th>번호</th><th>데이터(밝기)</th><th>시간</th><th>삭제</th>";
    echo "</tr>";

    while($row = mysqli_fetch_assoc($result))
    {   
        echo "<tr>";
        echo "<td>".$row['num']."</td><td>".$row['ldata']."</td><td>".$row['ldate']."</td><td><a href=\"./delete.php?tbl=light&num=".$row['num']."\">삭제</a></td>";
        echo "</tr>";
    }  
?>