
<?php
$title = "Exam Department Dashboard";
include('header.php');
?>

<script type="text/javascript">
//STEP 2 - Chart Data
const chartData = [{
"label": "MAT2612",
"value": "290"
}, {
"label": "ICT3722",
"value": "260"
}, {
"label": "CHE2613",
"value": "180"
}, {
"label": "ELE2561",
"value": "140"
}, {
"label": "ICT1117",
"value": "115"
}, {
"label": "ENG1017",
"value": "100"
}, {
"label": "ENG1012",
"value": "30"
}, {
"label": "ICT1120",
"value": "30"
}];

//STEP 3 - Chart Configurations
const chartConfig = {
type: 'column2d',
renderAt: 'chart-container',
width: '100%',
height: '700',
dataFormat: 'json',
dataSource: {
// Chart Configuration
"chart": {
"caption": "Top Module Submissions",
"xAxisName": "Module",
"yAxisName": "File Uploads",
"numberSuffix": "",
"theme": "candy",
},
// Chart Data
"data": chartData
}
};
FusionCharts.ready(function(){
var fusioncharts = new FusionCharts(chartConfig);
fusioncharts.render();
});

</script>

<!--banner-->	
<div class="banner">
<h2>
<a href="index.html">Home</a>
<i class="fa fa-angle-right"></i>
<span>MIS Report 2</span>
</h2>
</div>
<!--//banner-->

<div class="blank">
<div class="blank-page">
<div id="chart-container">FusionCharts XT will load here!</div>
</div>
</div>

<!---->

<?php
include('footer.php');
?>