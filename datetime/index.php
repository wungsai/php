<?php 
echo "<h3>Use Date and Time to be ID</h3>";
$date = date('YmdHisU');
$full= microtime(true)*10000;
$mili = substr($full,-4);
echo "<p>date('YmdHisU')</br>";
echo "{$date}</p>";
echo "<p>microtime(true)*10000<br>";
echo $full;
echo "</p>";
echo "substr(\$full,-4)";
echo "{$mili}";
echo "</p>";
echo "---------------";
echo "<p>";
echo "date(\"YmdHis\") . substr(round(microtime(true) * 100), -2)<br>";
echo date("YmdHis") . substr(round(microtime(true) * 100), -2);
echo "</p>";
echo date("YmdHis") . substr(round(microtime(true) * 100), -2)+1;
echo "</br> --------------------- </br>";
date_default_timezone_set("Asia/Vientiane");
$condition = date("Hi");
echo $condition;

if($condition<=$init)
?>