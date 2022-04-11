<!DOCTYPE html>
<h3>this is working with class and function with parameter and variable</h3>
<?php
include_once("../class/classes/json.php");

$jsonEnCodeData = '{"name":"my name is WSLVC-IT","b":2,"c":3}';
$json = new UseJson($jsonEnCodeData);
echo "</br>";
 $json->showName($jsonEnCodeData);
 echo "</br>";

$json->showTest(json_decode($jsonEnCodeData));
?>
</html>
