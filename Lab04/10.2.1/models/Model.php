<html>
    <?php
    
    class Model{
        public static $listToDo;
        public function __construct(){
            self::$listToDo=array(
                "School" => new ToDo("School","Go To School","Every Morning"),
                "Pick Up" => new ToDo("Pick Up","Pick Up Grandma","Sunday Morning")
            );
            if(count($_SESSION) > 0) 
                self::$listToDo = $_SESSION;
        }
        public static function getToDoList(){
            // echo "call get list function <br>";
            // echo "current size: ". count(self::$listToDo) ."<br>";
            return self::$listToDo;
        }

        public static function getToDo($name){
            return self::$listToDo[$name];
        }

        public static function setToDoList($list) {
            self::$listToDo = $list;
        }
        // public function getToDoList(){
        //     return $this -> listToDo;
        // }
        // public function getToDo($name){
        //     return $this -> listToDo[$name];
        // }
        public static function addToDo($name, $content,$time ){
            self::$listToDo[$name] = new ToDo($name, $content, $time);
            return self::$listToDo;
        }
    }
    ?>
</html>