<?php

foreach (glob("classes/*.php") as $file) {
    include_once($file);
}

class UseJson
{
    var $test1 = true;
    var $data;
    
    var $test2 = 1000;
    //  var $json = json_decode($data);
    function showName($data)
    {
        $json = json_decode($data);
        echo $json->name;
        echo "</br>";
        echo $this->test2;
    }

    function showTest($data)
    {
        $test = new Test();
        $test->showTest($data);
    }
}
