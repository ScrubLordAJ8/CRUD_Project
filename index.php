<?php
    require("Connect.php");
    $sql="SELECT ID, Username, Password FROM StoredPass";
    $result=$conn->query($sql);
    $data=$result->fetch_array(MYSQLI_ASSOC);
?>
<HTML>
    <head>
        <link rel='stylesheet' href="Style.css">
        <title>Store all your passowrds in one easy place!</title>
        <meta charset = "utf-8">
    </head>
    <body style="background-color:#FF0000;" onload "startTime()">
        <ul>
            <li><a class="active" href="index.php"> Home</a></li>
            <li><a href="Store.php"> Add</a></li>
            <li><a href="Modify.php"> Modify</a></li>
            <li><a href="Delete.php"> Delete</a></li>
        </ul>
        </br>
            <script language='javascript'>
            function startTime() {
                var today = new Date();
                var h = today.getHours();
                var m = today.getMinutes();
                var s = today.getSeconds();
                m = checkTime(m);
                s = checkTime(s);
                document.getElementById('txt').innerHTML =
                h + ":" + m + ":" + s;
                var t = setTimeout(startTime, 500);
            }
            function checkTime(i) {
            if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
            return i;
        }
        </script>
        </br>
        <div allign="center" id="txt">
            <h1>Welcome! This is where you store all your passwords!</h1>
            <table align="center" width="600" border="1" cellpadding="1">
                <tr>
                    <td>ID</td>
                    <td>Username</td>
                    <td>Passwords</td>
                </tr>
                <?php
                    if ($storedUsername = $data) {
                    echo"</tr>";
                        echo "<td>".$data ['ID']."</td>"; 
                        echo "<td>".$data ['Username']."</td>"; 
                        echo "<td>".$data ['Password']."</td>"; 
                    echo"</tr>";
                    }
                ?>
            </table>
        </div>
    </body>
</HTML>