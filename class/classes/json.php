<?php 
class UseJson {
     var $data;
    //  var $json = json_decode($data);
function showName($data) {
     $json = json_decode($data);
    echo $json->name;
}


}