<!DOCTYPE html>
<html>
<style>
    #input {
        box-sizing: border-box;
        background-position: 14px 12px;
        background-repeat: no-repeat;
        font-size: 16px;
        padding: 14px 12px;
        border: none;
        border-bottom: 1px solid #ddd;
    }

    .content {

        position: absolute;
        background-color: #f6f6f6;
        min-width: 230px;
        overflow: auto;
        border: 1px solid #ddd;
        z-index: 1;
    }

    .content a {

        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    a:hover {
        pointer-events: all;
        cursor: pointer;
        background-color: #ddd;
    }
</style>

<body>
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
    ?>
    <div class='content'>
        <input id="input" type="text" onkeyup="search()">
        <div id="list" hidden>
            <?php
            foreach ($showList as $value) {
                echo "<a  hidden>$value</a>";
            }
            ?>
        </div>
    </div>

    <script>
        var checkList = [];

        function search() {
            checkList = []
            var input = document.getElementById("input");
            var search = input.value.toLowerCase();
            var listContainer = document.getElementById("list");
            var aList = listContainer.getElementsByTagName("a");
            listContainer.style.display = "";
            if (search.length > 0) {
                for (const a of aList) {
                    if (a.text.toLowerCase().indexOf(search) > -1) {
                        a.style.display = "";
                        checkList.push(1);
                    } else {
                        a.style.display = "none";
                    }
                }
                if (checkList.length > 0) {
                    listContainer.hidden = false;
                } else {
                    listContainer.hidden = true;
                }
            } else {
                listContainer.hidden = true;
            }

        }
    </script>
</body>

</html>