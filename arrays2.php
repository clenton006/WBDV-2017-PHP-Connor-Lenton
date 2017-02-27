<pre>
<?php
    //dictionary array
    $array = [
        "eyes" => "blue",
        "hair" => "brown"
        
    ];
    $array["eyes"] = "green";
    $array["age"] = 42;
    $total = count($array);
//    causes errors
//    for($i=0;$i<$total;$i++){
//            var_dump($array[$i]);
//    }
    var_dump(isset($array["eyes"]));


    foreach ($array as $trait => $description){
        var_dump($trait, $description);
    }
    echo $array["eyes"]. "\n";
    var_dump($array);
?>