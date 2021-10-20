<?php echo "hellow wampire ";
//open windows text file by directory path
$txt = fopen("C:\\xampp\\htdocs\\a\\b\\a.txt", "r");
$s = fgets($txt);
echo "</br>";
echo $s;
fclose($txt);
echo "</br>";

//generate reference number by datetime milisecond
echo date('YmdHis').substr(round(microtime(true)*100),-2); 
echo "</br>";

//show windows directory path
$dir = "/a/b/";
$a = dir(getcwd());
$d = "{$a->path}{$dir}";
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
echo $d;
echo "</br>";
$use = "{$_SERVER['DOCUMENT_ROOT']}{$dir}";
$test = scandir($use);
print_r($test);
echo "</br>";
?>