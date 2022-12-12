<?php 
function db_conn()
{
    $server_name = "localhost";
    $username = "root";
    $password = "";
    $dbname = "product";

    try {
        $conn = new PDO('mysql:host='.$server_name.';dbname='.$dbname.';charset=utf8', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        // var_dump($conn) ;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $conn;
}
