<?php
   include("toppage.php");
?>

<H1> dbmysql tables</H1>

<?php
$dbname = $_GET['dbname'];



$sql = "SHOW TABLES FROM $dbname";
$result = $mysqli->query($sql);



while ($row = $result->fetch_array(MYSQLI_NUM)) {
   
     print "<a href='tables.php?dbname=".$dbname."&tablename=".$row['0']."'>".$row['0']."</a><br>";
}

?>

