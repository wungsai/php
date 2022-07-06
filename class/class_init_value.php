<?php
include_once "classes/init_value.php";

echo "<!DOCTYPE html><html><header align='center'>";
echo"<h2>Init Values</h2></header><body align='center'>";
$load = new InitValue();
echo $load->check()*20000;
echo "</body></html>";
?>