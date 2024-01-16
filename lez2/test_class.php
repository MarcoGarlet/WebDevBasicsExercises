<?php

    class Fruit {
        // Properties
        public $name;
        public $color;

        // Methods
        function set_name($name) {
            $this->name = $name;
        }
        function get_name() {
            return $this->name;
        }
    }

    $apple = new Fruit();
    $apple->set_name("apple");
    echo $apple->get_name()."\n";
    echo $apple->name."\n";

    // TODO aggiungere metodo per impostare il colore

    class Vegetable {
        public $name;
        public $color;
        function __construct($name,$color) {
            $this->name = $name;
            $this->color = $color;
        }
    }

    $carot = new Vegetable("carot","orange");
    echo $carot->name."\n";

    // TODO cosa succede se metto attributi private
?>
