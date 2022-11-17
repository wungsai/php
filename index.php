<!DOCTYPE html>
<html>
<header>
   <h3>All Useful functions in PHP</h3>
</header>
<style>
   button{
      border: none;
      border-radius: 5px;
      font-size: 16px;
      color: white;
      margin-bottom: 10px;
      padding: 5px;
      background-color: #038160;
   }
   button:hover{
      cursor: pointer;
      color:black;
      background-color: wheat;
   }
</style>
<body align='center'>
   <?php $dir = ($_SERVER['DOCUMENT_ROOT']);
   $current = $_SERVER['REQUEST_URI'];
   $path = "{$dir}{$current}";
   $dirs = scandir($path);
   $folders = [];
   foreach ($dirs as $key => $value) {
      if (!is_numeric(strpos($value, "."))) {
         $folders[] = $value;
      }
   }
   // print_r($dirs);
   // echo "</br>";
   // print_r($folders);
   // echo "</br>";

   $globDir = glob("*", GLOB_ONLYDIR);
   print("</br>");
   // print_r($globDir);
   foreach ($globDir as $key => $value) {
      echo "<button id='{$value}' onclick=\"window.location.href=window.location.href+'{$value}'\">{$value}</button></br>";
   }

   ?>
   </br>
   <!--
   <button onclick="window.location.href=window.location.href+'directory'">Directory</button>
   </br>
   
   <button onclick="openClassPage()">Class</button>
   </br>
   <button onclick="dateTime()">Date Time</button>
   </br>
   <button id="string">String</button>
   </br>
   <button id="arrayObject">Array and Object</button>
   </br>
   <button id="conditionOP">Condition Operator</button>
   </br>
   <button id="list">Search Filter List</button>
   </br>
   <button id="server">$_Server</button> -->
</body>

<!-- <script>
   function openDirectoryPage() {
      console.log(window.location.href = window.location.href + "directory");
   }

   function openClassPage() {
      console.log(window.location.href = window.location.href + "class");
   }

   function openJsonPage() {
      console.log(window.location.href = window.location.href + "json");
   }

   function dateTime() {
      console.log(window.location.href = window.location.href + "datetime");
   }

   $string = document.querySelector("#string");
   $string.addEventListener("click", function() {
      window.location.href = window.location.href + "string";
   });
   document.querySelector("#arrayObject").addEventListener("click", function() {
      window.location.href = window.location.href + "arrayObject";
   });
   document.querySelector("#conditionOP").addEventListener("click", function() {
      window.location.href = window.location.href + "conditionOP";
   });
   document.querySelector("#list").addEventListener("click", function() {
      window.location.href = window.location.href + "list";
   });
   document.querySelector("#server").addEventListener("click", function() {
      window.location.href = window.location.href + "server";
   });
</script> -->

</html>