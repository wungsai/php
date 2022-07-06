<?php 
class Argument{
    var $data="zero";
    function __construct($data)
    {
        $this->data= json_encode($data);
    }
    function check(){
        echo "<p>argument: {$this->data}</p>";
    }
}
?>