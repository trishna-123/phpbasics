<html>
<body>

<h1>Program for fruits</h1>

<?php

    class fruit {

        public $name;
        public $color;

        function set_name($name) {
            $this->name = $name;
        }

        function set_color($color) {
            $this->color = $color;
        }

        function get_name() {
            return $this->name;
        }

        function get_color() {
            return $this->color;
        }
    }

    $apple = new fruit();
    $banana = new fruit();
    $apple->set_name("Apple");
    $apple->set_color("Red");
    $banana->set_name("Banana");
    $banana->set_color("Yellow");

    echo $apple->get_name();
    echo "<br>";
    echo $apple->get_color();
    echo "<br>";
    echo $banana->get_name();
    echo "<br>";
    echo $banana->get_color();

?>

</body>
</html>