<?php
session_start();
?>
<html>
    <?php
    class ToDo {
        public $name;
        public $content;
        public $time;

        public function __construct($name, $content, $time){
            $this -> name = $name ;
            $this -> content = $content;
            $this -> time = $time;
        }
    }
    ?>
</html>