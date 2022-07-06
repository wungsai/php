<?php 
echo "<h3>Use Date and Time to be ID</h3>";
$date = date('YmdHisU');
$full= microtime(true)*10000;
$mili = substr($full,-4);
echo "{$date}";
echo "</br>";
echo $full;
echo "</br>";
echo "{$mili}";
echo "</br>";
echo isset($mili);
echo "</br>";
?>