  <!--Sidebar Menu End Here-->
      <div class="pageContent innerpg"> 
        <!--Dashboard Section Start Here-->
        <div class="dashboardwrapper">
			<div class="row clearfix">
				<div class="col-sm-6 col-md-6">
					<div class="graphbox box1 clearfix">
						<div class="graphtext">
							<h5>Total Interviews</h5>
							<h3>100</h3>
						</div>
						<div class="graph">
							<div id="chartContainer1" style="height: 300px; width: 100%;"></div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6">
					<div class="row clearfix">
						<div class="col-sm-12 col-md-12">
							<div class="graphbox box2 clearfix">
								<div class="graphtext">
									<h5>Pending Interviews</h5>
									<h3>20</h3>
								</div>
								<div class="graph">
									<div id="chartContainer2" style="height: 100px; width: 100%;"></div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-12">
							<div class="graphbox box3 clearfix">
								<div class="graphtext">
									<h5>Total Spent Time</h5>
									<h3>5 Hours</h3>
								</div>
								<div class="graph">
									<div id="chartContainer3" style="height: 100px; width: 100%;"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-sm-6 col-md-6">
					<div class="graphbox box4 clearfix">
						<div class="graphtext">
							<h5>Total Hire</h5>
							<h3>10</h3>
						</div>
						<div class="graph">
							<div id="chartContainer4" style="height: 100px; width: 100%;"></div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6">
					<div class="graphbox box5 clearfix">
						<div class="graphtext">
							<h5>Total Strong Hire</h5>
							<h3>10</h3>
						</div>
						<div class="graph">
							<div id="chartContainer5" style="height: 100px; width: 100%;"></div>
						</div>
					</div>
				</div>
			</div>
				<div class="row clearfix">
				<div class="col-sm-6 col-md-6">
					<div class="graphbox box6 clearfix">
						<div class="graphtext">
							<h5>Total Rejected</h5>
							<h3>10</h3>
						</div>
						<div class="graph">
							<div id="chartContainer6" style="height: 100px; width: 100%;"></div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6">
					<div class="graphbox box7 clearfix">
						<div class="graphtext">
							<h5>Total Hold</h5>
							<h3>10</h3>
						</div>
						<div class="graph">
							<div id="chartContainer7" style="height: 100px; width: 100%;"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!--Dashboard Section End Here--> 
      </div>
    </div>
  <!--Page Content View End Here--> 
  
