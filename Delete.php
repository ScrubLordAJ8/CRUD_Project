<?php
require('Connect.php');
$sql='SELECT ID, Username, Password FROM StoredPass';
$result=$conn->query($sql);
?>
<html>
    <head>
        <link rel='stylesheet' href='Style.css'>
        <title>Delete a Stored Password</title>
        <meta charset="utf-8">
    </head>
    <body style='background-color:#FF0000'>
        <ul>
            <li><a class="active" href="index.php"> Home</a></li>
            <li><a href="Store.php"> Add</a></li>
            <li><a href="Modify.php"> Modify</a></li>
            <li><a href="Delete.php"> Delete</a></li>
        </ul>
        <h1>Delete a Stored Password</h1>
        <div align='center' id='delete'>
            <fieldset style="width:30%"><legend>Delete Password</legend>
                <form method='POST' action='DelFromDB.php'>
                    Password ID Tag </br><input type='text' name='del_id'></br>
                    <input type='submit' id='button' name='del_submit' value='Delete'>
                </form>
            </fieldset>
        </div>
    </body>
</html>