<!DOCTYPE html><html><header align='center'>
<h2>Array and Object Functions</h2></header><body align='center'>
<p>
    <h4>Start Here</h4>
    <br>
<?php
$responseString = ' [{"id":"1","reward_code":"PhoneTopup","reward_name":"topup phone
    number","percent":"5","point":"0","enable_percent":"1","enable_point":"0","enable":"1","created":"2022-06-20
    16:14:09","updated":"2022-06-20 16:14:09"},{"id":"2","reward_code":"LVICarInsurance","reward_name":"buy LVI car
    insurance","percent":"7","point":"0","enable_percent":"1","enable_point":"0","enable":"1","created":"2022-06-20
    16:15:54","updated":"2022-06-20 16:15:54"},{"id":"3","reward_code":"ShopVenToApp","reward_name":"shopping vendor to
    ocwa","percent":"0","point":"0","enable_percent":"0","enable_point":"0","enable":"0","created":"2022-06-20
    16:16:00","updated":"2022-06-20 16:16:00"}]';
    echo $responseString;
    echo "<br>";
    $json = json_decode($responseString);
    $json1 = (object)["a"=>3,"b"=>4];
    echo "convert to json:";
    echo "<br>";
    var_dump($json);
    echo "<br>";
   
    $topup = (object)["topup"=>true, "succeed"=>(object)["test"=>1], "error"=>["error"=>0]];
    echo "<br>";
    print_r($topup->succeed);
    echo($topup->succeed->test);

?>
</p>
</body></html>