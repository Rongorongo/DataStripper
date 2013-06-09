<?php
	require_once ('./mysqli_connect.php'); // Connect to the db. !!!Should be moved to a folder not accessible from the web!!!
	//Grab first the variable from the url. If not there error message this and do not connect to the db.
	$url = $_SERVER['REQUEST_URI'];                                    
    $pattern = "/([\w|\d])+/";
    $string = $url;
    preg_match_all($pattern, $string, $matches);
	$asset = $matches[0][1];
	if($asset == 'oil'){$assetId = "Oil"; $assetH= "oil";}
	if($asset == 'oranges'){$assetId = "Oranges"; $assetH= "oranges";}
	if($asset == 'chicken'){$assetId = "Chicken"; $assetH= "chicken";}
	if($asset == 'wheat'){$assetId = "Wheat"; $assetH= "wheat";}	
	if($asset == 'apple'){$assetId = "AAPL"; $assetH= "apple stock";}
	if($asset == 'rice'){$assetId = "Rice"; $assetH= "rice";}
	if($asset == 'rubber'){$assetId = "rubber"; $assetH= "rubber";}
	if($asset == 'cotton'){$assetId = "cotton"; $assetH= "cotton";}
	if($asset == 'shrimp'){$assetId = "shrimp"; $assetH= "shrimp";}
	if($asset == 'sugar'){$assetId = "sugar"; $assetH= "sugar";}
?>