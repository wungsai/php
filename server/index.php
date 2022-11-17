<!DOCTYPE html>
<html>
    <body align='center'>
        <h3> SITE_URL</h3>
        <p>
            <?php
            $url = $_SERVER['HTTP_REFERER'];
            // echo $url;
            // return;
            foreach ($_SERVER as $key=>$i) {
                echo "</br>{$key} == {$i}";
            };
           
            
            ?>
        </p>
    </body>
</html>