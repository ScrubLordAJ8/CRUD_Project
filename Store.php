<?php
require("Connect.php");
$sql="SELECT ID, Username, Password FROM StoredPass";
$result=$conn->query($sql);
?>
<html>
    <head>
        <link rel='stylesheet' href='Style.css'>
        <title>Store a New Password</title>
        <meta charset="utf-8">
    </head>
    <body style='background-color:#FF0000'>
        <ul>
            <li><a class="active" href="index.php"> Home</a></li>
            <li><a href="Store.php"> Add</a></li>
            <li><a href="Modify.php"> Modify</a></li>
            <li><a href="Delete.php"> Delete</a></li>
        </ul>
        </br>
        <h1>Store a New Password</h1>
        <div align="center" id='store'>
            <fieldset style="width:30%"><legend>New Password</legend>
                <form method="POST" action="add.php">
                    <p>Enter an ID Tag for your Password</p>
                    ID Tag </br><input type="text" name="ID_Tag"></br>
                    <p>Username and Password must be less than 11 characters long</p>
                    Username </br><input type="text" name="storedUsername"></br>
                    Password </br><input type="text" name="storedPassword"></br>
                    <input id="button" type="submit" name="sumbit" value="add">
                </form>
            </fieldset>
        </div>
    </body>
</html>