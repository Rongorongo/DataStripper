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
	/* 
	catch..
		https://docs.google.com/spreadsheet/formResponse?formkey=dG5FOXY2RXpLMERiUllFYTdjUllVb2c6MQ&ifq =
		entry.0.single Error Message
		entry.1.single DataStripper.com
		entry.2.single An error occurred on the chart page.
	}	  */
?>