</div>
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
</body>
<script>
window.onload = function () {

var options = {
	animationEnabled: true,
	exportEnabled: true,
	title: {
		text: ""
	},
	data: [{
		type: "pyramid",
		indexLabelFontSize: 18,
		showInLegend: true,
		legendText: "{indexLabel}",
		toolTipContent: "<b>{indexLabel}:</b> {y}%",
		dataPoints: [
			{ y: 30, indexLabel: "" },
			{ y: 30, indexLabel: "" },
			{ y: 15, indexLabel: "" },
			{ y: 13, indexLabel: "" },
			{ y: 12, indexLabel: "" }
		]
	}]
};
$("#chartContainer1").CanvasJSChart(options);



var options = {
	animationEnabled: true,  
	title:{
		text: ""
	},
	axisY: {
		title: "Revenue in USD",
		valueFormatString: "#0,,.",
		suffix: "mn",
		prefix: "$"
	},
	data: [{
		type: "area",
		markerSize: 5,
		xValueFormatString: "YYYY",
		yValueFormatString: "$#,##0.##",
		dataPoints: [
			{ x: new Date(2000, 0), y: 2289000 },
			{ x: new Date(2001, 0), y: 2830000 },
			{ x: new Date(2002, 0), y: 1009000 },
			{ x: new Date(2003, 0), y: 1840000 },
			{ x: new Date(2004, 0), y: 1396000 },
			{ x: new Date(2005, 0), y: 2613000 },
			{ x: new Date(2006, 0), y: 1821000 },
			{ x: new Date(2007, 0), y: 1000000 },
			{ x: new Date(2008, 0), y: 1397000 },
			{ x: new Date(2009, 0), y: 1506000 },
			{ x: new Date(2010, 0), y: 1798000 },
			{ x: new Date(2011, 0), y: 2386000 },
			{ x: new Date(2012, 0), y: 4704000},
			{ x: new Date(2013, 0), y: 4926000 },
			{ x: new Date(2014, 0), y: 1394000 },
			{ x: new Date(2015, 0), y: 972000 },
			{ x: new Date(2016, 0), y: 1140000 }
		]
	}]
};
$("#chartContainer2").CanvasJSChart(options);



var options = {
	animationEnabled: true,  
	title:{
		text: ""
	},
	axisX: {
		valueFormatString: "MMM"
	},
	axisY: {
		title: "Sales (in USD)",
		prefix: "$"
	},
	data: [{
		yValueFormatString: "$#,###",
		xValueFormatString: "MMMM",
		type: "spline",
		dataPoints: [
			{ x: new Date(2017, 0), y: 25060 },
			{ x: new Date(2017, 1), y: 27980 },
			{ x: new Date(2017, 2), y: 33800 },
			{ x: new Date(2017, 3), y: 49400 },
			{ x: new Date(2017, 4), y: 40260 },
			{ x: new Date(2017, 5), y: 33900 },
			{ x: new Date(2017, 6), y: 48000 },
			{ x: new Date(2017, 7), y: 31500 },
			{ x: new Date(2017, 8), y: 32300 },
			{ x: new Date(2017, 9), y: 42000 },
			{ x: new Date(2017, 10), y: 52160 },
			{ x: new Date(2017, 11), y: 49400 }
		]
	}]
};
$("#chartContainer3").CanvasJSChart(options);



//Better to construct options first and then pass it as a parameter
var options = {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light2",
	title:{
		text: ""
	},
	axisY:{
		title: "Temperature (°C)",
		suffix: "°C"
	},
	data: [{
		type: "rangeColumn",
		toolTipContent: "<b>{x}</b><br/>Minimum: {y[0]}°C<br/>Maximum: {y[1]}°C",
		dataPoints: [
			{ x: new Date(2015, 00, 01), y: [13.51, 24.58] },
			{ x: new Date(2015, 01, 01), y: [15.55, 26.89] },
			{ x: new Date(2015, 02, 01), y: [17.99, 29.07] },
			{ x: new Date(2015, 03, 01), y: [21.18, 31.87] },
			{ x: new Date(2015, 04, 01), y: [23.54, 34.09] },
			{ x: new Date(2015, 05, 01), y: [23.82, 32.48] },
			{ x: new Date(2015, 06, 01), y: [24.28, 31.88] },
			{ x: new Date(2015, 07, 01), y: [23.82, 31.52] },
			{ x: new Date(2015, 08, 01), y: [22.52, 31.55] },
			{ x: new Date(2015, 09, 01), y: [20.68, 31.04] },
			{ x: new Date(2015, 10, 01), y: [17.81, 28.10] },
			{ x: new Date(2015, 11, 01), y: [14.75, 25.67] }
		]
	}]
};

$("#chartContainer4").CanvasJSChart(options);


//Better to construct options first and then pass it as a parameter
var options = {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light2",
	title:{
		text: ""
	},
	axisY:{
		title: "Temperature (°C)",
		suffix: "°C"
	},
	data: [{
		type: "rangeColumn",
		toolTipContent: "<b>{x}</b><br/>Minimum: {y[0]}°C<br/>Maximum: {y[1]}°C",
		dataPoints: [
			{ x: new Date(2015, 00, 01), y: [13.51, 24.58] },
			{ x: new Date(2015, 01, 01), y: [15.55, 26.89] },
			{ x: new Date(2015, 02, 01), y: [17.99, 29.07] },
			{ x: new Date(2015, 03, 01), y: [21.18, 31.87] },
			{ x: new Date(2015, 04, 01), y: [23.54, 34.09] },
			{ x: new Date(2015, 05, 01), y: [23.82, 32.48] },
			{ x: new Date(2015, 06, 01), y: [24.28, 31.88] },
			{ x: new Date(2015, 07, 01), y: [23.82, 31.52] },
			{ x: new Date(2015, 08, 01), y: [22.52, 31.55] },
			{ x: new Date(2015, 09, 01), y: [20.68, 31.04] },
			{ x: new Date(2015, 10, 01), y: [17.81, 28.10] },
			{ x: new Date(2015, 11, 01), y: [14.75, 25.67] }
		]
	}]
};

$("#chartContainer5").CanvasJSChart(options);


var options = {
	animationEnabled: true,  
	title:{
		text: ""
	},
	axisX: {
		valueFormatString: "MMM"
	},
	axisY: {
		title: "Sales (in USD)",
		prefix: "$"
	},
	data: [{
		yValueFormatString: "$#,###",
		xValueFormatString: "MMMM",
		type: "spline",
		dataPoints: [
			{ x: new Date(2017, 0), y: 25060 },
			{ x: new Date(2017, 1), y: 27980 },
			{ x: new Date(2017, 2), y: 33800 },
			{ x: new Date(2017, 3), y: 49400 },
			{ x: new Date(2017, 4), y: 40260 },
			{ x: new Date(2017, 5), y: 33900 },
			{ x: new Date(2017, 6), y: 48000 },
			{ x: new Date(2017, 7), y: 31500 },
			{ x: new Date(2017, 8), y: 32300 },
			{ x: new Date(2017, 9), y: 42000 },
			{ x: new Date(2017, 10), y: 52160 },
			{ x: new Date(2017, 11), y: 49400 }
		]
	}]
};
$("#chartContainer6").CanvasJSChart(options);


var options = {
	animationEnabled: true,  
	title:{
		text: ""
	},
	axisX: {
		valueFormatString: "MMM"
	},
	axisY: {
		title: "Sales (in USD)",
		prefix: "$"
	},
	data: [{
		yValueFormatString: "$#,###",
		xValueFormatString: "MMMM",
		type: "spline",
		dataPoints: [
			{ x: new Date(2017, 0), y: 25060 },
			{ x: new Date(2017, 1), y: 27980 },
			{ x: new Date(2017, 2), y: 33800 },
			{ x: new Date(2017, 3), y: 49400 },
			{ x: new Date(2017, 4), y: 40260 },
			{ x: new Date(2017, 5), y: 33900 },
			{ x: new Date(2017, 6), y: 48000 },
			{ x: new Date(2017, 7), y: 31500 },
			{ x: new Date(2017, 8), y: 32300 },
			{ x: new Date(2017, 9), y: 42000 },
			{ x: new Date(2017, 10), y: 52160 },
			{ x: new Date(2017, 11), y: 49400 }
		]
	}]
};
$("#chartContainer7").CanvasJSChart(options);
}
</script>
</html>
