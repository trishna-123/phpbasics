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

    public function message() {
        echo "Is cherry a fruit or a berry?";
    }
   }

   $cherry = new Cherry("Cherry", "Red");
   $cherry-> message();
   $cherry->intro();

?>
</body>
</html>