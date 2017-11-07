<?php

require ('config.php');

if(isset($_POST['submitbutton'])){
    if(!isset($_POST['email'])){
        die("Error.  The email field was not set.");
    }else if(!isset($_POST['password'])){
            die("Error.  The password field was not set.");
        }
    }
    
    $password = hash("sha512", $_POST['password']);
    $query = mysqli_query($dbConn, "SELECT id FROM users WHERE email = ".mysqli_real_escape_string($dbConn, $_POST['email'])."AND WHERE password = ".mysqli_real_escape_string($dbConn, $password));
    //$query = mysqli_query($dbConn, "SELECT id FROM 'users' WHERE email = " .$_POST['email']);
    //$query = mysqli_query($dbConn, "SELECT * FROM users");
    //print "Your query is ".$query;
    //while($row = mysqli_fetch_assoc($query)){
               // print($row['username']."</br>");
           // }
    //print"Your email is " .$_POST['email']. " and your password is ".$password."</br>";
    if (mysqli_num_rows($query)){
        die("Login credentials correct.");
    }else {
        die("Error. Incorrect password or email address");
    }
?>
