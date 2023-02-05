<?php
$title = "MIS Report 1";
include('header.php');
?>

<script>
const dataSource = {
chart: {
caption: "Modules with Most registered students",
subcaption: "(With Group Values)",
numbersuffix: " Students",
yaxisname: "No of registered (students)",
theme: "candy",
plottooltext: "No of $label in $seriesName is <b>$dataValue</b>"
},
categories: [
{
category: [
{
label: "ICT"
},
{
label: "ENG"
},
{
label: "CHE"
},
{
label: "Others"
}
]
}
],
dataset: [
{
seriesname: "1st Year",
data: [
{
value: "91",
errorvalue: "81"
},
{
value: "111",
errorvalue: "100"
},
{
value: "91",
errorvalue: "81"
},
{
value: "91",
errorvalue: "81"
}
]
},
{
seriesname: "2nd Year",
data: [
{
value: "116",
errorvalue: "81"
},
{
value: "111",
errorvalue: "100"
},
{
value: "91",
errorvalue: "81"
},
{
value: "80",
errorvalue: "81"
}
]
},
{
seriesname: "3rd Year",
data: [
{
value: "119",
errorvalue: "102"
},
{
value: "103",
errorvalue: "90"
},
{
value: "110",
errorvalue: "97"
},
{
value: "116",
errorvalue: "90"
}
]
}
]
};

FusionCharts.ready(function() {
var myChart = new FusionCharts({
type: "errorbar2d",
renderAt: "chart-container",
width: "100%",
height: '700',
dataFormat: "json",
dataSource
}).render();
});

</script>


<!--banner-->	
<div class="banner">
<h2>
<a href="index.php">Home</a>
<i class="fa fa-angle-right"></i>
<span>MIS Report 1</span>
</h2>
</div>
<!--//banner-->
<!--faq-->
<div class="blank">
<div class="blank-page">
<div id="chart-container"></div>
</div>
</div>
<!---->

<?php
include('footer.php');
?>