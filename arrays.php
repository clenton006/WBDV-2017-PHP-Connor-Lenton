<h1>Hello World!</h1>

<?php

    $array = [
        "Bob",
        "Jane",
        "Bill"
        
    ];
    echo "<pre>";
    $array[] = "John";
    $array[] = "Murphy";
    $array[2] = "William";
    $array2 = [1,2,3,4];
    //$array[5] = $array2;
    $array[5] = "not array 2";
    //array_splice($array, 2,1);
    $total = count($array);
    //unset($array[0]);
//    for($i=0;$i<$total;$i++){
//        if(isset($array[$i])){
//            var_dump($array[$i]);
//        } else{
//            echo "$i is empty\n";
//        }
//    }
    foreach($array as $value){
        var_dump($value);
    }

    var_dump($array);
?>