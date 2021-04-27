<!DOCTYPE html>
<?php
    $server = 'localhost';

    $user = 'root';
   
    $pass = 'Trongduc2206';
   
    $mydb = 'testdb';
   
    $table_name = 'Products';

    $search = $_GET['search'];

    $connect = mysqli_connect($server, $user, $pass, $mydb  );
    if(!$connect){
        die ("Cannot connect to $server using $user"); 
    } else {
        $selectQuery = "select * from ".$table_name." where (Product_desc ='$search');";
        $selectResult = mysqli_query($connect, $selectQuery);
    }
?>
<html>
    <head></head>
    <body>
        <h1>
        Products Data
        </h1>
        <?php
        echo 'The query is '.$selectQuery;
        ?>
        <table border="1">
            <tr>
                <td><b>Num</b></td>
                <td><b>Product</b></td>
                <td><b>Cost</b></td>
                <td><b>Weight</b></td>
                <td><b>Count</b></td>
            </tr>
            <?php
                while($rows = mysqli_fetch_array($selectResult)){
                    echo "<tr> <td>" .$rows['ProductID'] ."</td> ";
                    echo " <td>" .$rows['Product_desc'] ."</td> ";
                    echo " <td>" .$rows['Cost'] ."</td> ";
                    echo " <td>" .$rows['Weight'] ."</td> ";
                    echo " <td>" .$rows['Numb'] ."</td> </tr> ";
                }
            ?>
        </table>
       
    </body>
</html>