<?php
/* 
 CONNECT-DB.PHP
 Allows PHP to connect to your database
*/

 // Database Variables (edit with your own server information)
 $server = 'db2330.perfora.net';
 $user = 'dbo320449344';
 $pass = 'nikonn70';
 $db = 'db320449344';
 
 // Connect to Database
 $connection = mysql_connect($server, $user, $pass) 
 or die ("Could not connect to server ... \n" . mysql_error ());
 mysql_select_db($db) 
 or die ("Could not connect to database ... \n" . mysql_error ());


?>