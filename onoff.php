<?php include('header.php');?>

<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <section>
        <div class="test">
            <?php
                if(isset($_GET['state'])){
                    echo "<h1>".($_GET['state'] == "1" ? "ON" : "OFF")."</h1>";
                }
            ?>
            <button type="submit" name="toggle" id = "onoff-btn" class = "onoff-btn"><img src="./img/onoffbtn.png" alt=""></button>
        </div>
    </section>
</body>
</html>
<script>
    document.getElementById("onoff-btn").addEventListener("click", function() {
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "http://10.150.151.244/click?param=true", true);
        xhr.send();
    });
</script>


<style>
<?php include('style.css');?>
</style>
<?php
include('footer.php');
?>