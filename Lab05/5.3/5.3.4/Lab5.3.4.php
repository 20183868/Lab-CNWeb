<!DOCTYPE html>
<html>
    <head>
        <title>Inventory Search</title>
    </head>
    <body>
        <h1>
        Inventory Data
        </h1>
       
        <form method=POST>
        <table>
            <tr>
                <td>
                    <p>
                    Enter product to search for: 
                    </p>    
                </td>
                <td>
                    <input type="text" name="search" required>   
                </td>
            </tr>
            <tr>
                <td align="right"> <input type="submit" value="Click To Submit"> </td>
                <td align="left"> <input type="reset" value="Reset"> </td>
            </tr>
        </table>
        <?php
            if(isset($_POST['search'])){
                $search = $_POST['search'];
                // echo $search;
                // include 'search.php';
                header('Location: http://localhost:3000/search.php?search='.$search);
            }
        ?>
            
            
        </form>
    </body>
</html>