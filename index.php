<!DOCTYPE html>
<html>
    <header>
    <h3>All Useful functions in PHP</h3>    
    </header>
<body>
    <button  onclick="openDirectoryPage()">Directory</button>
</br>
    <button onclick="openClassPage()">Class</button>
    </br>
    <!-- <button onclick="openJsonPage()">Json</button> -->
    <button onclick="dateTime()">Date Time</button>
    </br>
    <button id="string">String</button>
    </br>
    <button id="arrayObject">Array and Object</button>
    </br>
    <button id="conditionOP">Condition Operator</button>
    </br>
    <button id ="list">List</button>
</body>

<script>
    function openDirectoryPage(){
       console.log( window.location.href=window.location.href+"directory");
    }
    function openClassPage(){
       console.log( window.location.href=window.location.href+"class");
    }
    function openJsonPage(){
       console.log( window.location.href=window.location.href+"json");
    }
    function dateTime(){
       console.log( window.location.href=window.location.href+"datetime");
    }

    $string = document.querySelector("#string");
    $string.addEventListener("click",function(){
       window.location.href= window.location.href+"string";
    });
    document.querySelector("#arrayObject").addEventListener("click",function(){
       window.location.href = window.location.href+"arrayObject";
    });
    document.querySelector("#conditionOP").addEventListener("click",function(){
       window.location.href = window.location.href+"conditionOP";
    });
    document.querySelector("#list").addEventListener("click",function(){
       window.location.href = window.location.href+"list";
    });
</script>
</html>
