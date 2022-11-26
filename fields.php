<?php
   include("toppage.php");
?>

<H1> dbmysql record</H1>

<?php
$field = $_GET['field'];
$dbname = $_GET['dbname'];
$tablename = $_GET['tablename'];
$n = $_GET['n'];
 $mysqli->select_db($dbname);
print $dbname;
print ">>";
print $tablename;
print ">>";
print $field;
print ">>";
print $n;
print "<br>";

 
$sql = "SELECT * FROM $tablename ";
$result = $mysqli->query($sql);




while ($row = $result->fetch_row()) {
   for($i = 0;$i<$n;$i++){
     print "<a href='records.php?field=".$row[$i]."'>".$row[$i]."</a> ";
     }
     print "<br>";
}


?>

