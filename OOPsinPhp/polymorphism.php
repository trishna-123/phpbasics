<html>
<body>

<?php

    class Fruit {

        public $name;
        public $color;

        public function __construct($name, $color) {
            $this-> name = $name;
            $this->color = $color;
        }

        public function intro() {
            echo "A {$this->name} is a fruit and the color is {$this->color}.";
        }

    }

   class Cherry extends Fruit {

        public $weight;
        public function __construct($name, $color, $weight) {

            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
        }

        public function intro() {
            echo "The fruit is {$this->name}, the color is {$this->color}, the weight is {$this->weight} grams.";
        }
   }

   $cherry = new Cherry("Cherry", "red", 20);
   $cherry -> intro();

?>
</body>
</html>