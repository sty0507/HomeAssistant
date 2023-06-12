<?php

    $conn = mysqli_connect('localhost', 'root', 'root', 'noc_project');
    $query = "select * from light order by num desc limit 7;";  
    $result = mysqli_query($conn, $query);
    $i=0;
    while($row = mysqli_fetch_assoc($result)){
        $dataset['label'][$i] = $row['date'];
        $dataset['temp'][$i] = $row['data'];
        $i++;
    }
    echo json_encode($dataset);
?>