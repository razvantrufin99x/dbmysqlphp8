<?php
   include("toppage.php");
?>

<H1> dbmysql </H1>

<?php



$result = $mysqli->query('SHOW DATABASES');
while ($row = $result->fetch_array(MYSQLI_ASSOC)) { 
 print "<a href='database.php?dbname=".$row['Database']."'>".$row['Database']."</a><br>";
 
} 

?>

