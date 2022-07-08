<!DOCTYPE html>
<html>
    <header>
    <h3>All Useful functions in PHP</h3>    
    </header>
<body>
    <button  onclick="openDirectoryPage()">Directory</button>
    <button onclick="openClassPage()">Class</button>
    <!-- <button onclick="openJsonPage()">Json</button> -->
    <button onclick="dateTime()">Date Time</button>
    <button id="string">String</button>
    <button id="arrayObject">Array and Object</button>
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
</script>
</html>
