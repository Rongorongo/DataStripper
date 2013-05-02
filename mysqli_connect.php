<?php # mysqli_connect.php

// This file contains the database access information. 
// This file also establishes a connection to MySQL 
// and selects the database.

// Set the database access information as constants:
DEFINE ('DB_USER', 'datastripper');
DEFINE ('DB_PASSWORD','Dstripper2013!');
DEFINE ('DB_HOST', 'datastripper.db.10137435.hostedresource.com');
DEFINE ('DB_NAME', 'datastripper');

// Make the connection:
$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('<br><br><br>'.'Could not connect to MySQL: ' . mysqli_connect_error() );

?>