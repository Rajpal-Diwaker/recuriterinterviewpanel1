<!--Sidebar Menu End Here -->
<div class="pageContent innerpg">
	<!--Dashboard Section Start Here-->
	<div class="dashboardwrapper">
		<div class="row clearfix">
			<div class="col-sm-6 col-md-6">
				<div class="graphbox box1 clearfix">
					<div class="graphtext">
						<h5>Total Interviews</h5>
						<h3>
							<?php echo $totalInterviewT; ?>
						</h3>
					</div>
					<div class="graph">
						<div id="chartContainer1" style="height: 300px; width: 100%;"></div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-6">
				<div class="row clearfix">
					<div class="col-sm-12 col-md-12">
						<div class="graphbox box1 clearfix">
							<div class="graphtext">
								<h5>Pending Interviews</h5>
								<h3><?php echo $totalPendingInterviewT; ?></h3>
							</div>
							<div class="graph">
								<div id="chartContainer2" style="height: 300px; width: 100%;"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row clearfix">
			<div class="col-sm-6 col-md-6">
				<div class="graphbox box1 clearfix">
					<div class="graphtext">
						<h5>Total Hire </h5>
						<h3>
							<?php echo $totalHireInterviewT; ?>
						</h3>
					</div>
					<div class="graph">
						<div id="chartContainer4" style="height: 300px; width: 100%;"></div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-6">
				<div class="graphbox box1 clearfix">
					<div class="graphtext">
						<h5>Total Strongly Hire </h5>
						<h3>
							<?php echo $totalStronglyInterviewT; ?>
						</h3>
					</div>
					<div class="graph">
						<div id="chartContainer5" style="height: 300px; width: 100%;"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="row clearfix">
			<div class="col-sm-6 col-md-6">
				<div class="graphbox box1 clearfix">
					<div class="graphtext">
						<h5>Total Rejected </h5>
						<h3><?php echo $totalRejectedInterviewT; ?></h3>
					</div>
					<div class="graph">
						<div id="chartContainer6" style="height: 300px; width: 100%;"></div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-6">
				<div class="graphbox box1 clearfix">
					<div class="graphtext">
						<h5>Total Hold </h5>
						<h3><?php echo $totalHoldInterviewT; ?></h3>

					</div>
					<div class="graph">
						<div id="chartContainer7" style="height: 300px; width: 100%;"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

</div>
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</body>
<script type="text/javascript">
	google.charts.load('visualization', "1", {
		packages: ['corechart']
	});

	function TotalLiveChart() {
		<?php $dataPoints = $dataPoints; ?>
		var options = {
			animationEnabled: true,
			exportEnabled: true,
			data: [{
				type: "pyramid",
				indexLabelFontSize: 10,
				legendText: "{indexLabel}",
				dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
			}]
		};
		$("#chartContainer1").CanvasJSChart(options);
	}

	function BarChart() {
		<?php $dataPoints = $dataPoints2; ?>
		var data = google.visualization.arrayToDataTable([
			['Date', ''],
			<?php
			foreach ($dataPoints as $row) {
				echo "['" . $row['y'] . "'," . $row['x'] . "],";
			}
			?>
		]);

		var options = {
			is3D: true,
		};
		var chart = new google.visualization.BarChart(document.getElementById('chartContainer2'));
		chart.draw(data, options);
	}

	function TotalHireChart() {
		<?php $dataPoints = $dataPoints3; ?>
		var data = google.visualization.arrayToDataTable([
			['Profile', ''],
			<?php
			foreach ($dataPoints as $row) {
				echo "['" . $row['y'] . "'," . $row['x'] . "],";
			}
			?>
		]);

		var options = {
			is3D: true,
		};
		var chart = new google.visualization.BarChart(document.getElementById('chartContainer4'));
		chart.draw(data, options);
	}

	function TotalRejectedChart() {
		<?php $dataPoints = $dataPoints4; ?>
		var options = {
			animationEnabled: true,
			exportEnabled: true,
			data: [{
				type: "pyramid",
				indexLabelFontSize: 10,
				legendText: "{indexLabel}",
				dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
			}]
		};
		$("#chartContainer6").CanvasJSChart(options);
	}

	function TotalStrongHireChart() {
		<?php $dataPoints = $dataPoints5; ?>
		var options = {
			animationEnabled: true,
			exportEnabled: true,
			data: [{
				type: "pyramid",
				indexLabelFontSize: 10,
				legendText: "{indexLabel}",
				dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
			}]
		};
		$("#chartContainer5").CanvasJSChart(options);
	}


	function TotalHoldChart() {
		<?php $dataPoints = $dataPoints6; ?>
		var data = google.visualization.arrayToDataTable([
			['Date', ''],
			<?php
			foreach ($dataPoints as $row) {
				echo "['" . $row['indexLabel'] . "'," . $row['y'] . "],";
			}
			?>
		]);

		var options = {
			is3D: true,
		};
		var chart = new google.visualization.BarChart(document.getElementById('chartContainer7'));
		chart.draw(data, options);
	}
	window.onload = function() {
		BarChart();
		TotalLiveChart();
		TotalHireChart();
		TotalStrongHireChart();
		TotalRejectedChart();
		TotalHoldChart();
	}
</script>

</html>