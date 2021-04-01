<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client's Information</title>
</head>

<body>
    <h2>Client's Information</h2>
    <?php
    $username = $_POST["username"];
    $age = $_POST["userage"];
    $uni = $_POST["useruni"];
    $class = $_POST["class"];
    $email = $_POST["usermail"];
    $country = $_POST["country"];
    $addr = $_POST["address"];
    $user_gender = $_POST["gender"];

    $folder = "lab2.1/";
    if(is_dir($folder)){
        if($open = opendir($folder))
        {
            while($file = readdir($open) != false)
            {
                if($file == "." || $file == "..") continue;
                echo ' <img src = "lab2.1/'.$file.' " width = 150 height = 150 >';
            }
            closedir($open);
        }
    }

    print "Welcome <b>" . $username . "</b><br/>";
    print "Your address is: <b>" . $addr . "</b>, <b>" . $_POST["city"] . "</b><br>";

    print "You are studying at <b>" . $class . ", " . $uni . "</b><br>";
    print "Your hobbies is: <br>";
    if (!empty($_POST["check_list"])) {
        $count = 1;
        foreach ($_POST["check_list"] as $selected) {
            print "&ensp; $count. $selected</br>";
            $count++;
        }
    }

    ?>
    
</body>

</html>
