<!DOCTYPE html>
<html>
    <header>
    <h3>All Useful functions in PHP</h3>    
    </header>
<body>
    <button onclick="openDirectoryPage()">Directory</button>
    <button onclick="openClassPage()">Class</button>
    <!-- <button onclick="openJsonPage()">Json</button> -->
    <button onclick="dateTime()">Date Time</button>
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
</script>
</html>
