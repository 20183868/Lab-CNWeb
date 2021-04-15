<html>
    <?php
        include_once("models/Model.php");
        class Controller{
                public $model;
                public function __construct(){
                    $this -> model  = new Model();
                }
                public function invoke()
                {
                    include 'views/MainView.php';
                    // if(!isset($_POST['name'])){
                    //     echo 'To Do List <br>';
                    //     $todos = $this -> model -> getToDoList();
                    //     include 'views/ToDoListView.php';
                    // } else {
                    //     echo "<b>To Do Found:</b> <br>";
                    //     $todo = $this -> model -> getToDo($_POST['name']);
                    //     include 'views/ToDoView.php';
                    // }

                        //test static
                    if(isset($_POST['name'])){
                               echo "<b>To Do Found:</b> <br>";
                        $todo = $this -> model -> getToDo($_POST['name']);
                        // $name = $_POST['name'];
                        // $todo = $this -> model.listToDo[$name];
                        include 'views/ToDoView.php';
                    }
                    if(isset($_POST['showAllMain'])){
                        echo 'To Do List <br>';
                        $todos = $this -> model -> getToDoList();
                        // $todos = $this -> model.$listToDo;
                        include 'views/ToDoListView.php';   
                    }
                        //end test statis

                    if(isset($_POST['add'])){
                        // echo "in add";
                        include 'views/AddView.php';
                        if(isset($_POST['submitAdd'])){
                            $name = $_POST['nameToAdd'];
                            $content = $_POST['contentToAdd'];
                            $time = $_POST['timeToAdd'];
                            $todos = $this -> model -> addToDo($name, $content, $time);
                            include 'views/ToDoListView.php';   
                        }
                    }
                    if(isset($_POST['submitAdd'])){
                            $name = $_POST['nameToAdd'];
                            $content = $_POST['contentToAdd'];
                            $time = $_POST['timeToAdd'];
                            $todos = $this -> model -> addToDo($name, $content, $time);
                            $_SESSION = $todos;
                            include 'views/ToDoListView.php';   
                        }
                }
        }
    ?>
    <script type="text/javascript">
        function showAll(){

        }
    </script>
</html>