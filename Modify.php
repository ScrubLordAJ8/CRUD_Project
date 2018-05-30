<?php
    require("Connect.php");
    $sql="SELECT ID, Username, Password FROM StoredPass";
    $result=$conn->query($sql);
?>
<HTML>
    <head>
        <link rel='stylesheet' href="Style.css">
        <title>Store all your passowrds in one easy place!</title>
        <meta charset = "utf-8">
    </head>
    <body style="background-color:#FF0000;">
        <ul>
            <li><a class="active" href="index.php"> Home</a></li>
            <li><a href="Store.php"> Add</a></li>
            <li><a href="Modify.php"> Modify</a></li>
            <li><a href="Delete.php"> Delete</a></li>
        </ul>
        </br>
        <script language="JavaScript" src='Slideshow.js'></script>
        </br>
        <div align="center" id="txt">
            <h1>Modfy a Stored Password</h1>
            <fieldset style="width:30%"><legend>Modify Passwords</legend>
                <form method="POST" action="Mod.php">
                    <p>Please Fill in ALL fields!</p>
                    ID Tag </br><input type="text" name="mod_ID"></br>
                    Username </br><input type="text" name="mod_User"></br>
                    Password </br><input type="text" name="mod_Pass"></br>
                    <input id="button" type="submit" name="sumbit" value="Modify">
                </form>
            </fieldset>
        </div>
    </body>
</HTML>