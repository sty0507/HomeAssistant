<html>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js"></script>
<script type="text/javascript" charset="utf-8" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
</head>
<section style = "display: flex; justify-content: center; align-items: center;
  flex-direction: column;">
    <h1 style = "height:15vh;">조도값의 변화</h1>
    <div style="width:800px;">
        <canvas id="line1"></canvas>
    </div>
</section>
<script>
var ctx = document.getElementById('line1').getContext('2d');
var chart = new Chart(ctx, {
	type: 'line',
	data: {
		labels: <?php echo json_encode($mydate);?>,
		datasets: [
				{
					label: 'Data',
					backgroundColor: 'transparent',
					borderColor: "red",
					data: <?php echo json_encode($mydata); ?>
				},
		]
	},
	options: {}
});
</script>
<?php
include('footer.php');
?>
</html>