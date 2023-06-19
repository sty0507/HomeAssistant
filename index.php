<?php
include('header.php');
?>
<section class="main">
    <h1> 서태영의 홈 어시스턴트</h1>
    <img src="./img/siuu.gif" class="siuu">

</section>
<?php
include('footer.php');
?>
<style>
<?php include('style.css');?>

    .siuu{
        height:400px;
        width:650px;
        
        padding-bottom: 100px;
    }
    h1{
        padding-bottom:20px;
    }

    .main{
        display:flex;
        flex-direction: column;
        justify-content:center;
        align-items:center; 
    }
</style>