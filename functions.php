<?php

    function add($a, $b){
        return $a + $b;    
    }
    echo add(6,7); 
    $result = add(1,3) + add(4,2);
    $result = add(add(4,6),add(7,2)) + add(4,2);
    echo $result;
    var_dump($result);
    echo "<br/><br/><br/>";
    $name = "Bob";
    echo "<br/>hi $name , How are you doing on " . date("Y-m-d");
    $name = "Jessica";
    echo "<br/>hi $name , How are you doing on " . date("Y-m-d");
    echo "<br/>-----------------------------------------------------------------<br/>";
    function greet($name){
        echo $name;
        return "<br/>hi $name , How are you doing on " . date("Y-m-d") . "<br/>";
    }
    $display = greet("Jane");
    echo $display;
    $display = greet("Alan");
    echo $display;
    $display = greet("Mac");
    echo $display;
    $display = greet("Dave");
    echo $display;
    $display = greet("Roger");
    echo $display;
    $display = greet("Claire");
    echo $display;
    $display = greet("Megan");
    echo $display;
    $display = greet("Kevin");
    echo $display;
    $display = greet("Abby");
    echo $display;
    $display = greet("Lauren");
    echo $display;
    $display = greet("Billy");
    echo $display;

    $people = ["Hsamdi", "Yessica", "William"];
    echo "<br/>-----------------------------------------------------------------";
    foreach($people as $key => $person){
        echo "<br/>hi $person , How are you doing on " . date("Y-m-d");
    }

?> 