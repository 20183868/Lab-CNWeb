<html>
<head></head>
<body>
    <h1>To Do List</h1>
    <table border="1">
    <tr>
        <td> <b>Name</b></td>
        <td><b>Content</b></td>
        <td><b>Time</b></td>
    </tr>
    <?php
    foreach ($todos as $name => $todo) {
     echo '<tr><td>'.$todo->name.'</td><td>'.$todo->content.'</td><td>'.$todo->time.'</td></tr>';
     }
     ?>
    </table>
</body>
</html>