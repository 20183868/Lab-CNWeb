<html>
<form method="GET">
<input type="text" name="book">
<input type="submit" value="submit">
</form>

<?php
include_once("model/Model.php");
 class Controller {
 public $model;

    public function __construct()
    {

        $this->model = new Model();

    }

    public function invoke()
    {
        // echo "in invoke function <br>";
        if (!isset($_GET['book']))
        {
            // echo "in if <br>";
 // no special book is requested, we'll show a list of all available books
            
            $books = $this->model->getBookList();
            include 'view/booklist.php';

        }
        else
        {
// show the requested book
            $title = $_GET['book'];
        // echo "in else with $title <br>";
        $book = $this->model->getBook($_GET['book']);
        // echo "getBook finish with title $book->title";
        include 'view/viewbook.php';
        }
    }
 }
 ?>
</html>