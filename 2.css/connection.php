<?php

$server     = "shareddb1a.hosting.stackcp.net";
$username   = "cl25-technade60";
$password   = "TtNkDfrz.";
$db         = "cl25-technade60";

//create a connection
$conn = mysqli_connect($server, $username, $password, $db);

//check the connection
if( !$conn ) {
    die( "Connection failed: " .mysqli_connect_error() );
}

?>