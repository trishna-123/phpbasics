<html>
<body>

<h1>Constructor Program for fruits</h1>

<?php

    class fruit {

        public $name;
        public $color;

        function __construct($name, $color){
            $this-> name = $name;
            $this->color = $color;
        }

        function get_name() {
            return $this->name;
        }

        function get_color() {
            return $this->color;
        }

    } 
 
    $mango = new fruit("Mango", "Yellow");
    echo $mango->get_name();
    echo "<br>";
    echo $mango->get_color();
?>
</body>
</html>