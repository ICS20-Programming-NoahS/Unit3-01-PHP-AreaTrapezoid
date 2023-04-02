<?php
	// get the base and height from the textfields
	$bigBase = $_POST["big-base"];
  $smallBase = $_POST["small-base"];
	$height = $_POST["height"];

	// calculate the area
	$area = ($bigBase + $smallBase)/2 * $height;
?>
<h3>Results:</h3>
The area of the trapezoid is <?php echo "$area" ?>cm<sup>2</sup>.