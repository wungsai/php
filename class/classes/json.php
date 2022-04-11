<?php 
include_once("test.php");
class UseJson {
     var $data;
    //  var $json = json_decode($data);
function showName($data) {
     $json = json_decode($data);
    echo $json->name;
}

function showTest($data) {
     $test = new Test();
    $test->showTest($data);
}

}