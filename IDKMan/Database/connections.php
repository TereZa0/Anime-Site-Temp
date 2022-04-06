<?php

$servername = "sql6.freemysqlhosting.net";
$username = "sql6483090";
$password = "Z2wIfs6Anp";
$db = "sql6483090";

try {
    $connect = mysqli_connect($servername, $username, $password, $db);
    // phpinfo();
    echo "Succes Connecting";
} catch (Exception) {
    echo "Database Connection Error" + $connect->error;
}