<html>

<head>
    <title>Date and Time Processing</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        <p>Enter your name and select date and time for the appointment</p>

        <?php
        if (array_key_exists("day", $_GET)) {
            $day = $_GET["day"];
            $month = $_GET["month"];
            $year = $_GET["year"];
        } else {
            $day = 0;
            $month = 0;
            $year = 0;
        }

        if (array_key_exists("hour", $_GET)) {
            $hour = $_GET["hour"];
            $minute = $_GET["minute"];
            $second = $_GET["second"];
        } else {
            $hour = 0;
            $minute = 0;
            $second = 0;
        }

        if (array_key_exists("name", $_GET)) {
            $name = $_GET["name"];
        } else {
            $name = "";
        }
        ?>

        <table>
            <tr>
                <td>Your Name:</td>
                <td><input type="text" name="name" value="<?php if (isset($_GET["name"])) echo $_GET["name"]; ?>">
                </td>
                
            </tr>
            <tr>
                <td>Date:</td>
                <td>
                    <select name="day">
                        <?php
                        for ($i = 1; $i <= 31; $i++) {
                            if ($day == $i) {
                                print("<option selected>$i</option>");
                            } else {
                                print("<option>$i</option>");
                            }
                        }
                        ?>
                    </select>
                    <select name="month">
                        <?php
                        for ($i = 1; $i <= 12; $i++) {
                            if ($month == $i) {
                                print("<option selected>$i</option>");
                            } else {
                                print("<option>$i</option>");
                            }
                        }
                        ?>
                    </select>
                    <select name="year">
                        <?php
                        for ($i = 1900; $i <= 2021; $i++) {
                            if ($year == $i) {
                                print("<option selected>$i</option>");
                            } else {
                                print("<option>$i</option>");
                            }
                        }
                        ?>
                    </select>

                </td>
            </tr>
            <tr>
                <td>Time: </td>
                <td>
                    <select name="hour">
                        <?php
                        for ($i = 0; $i <= 23; $i++) {
                            if ($hour == $i) {
                                print("<option selected>$i</option>");
                            } else {
                                print("<option>$i</option>");
                            }
                        }
                        ?>
                    </select>
                    <select name="minute">
                        <?php
                        for ($i = 0; $i <= 59; $i++) {
                            if ($minute == $i) {
                                print("<option selected>$i</option>");
                            } else {
                                print("<option>$i</option>");
                            }
                        }
                        ?>
                    </select>
                    <select name="second">
                        <?php
                        for ($i = 0; $i <= 59; $i++) {
                            if ($second == $i) {
                                print("<option selected>$i</option>");
                            } else {
                                print("<option>$i</option>");
                            }
                        }
                        ?>
                    </select>
                </td>
            </tr>
        </table>

        <table>
            <tr>
                <td align="right">
                    <INPUT TYPE="SUBMIT" VALUE="Submit">
                </td>
                <td align="left">
                    <INPUT TYPE="RESET" VALUE="Reset">
                </td>
            </tr>
        </table>

        <?php
        
        if ($day > 0 && $name != "") {
            print("Hi $name!<br></br>");
            $dateTime = DateTime::createFromFormat('d/m/Y', $day . "/" . $month . "/" . $year);
            $errors = DateTime::getLastErrors();
            if (!empty($errors['warning_count'])) {
                print "That date was invalid!";
            } else {
                print "You have choose to have an appointment on " . $hour . ":" . $minute . ":" . $second . ", " . $day . "/" . $month . "/" . $year;
                print "<p>More information</p>";

                //in ra gio o dinh dang 12h
                $am_pm = "AM";
                if ($hour > 12) {
                    $hour = $hour - 12;
                    $am_pm = "PM";
                }

                print "<p>In 12 hours, the time and the date is " . $hour . ":" . $minute . ":" . $second . " " . $am_pm . ", "
                    . $day . "/" . $month . "/" . $year . "</p>";

                //in ra so ngay trong thang
                $days_of_month = 31;

                if ($month == 4 || $month == 6 || $month == 9 || $month == 11)
                    $days_of_month = 30;

                if ($month == 2) {
                    if ((($year % 4) == 0) && ((($year % 100) != 0) || (($year % 400) == 0))) {
                        $days_of_month = 29;
                    } else {
                        $days_of_month = 28;
                    }
                }

                print "<p> This month has " . $days_of_month . " days </p>";
            }
        }
        ?>

</body>

</html>