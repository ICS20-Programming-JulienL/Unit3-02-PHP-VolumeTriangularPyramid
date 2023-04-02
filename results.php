<?php
	// get base 1, base 2, and height from user input
	$base1 = $_POST["prism-base-1"];
	$base2 = $_POST["prism-base-2"];
  $height = $_POST["prism-height"];

	// calculate the volume
	$volume= $base1*$base2*$height*(1/6);
  $roundedVolume= round($volume, 2);
?>
<center>
  <!--Display results-->
  <h3>Results:</h3>
<?php echo "The volume of your right triangular pyramid prism is "."$roundedVolume"."cm<sup>3</sup>."; ?>
</center>