<?php
   $dsn = 'mysql:host=sql2.njit.edu;dbname= mtf22';
    $username = 'mtf22';
    $password = 'OvUrubgD';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>
