<pre>
<?php
    class Person {
        public $eyes;
        
        public function __construct($eyes)
        {
            $this->eyes = $eyes;
        }
        public function greet(){
            return "Hello! I have " . $this->eyes . " eyes<br/>";
        }
        
    }
    $Connor = new Person("Yellow");
//    $Connor->eyes = "Green";
    var_dump($Connor);
    $Bob = new Person("Brown");
    var_dump($Bob);
    $Jane = new Person("Blue");
    var_dump($Jane);

    echo $Connor->greet();
    echo $Bob->greet();
    echo $Jane->greet();
?>