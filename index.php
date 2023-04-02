<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Area of a Trapezoid">
    <meta name="keywords" content="immaculata, ICS2O">
    <meta name="author" content="Noah Smith">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Title -->
    <title>Area of a Trapezoid, in PHP</title>
  </head>
  <body>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Area of a Trapezoid, in PHP</h1>";
		?>

		<!-- form to get the base and height from the user -->
    <form action="./results.php" method="post" target="results">
      <label for=lblBigBase">Big base (cm):</label>
      <input type="text" id="base" placeholder="Enter the big base (cm)" name="big-base">
      <br>
      <br>
      <label for="lblSmallBase">Small base (cm):</label>
      <input type="text" id="small-base" placeholder="Enter the small base (cm)" name="small-base">
      <br>
      <br>
      <label for="lblHeight">Height (cm):</label>
      <input type="text" id="height" placeholder="Enter the height (cm)" name="height">
      <br>
      <br>
      <input type="submit" value="Calculate Area">
		</form>

		<!-- iframe for the results to show on the web page. -->
		<iframe id="results" name="results">			
			The area of the trapezoid is" + $area + cm<sup>2</sup>
    </iframe>
  </body>
</html>