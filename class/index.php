<!DOCTYPE html>
<html>
<header>
<h3>this is working with class and function with parameter and variable</h3>
</header>
<body>
<?php
include_once("classes/json.php");

$jsonEnCodeData = '{"name":"my name is WSLVC-IT","b":2,"c":3}';
$json = new UseJson($jsonEnCodeData);
echo "</br>";
echo "<h4>include json.php</h4>";
 $json->showName($jsonEnCodeData);
 echo "</br>";

$json->showTest(json_decode($jsonEnCodeData));
echo "</br>";

$check=NULL;

var_dump(isset($check)) ;
echo "</br>";
$object = (object)["a"=>"first","b"=>"second"];
echo $object->b;
echo "</br>";
$arr = ["a"=>2, 2=>2,"2"=>"two"];
echo $arr["2"];
echo $arr[2];
echo "</br>";
echo count($arr) ;
?>
</br>
<button id="class_init_value">Using Class with init values</button>
<button id="class_argument">Using Class with argument</button>
<script>
var list = document.querySelectorAll("button");
list.forEach((button)=>{
    button.addEventListener("click",()=>{window.location.href=window.location.href+button.id+".php"});
});

</script>
</body>
</html>
