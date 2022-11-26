<?php

 //mysql_connect("localhost","root","");
 mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//$mysqli = new mysqli("localhost",  "root" );
 mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

 
 
  $dbhost  = 'localhost';    // Unlikely to require changing
  $dbname  = 'id19220320_fotbal';   // Modify these...
  $dbuser  = 'id19220320_razvan99x';   // ...variables according
  $dbpass  = 'C<7H<lCBdx-&)$vI';   // ...to your installation

  //$appname = "Robin's Nest"; // ...and preference

  $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
 ?>