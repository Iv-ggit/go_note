<?php
	$name = "World";
	$data=date("Y-m-d");
	$czas=date("H:i");
	$headerNumber = 1;
echo "<h1>Hello, $name!</h1>";
echo "<h1>Today is " . date("Y.m.d") . "</h1><br>";
	while ($headerNumber <= 6) {
echo "<h$headerNumber>Dzień dobry, $name!</h$headerNumber>";
	$headerNumber = $headerNumber + 1;
	}
	
	
	
