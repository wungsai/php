<?php
include_once "classes/argument.php";

echo "<!DOCTYPE html><html><header align='center'>";
echo"<h2>With Argument</h2></header><body align='center'>";
$data = (object)["demo"=>"go"];
$load = new Argument($data);
$load->check();
echo "</body></html>";
?>