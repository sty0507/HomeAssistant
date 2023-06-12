<?php
    $conn = mysqli_connect('localhost','root','root','noc_project');
    $tbl = $_GET['tbl'];
    if($tbl == "light"){
        $query = "delete from light where num = ".$_GET["num"];
    }
    else{
        $query = "delete from humi where num = ".$_GET["num"];
    }
    $result = mysqli_query($conn, $query);
    if($result){
        echo "성공!";
    }
    else{
        echo "실패!";
    }
?>
<meta http-equiv = "refresh" content="0; url = table.php">