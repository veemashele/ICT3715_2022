<?php
$title = "Exam Department Dashboard";
include('header.php');
?>

<script type="text/javascript">
const dataSource = {
chart: {
caption: "Top 5 Modules",
subcaption: "Lecturers = Students",
enablesmartlabels: "1",
showlabels: "1",
numbersuffix: " Marks",
usedataplotcolorforlabels: "1",
plottooltext: "$label, <b>$value</b> Marks",
theme: "candy"
},
data: [
{
label: "ICT15111",
value: "290"
},
{
label: "AST2652",
value: "260"
},
{
label: "ENG1017",
value: "180"
},
{
label: "ICT2612",
value: "140"
},
{
label: "MAT2612",
value: "115"
}
]
};

FusionCharts.ready(function() {
var myChart = new FusionCharts({
type: "doughnut3d",
renderAt: "chart-container",
width: "100%",
height: '400',
dataFormat: "json",
dataSource
}).render();
});


</script>

<!--banner-->	
<div class="banner">
<h2>
<a href="index.html">Home</a>
<i class="fa fa-angle-right"></i>
<span>MIS Report 3</span>
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