<?php
include('header.php');
?>
<link rel="stylesheet" href="style.css">
<html>
    <body>
        <section>
            <form method=post action=table.php>
                <div class="ra">
                    <?php
                        echo "<div>humi<input type=\"radio\" name=\"ra\" value=\"humi\"></div>";
                        echo "<div>light<input type=\"radio\" name=\"ra\" value=\"light\"></div>";
                        echo "<input type=submit value=확인>";
                    ?>
                </div>
                
            </form>
            <div class="test">
                <?php
                    if (isset($_POST['ra'])){
                        if ($_POST['ra'] == "humi"){
                            include('humi-tbl.php');
                        }else{
                            include('light-tbl.php');
                        }
                    }
                    
                ?>
            </div>
        </section>
    </body>
</html>
<?php
include('footer.php');
?>