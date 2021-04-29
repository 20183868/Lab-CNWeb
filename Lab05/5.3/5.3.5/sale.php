<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Sales Results</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            color: #588c7e;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
        }

        th {
            background-color: #588c7e;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }
    </style>
</head>

<body>    
    <table>
        <tr>
            <th>Id</th>
            <th>Product</th>
            <th>Cost</th>
            <th>Weight</th>
            <th>Count</th>
        </tr>

        <?php
        $server = 'localhost';
        $user = 'root';
        $pass = '';
        $mydb = 'mydatabase';
        $table_name = 'products';
        $product_selected = $_POST["product"];
    
        $connect = mysqli_connect($server, $user, $pass, $mydb);
    
        if ($connect->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        echo
        "<h1>Update Results for Table Products</h1>
        <b>The Query is UPDATE Products SET Numb = Numb - 1 Where (Product_desc = '$product_selected')</b>";

        $update_sql = "UPDATE Products SET Numb = Numb - 1 Where (Product_desc = '$product_selected')";
        $select_sql = "SELECT * FROM $table_name";
        mysqli_select_db($connect, $mydb);
        mysqli_query($connect, $update_sql);
        $result = $connect->query($select_sql);
        
        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["ProductID"] . "</td><td>"
                    . $row["Product_desc"] . "</td><td>"
                    . $row["Cost"] . "</td><td>"
                    . $row["Weight"] . "</td><td>"
                    . $row["Numb"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        $connect->close();
        ?>
        
    </table>
</body>

</html>
