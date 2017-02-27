<html>
<pre>
    <?php
        echo "Hello World";
        $outputText = "<br/>This is some text to display";
        $start = "This is the first half";
        $end = "this is the second half";
        echo $outputText;
        echo "<br/>" . $start . " and " . $end . "<br/>";
        $num1 = 4;
        $num2 = 6;
        $num3 = 21;
        $num4 = 895489;
        echo $num1 + $num3 . "<br/>"; 
        echo $num3 - $num2 . "<br/>"; 
        echo $num2 * $num4 . "<br/>"; 
        echo $num4 / $num1 . "<br/>"; 

        if($num2 > $num1){
            echo "Number two is bigger<br/>";
        }
        echo "<br/>---------------------------------------------------------------------------------------------------------------<br/>";
        echo "---------------------------------------------------------------------------------------------------------------<br/><br/>";
        $array = ["hello", 3, true, "maybe", 23.8, "goodbye"];
        foreach($array as $key => $value){
            var_dump($key, $value);
        }
        echo "<br/>";
        $Car = [
            "Make" => "Mazda",
            "Model" => "MPV",
            "Year" => "2000",
            "Color" => "Green",
            "Full" => true
            
        ];
        foreach($Car as $property => $value){
            var_dump($property, $value);
        }
        $letters = ["A", "B", "C", "D", "E"];
        var_dump($letters);
        echo join(" ", $letters);
        echo "<br/>";
        $letters[] = "F"; 
        echo join(" ", $letters);
        echo "<br/>";
        $names = ["Mac","Cole","Tyson","Zane","Josh","Tyler","Connor","Kyler","Mark","Andy"];
        var_dump($names);
        sort($names);
        var_dump($names);
        echo "<br/>---------------------------------------------------------------------------------------------------------------<br/>";
        echo "---------------------------------------------------------------------------------------------------------------<br/><br/>";

        function writeStuff(){
            return "HELLO WORLD!<br/>";
            
        }
        $display = writeStuff();
        echo $display;

        function modify($initial){
            $initial = "(EDITED)" . $initial;
            return $initial;
            
        }
        $modified = modify("This is a string.");
        echo $modified;

        class Creature {
            public $numlegs;
            
            public function __construct($numlegs){
                $this->numlegs = $numlegs;
            }
            
            public function describe(){
                return "I have $this->numlegs legs<br/>";
            }
            
        }
        echo "<br/>";
        $spider = new Creature(8);
        $gecko = new Creature(4);
        var_dump($spider, $gecko);
        echo $spider->describe();
        echo $gecko->describe();

    echo"<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>"

    ?>

</html>