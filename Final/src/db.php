<?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "forma_baigiamasis");

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    if($mysqli->connect_error) {
        echo 'Klaida: ' . $mysqli->connect_error;
    }

    mysqli_query($mysqli, "INSERT INTO clients (name, email, subject, phone, message)
    VALUES ('$_POST[name]', '$_POST[email]', '$_POST[subject]', '$_POST[phone]', '$_POST[message]')");
