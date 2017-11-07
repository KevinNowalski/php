<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login System</title>
    </head>
    <body>
        
        <?php
            require("config.php");
        ?>
        <form id="loginForm" action="login.php" method="post">
            Email:</br>
            <input id="email" type="text" name="email"></br>
            Password:</br>
            <input id="password" type="password" name="password"></br>
            <button type="submit" name="submitbutton">Login</button></br>
        </form>
        
        
    </body>
</html>
