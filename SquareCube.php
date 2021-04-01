<html>
    <head>
        <title>Square and Cube</title>
    </head>

    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">

        <?php
            if (array_key_exists("start", $_GET)) {
                $start = $_GET["start"];
                $end = $_GET["end"];
            } else {
                $start = 0;
                $end = 0;
            }
        ?>
        <table>
            <tr>
                <td>Select Start Number: </td>
                <td><select name="start">
                      <?php 
                          for ($i = 0; $i <= 10; $i++) {
                              if($start==$i) {
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
                <td>Select End Number: </td>
                <td>
                    <select name="end">
                        <?php
                            for ($i = 0; $i <= 20; $i++) {
                                if($end==$i) {
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
                <td align="right">
                    <INPUT TYPE="SUBMIT" VALUE="Submit">
                </td>
                <td align="left">
                    <INPUT TYPE="RESET" VALUE="Reset">
                </td>
            </tr>
        </table>

        <table>
            <tr>
                <th>Number</th>
                <th>Square</th>
                <th>Cube</th>
                <?php
            
                    $i = $start;
                    if($i > $end) {
                        print "Start number must be less than End number";
                    }
                    while($i <= $end) {
                        $sqr = $i*$i;
                        $cube = $sqr*$i;
                        print "<TR><TD>$i</TD><TD>$sqr</TD><TD>$cube</TD></TR>";
                        $i = $i + 1;
                    }
                
                ?>
            </tr>
        </table>
    </body>
</html>