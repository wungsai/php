<?php echo "this is working with directory and files ";
//open windows text file by directory path
$txt = fopen("C:\\xampp\\htdocs\\php\\directory\\b\\a.txt", "r");
$s = fgets($txt);
echo "</br>";
echo $s;
fclose($txt);
echo "</br>";

//generate reference number by datetime milisecond
echo date('YmdHis') . substr(round(microtime(true) * 100), -2);
echo "</br>";

//show windows directory path
$dir = "/php/directory/b/sticker/";
$a = dir(getcwd());

echo "</br>";
$dirPath = $a->path;
$checkFile = scandir($dirPath);
$test1 = "asdf\gfh\dsaf";
$newDir = str_replace("\\", "\\\\", $test1, $i);
echo $dirPath;
echo "</br>";
// print_r($checkFile);
echo "</br>";
echo $newDir;
echo "</br>";
echo "replace: {$i}";
echo "</br>";

echo "</br>";
//list all files names here
$use = "{$_SERVER['DOCUMENT_ROOT']}{$dir}";
$test = scandir($use);
// print_r($test);
$stickerSet = array();
echo "</br>";
//collect set Name
$setName = array();
$setValues = "";
foreach ($test as $t) {
    if (!is_numeric(strpos($t, "."))) {
        // echo "</br> {$t}";
        $setName[] = $t;
        $setValues = "{$setValues}('{$t}'),";
    }
}
echo "</br> set Values:  ";
// print_r($setValues);
echo "</br> New set Values:  ";
$setValues = substr($setValues, 0, strlen($setValues) - 1);
// print_r($setValues);
echo "</br>";
// print_r($setName);
echo "</br>";
//create set Name for files group
foreach ($setName as $set) {
    $nameSet = array();
    $names = scandir("{$_SERVER['DOCUMENT_ROOT']}/php/directory/b/sticker/{$set}");
    foreach ($names as $name) {
        if (is_numeric(strpos($name, ".svg"))) {
            // echo $name;
            $nameSet[] = $name;
            // echo "</br>";
        }
    }

    //collected files name in Set Name
    $stickerSet[] = [$set => $nameSet];
}
echo "</br></br></br></br>Use</br></br></br></br></br>";
// var_dump($stickerSet);

$j = json_encode($stickerSet);
echo "</br>";
// echo ($j);
echo "</br>";
echo "</br>";
$list = array("a" => 1, "b" => 2, "c" => 3, "d" => 4);
$show = array_filter($list, function ($var) {
    return $var == "c";
}, ARRAY_FILTER_USE_KEY);
var_dump($show);
echo "</br>";
$listValue = array("a", "b", "c", "d");
$showValue = array_filter($listValue, function ($var) {
    return $var == "c";
});
var_dump($showValue);
echo "</br>";
$check = "go4";
function check($value, $check)
{
    return $value == $check;
}
$listHigh = array("a" => array("test" => "go1"), "b" => array("test" => "go2"), "c" => array("test" => "go3"), "d" => array("test" => "go4", "test41" => "go41", "id" => "41"));
$showHigh = array_filter($listHigh, function ($var) use ($check) {
    return array_filter($var, function ($v) use ($check) {
        return $v == $check;
    });
});
$index;
foreach ($listHigh as $value) {
    if ($value['test'] == $check) {
        $index = array_search($value, $listHigh);
    }
}
var_dump($index);
echo "</br>";
echo "</br>";
var_dump($showHigh);
echo "</br>";
var_dump($listHigh[$index]['id']);

//compare value in Array of Arrays
$listArray = array(
    array(
        "set_id" => 1,
        "sticker_name" => "Bye.svg"
    ), array(
        "set_id" => 2,
        "sticker_name" => "Bye.svg"
    )
);
echo "</br>";
var_dump($listArray);
echo "</br>";
foreach ($listArray as $value) {
    if($value['set_id'] == 1){
        var_dump ($value['sticker_name']);
    }
}
