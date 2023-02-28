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
?>

</body>
</html>