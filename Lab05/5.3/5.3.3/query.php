<!DOCTYPE html>
<html>

<head>
    <title>Display database</title>
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
        $connect = mysqli_connect($server, $user, $pass, $mydb);
        
        if ($connect->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM $table_name";
        $result = $connect->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row  
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
