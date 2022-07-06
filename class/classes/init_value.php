<?php 
include_once "load.php";
class InitValue{
    public $percent,$point ;
     
     function __construct()
    {
        $load = new Load();
        $this->percent=$load->loadPercent();
    }

    

    public function check(){
        if(empty($this->percent)){
            echo "percent is empty";
            return;
        }else{
            return $this->percent;
        }
    }
}
?>