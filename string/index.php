<?php

echo "<!DOCTYPE html><html><header align='center'>";
echo"<h2>String Functions</h2></header><body align='center'>";
$string = "This is Test text";
echo "<h4>{$string}</h4>";
echo "<p>";
echo "<p>function 1: find string index position</p>";
echo "using strpos(\$text, 'Test')<br>result: ";
echo strpos($string,"Test");
echo "<p>using stripos()<br> result: ";
echo stripos($string,"Test");
echo "</p>";
echo "<p>using strstr()<br> result: ";
echo strstr($string,"Test");
echo "</p>";
echo "<p>using stristr()<br> result: ";
echo stristr($string,"Test");
echo "</p>";
echo "</p>";
echo "</body></html>";
?>