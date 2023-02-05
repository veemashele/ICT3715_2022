<?php
$title = "Exam Department Calendar";
include('header.php');
?>
<!--banner-->	
<div class="banner">
<h2>
<a href="index.php">Home</a>
<i class="fa fa-angle-right"></i>
<span>Calendar</span>
</h2>
</div>
<!--//banner-->
<!--gallery-->
<div class="calendar">
<div class="custom-calendar-wrap custom-calendar-full">
<div class="custom-header">

<h3 class="custom-month-year">
<span id="custom-month" class="custom-month"> </span>
<span id="custom-year" class="custom-year"> </span>
<nav>
<span id="custom-prev" class="custom-prev"> </span>
<span id="custom-next" class="custom-next"> </span>
<span id="custom-current" class="custom-current" title="Got to current date"></span>
</nav>
<div class="clearfix"> </div>
</h3>
</div>
<div id="calendar" class="fc-calendar-container"> </div>
<div class="clearfix"> </div>

</div>
</div>
<!--//gallery-->
<!---->

<!---->
<link rel="stylesheet" type="text/css" href="../css/calendar.css" />
<link rel="stylesheet" type="text/css" href="../css/custom_1.css" />
<script type="text/javascript" src="../js/jquery.calendario.js"></script>
<script type="text/javascript" src="../js/data.js"></script>
<script type="text/javascript">	
$(function() {

var cal = $( '#calendar' ).calendario( {
onDayClick : function( $el, $contentEl, dateProperties ) {

for( var key in dateProperties ) {
console.log( key + ' = ' + dateProperties[ key ] );
}

},
caldata : codropsEvents
} ),
$month = $( '#custom-month' ).html( cal.getMonthName() ),
$year = $( '#custom-year' ).html( cal.getYear() );

$( '#custom-next' ).on( 'click', function() {
cal.gotoNextMonth( updateMonthYear );
} );
$( '#custom-prev' ).on( 'click', function() {
cal.gotoPreviousMonth( updateMonthYear );
} );
$( '#custom-current' ).on( 'click', function() {
cal.gotoNow( updateMonthYear );
} );

function updateMonthYear() {				
$month.html( cal.getMonthName() );
$year.html( cal.getYear() );
}



});
</script>

<?php
include('footer.php');
?>
