<?php

$filename = 'tea.csv';
$line = file($filename);
$nbLines = count($line);
for($i = 0 ; $i < $nbLines; $i++) {
	$lineTab[$i] = explode(";", $line[$i]);
	$name[$i] = $lineTab[$i][0];
	$src[$i] = $lineTab[$i][1];
	$price[$i] = $lineTab[$i][2];
}

$template = 'listing';
include 'templates/layout.phtml';