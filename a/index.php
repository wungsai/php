<?php echo "hellow wampire ";
//open windows text file by directory path
$txt = fopen("C:\\xampp\\htdocs\\php\\a\\b\\a.txt", "r");
$s = fgets($txt);
echo "</br>";
echo $s;
fclose($txt);
echo "</br>";

//generate reference number by datetime milisecond
echo date('YmdHis').substr(round(microtime(true)*100),-2); 
echo "</br>";

//show windows directory path
$dir = "/php/a/b/sticker/";
$a = dir(getcwd());

echo "</br>";
$dirPath = $a->path;
$checkFile = scandir($dirPath);
$test1 = "asdf\gfh\dsaf";
$newDir = str_replace("\\","\\\\",$test1,$i);
echo $dirPath;
echo "</br>";
print_r ($checkFile);
echo "</br>";
echo $newDir;
echo "</br>";
echo "replace: {$i}";
echo "</br>";

echo "</br>";
//list all files names here
$use = "{$_SERVER['DOCUMENT_ROOT']}{$dir}";
$test = scandir($use);
print_r($test);
$stickerSet= array();
echo "</br>";
//collect set Name
$setName = array();
foreach($test as $t){
if(!is_numeric(strpos($t,"."))){
    echo "</br> {$t}";
    $setName[] = $t;
}

}
echo "</br>";
print_r($setName);
echo "</br>";
//create set Name for files group
foreach ($setName as $set) {
    $nameSet = array();
    $names = scandir("{$_SERVER['DOCUMENT_ROOT']}/php/a/b/sticker/{$set}");
    foreach ($names as $name) {
       if(is_numeric(strpos($name,".svg"))) {
           echo $name;
           $nameSet[] = $name;
        echo "</br>";}
       
    }

    //collected files name in Set Name
    $stickerSet[] = [$set => $nameSet];
}
echo "</br></br></br></br></br></br></br></br>Use</br></br></br></br></br>";
var_dump($stickerSet);

$j=json_encode($stickerSet);
echo "</br>";
var_dump($j);
?>