<h1>Hello World!!</h1>

<?php
    $friends = 6;
    $friends = 25;
    $arr = [1,2,"hello"];
    $front = "This is the start and ";
    $end = "this part is the end of a string.";
    $x = "<p>Variable</p>";
    $output = "You have $friends friends";
    $output2 = 'You have $friends friends';
    $output3 = "You have $friends 'friends'";
    //this is called escape to nest the same type of quote
    $output4 = "You have $friends \"friends\"";
    $var = new stdClass();
    $func = function(){};
    $y = 5 + 6;
    $z = "yes"."no";
    //can be useed for debugging to check on variable values
    echo "<pre>"; 
    var_dump($friends, $output4, $arr, $var, $func, $y, $z);
    echo "<h1>Hello World Again!</h1>";
    echo date("Y-m-d");
    echo $x;
    echo "<br/>This " . "String " . "is " . "Concatonated<br/>";
    echo $front . $end;
    echo "<br/>You have " . $friends . " friends<br/>";
    echo $output . "<br/>";
    echo $output2 . "<br/>";
    echo $output3 . "<br/>";
    echo $output4 . "<br/>";

    
    //phpinfo();
?>