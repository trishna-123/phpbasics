<html>
<body>

<h1>Destructor Program for fruits</h1>

<?php

    class fruit {

        public $name;
        public $color;

        function __construct($name, $color){
            $this-> name = $name;
            $this->color = $color;
        }

        function __destruct() {
            echo "The fruit is {$this->name} and the color is {$this->color}.";
        }

    } 
 
    $mango = new fruit("Mango", "Yellow");
    
?>
</body>
</html>