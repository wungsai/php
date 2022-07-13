<!DOCTYPE html>
<html>
<header align='center'>
    <h2>Conditions Operator</h2>
</header>

<body align='center'>
    <p>
    <h4>Start Here</h4>
    <br>
    <?php
    $value = is_bool(false);
    echo "<br>";
    echo "function => is_bool(false)";
    echo "<br>";
    echo "result: {$value}";

    $value = is_string("");
    echo "<br>";
    echo "function => is_string('')";
    echo "<br>";
    echo "result: {$value}";

    $a = "";
    if ($a) {
        $value = "yes";
    } else {
        $value = "no";
    }
    echo "<br>";
    echo "function => if('')";
    echo "<br>";
    echo "result: {$value}";
    ?>
    </p>
</body>

</html>