<!doctype html>  

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>flot.tooltip plugin example page</title>
	<meta name="author" content="@krzysu, myviews.pl">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="../../myac/graphs/graphs/jquery-1.8.3.min.js"></script>
    <!--[if lte IE 8]><script src="../js/excanvas.min.js"></script><![endif]-->
	<script src="../../myac/graphs/js/jquery.flot.js"></script>
	<script src="../../myac/graphs/js/jquery.flot.tooltip.min.js"></script>
	
	<style type="text/css">
		body {font-family: sans-serif; font-size: 16px; margin: 50px; max-width: 800px;}
		h4, ul {margin: 0;}
		#flotTip {white-space: nowrap; border: 1px solid #111; padding: 3px 8px; background:#fff; font-size:12px;}
	</style>
    
</head>

<body>
    <h1>flot.tooltip plugin example page</h1>

    <div id="placeholder" style="width: 825px; height:350px;"></div>

	<script>
	$(function () {

		//var data = [[3, 3], [4, 9], [5, 15], [6, 8], [7, 5], [8, 13], [9, 11], [10, 4], [11, 6], [12, 6], [13, 6], [14, 6], [15, 8] ];
		var data = [[1304301800*1000, 30], [1304388000*1000, 30], [1304474400*1000, 40], [1304553600*1000, 10], [1304640000*1000, 23], [1304726400*1000, 16] ]; 

		var options = {
			colors: ["#BFD7EF"],
			tooltip: true,
			tooltipOpts: {
				content: "<h4>%s</h4><ul><li>X is %x</li><li>Y is %y</li></ul>",
				xDateFormat: "%y-%0m-%0d %H:%M:%S",
				shifts: {
					x: 10,
					y: 20
				},
				defaultTheme: false
			},
			xaxis: {
				mode: "time",
				timeformat: "%y-%0m-%0d",
				minTickSize: [1, "day"]
			},
			grid: {
				backgroundColor: { colors: ["#fff", "#fff"] },
				hoverable: true //IMPORTANT! this is needed for tooltip to work
			}
		};
		
		var plotObj = $.plot($("#placeholder"), [{
			data: data,
			label: "some label",
			bars: { 
				show: true,
				lineWidth: 1,
				fill: true,
				fillColor: { colors: [ { opacity: 0.8 }, { opacity: 0.6 } ] },
				barWidth: 50000*1000,
				//barWidth: 0.8,
				align: 'center',
				horizontal: false
			}	
		}], options);
	});
	</script>

</body>
</html>
