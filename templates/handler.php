<?php

    // error
    ini_set('error_reporting', E_ALL);

    if (!isset($_GET['username'])) header('Location: login.php');
    if (!isset($_GET['pwd'])) header('Location: login.php');

    $username = $_GET['username'];
    $password = $_GET['pwd'];

    // If username and password is filled out, and validates. Log user in
    if ($username != '' && $password != '' && validate_login($username, $password)) {
        // Login succes
        // 
        // 
        header('Location: insert.php');
        exit;
    } else {
        // login fail
        header('Location: index.php');
        exit;
    }

    function validate_login($pusername, $ppassword) {
        // Variables that hold the values for the connection
       	$server = 'localhost';
        $database = 'losfuegos';
        $username = 'root';
        $password = 'root';   
        // Create a new connection
        $con = new mysqli($server, $username, $password, $database);

     

        // If connection throws an error, means it didnt work
        if ($con->connect_errno) {
            echo "Failed to connect to MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
        }

        // Run query on connection
        $query = 'SELECT * FROM losfuegos.user WHERE user="' . $pusername . '" AND password="' . $ppassword.'"';
        $result = $con->query($query);



        if (mysqli_num_rows($result) > 0) {
            // A result was given, which means the user exists with these credentials
            return true;
        } else {
            // A result was not given, which means the user did not exists with these credentials
            return false;
        }
        }