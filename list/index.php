<!DOCTYPE html>
<html>
<header align='center'>
    <h2>List in Search box</h2>
</header>

<body align='center'>
    <p>
    <h4>Start Here</h4>
    <br>
    <?php
    $chemicalList = ["H2O", "CO2", "Zn", "H3N2O"];
    function  toChemic($s)
    {
        $len = strlen($s);
        $html = '';
        if ($len > 0) {
            $prev = $s[0];
            $html = $prev;
            for ($i = 1; $i < $len; $i++) {
                $ch = $s[$i];
                if (is_numeric($ch) && 'a' <= strtolower($prev) && strtolower($prev) <= 'z') {
                    $html .= "<sub>$ch</sub>";
                } else {
                    $html .= $ch;
                }
                $prev = $ch;
            }
        }
        return $html;
    }
    $showList = [];

    foreach ($chemicalList as $value) {
        array_push($showList, toChemic($value));
    }
    echo "<table>";
    foreach ($showList as $value) {
        echo "<tr><td>$value</td></tr>";
    }
    echo "</table>";
    ?>

    </p>
    <input type="text" list="chemisList" onkeyup="test()">
    <div id="test">
test
    </div>

    <script>
function test(){
    console.log ("test");
    var test  = document.getElementById("test");
    test.hidden = !test.hidden;
}
    </script>
</body>

</html>