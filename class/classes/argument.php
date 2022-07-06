<?php 
class Argument{
    var $data;
    function __construct($data)
    {
        $this->data= json_encode($data);
    }
    function check(){
        echo "<p>argument: {$this->data}</p>";
    }
}
?>