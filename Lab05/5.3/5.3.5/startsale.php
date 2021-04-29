<!DOCTYPE html>
<html>

<head>
    <title>Update product</title>
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
    <h1>
        Select Product We Just Sold
    </h1>

    <form action="sale.php" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                    <input type="radio" name="product" value="Hammer">
                    <label for="hammer">Hammer</label><br>
                    <input type="radio" name="product" value="Screwdriver">
                    <label for="screwdriver">Screwdriver</label><br>
                    <input type="radio" name="product" value="Wrench">
                    <label for="wrench">Wrench</label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Click To Submit">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
        <h2>The query is SELECT * from products</h2>


    </form>

    <h1>
        Products Data
    </h1>

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
        $connect = mysqli_connect($server, $user, $pass, $mydb);

        if ($connect->connect_error) {
            echo "fail";
            die("Connection failed: " . $connect->connect_error);
        }

        $sql = "select * from products";
        $result = $connect->query($sql);
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