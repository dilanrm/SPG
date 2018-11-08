<br><br>
<div id="chartContainer"></div>

<script src="assets/js/fusioncharts.js"></script>
<script src="assets/js/themes/fusioncharts.theme.carbon.js"></script>
<script src="assets/js/themes/fusioncharts.theme.zune.js"></script>
<script src="assets/js/themes/fusioncharts.theme.ocean.js"></script>
<script src="assets/js/themes/fusioncharts.theme.fint.js"></script>
<script type="text/javascript">
	FusionCharts.ready(function () {
		var chart = new FusionCharts({
			renderAt: 'chartContainer',
			type: 'line',
			width: '100%',
			height: '500',
			dataFormat: 'jsonurl',
			dataSource: 'chart data.php'
		});
		chart.render();
	});
</script>