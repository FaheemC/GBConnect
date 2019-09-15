<?php
    define('HOST','gblearn.com');
    define('USER','f6team29_Haitham');
    define('PASS','team29');
    define('DATABASE','f6team29_schooldb');
    $conn = new mysqli(HOST,USER,PASS,DATABASE);

    if($conn->connect_errno)
    {
        die('Cannot connect to database, please try again later');
    }
