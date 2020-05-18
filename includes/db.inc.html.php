<?php

    try
    {
        $pdo = new PDO('mysql:host=localhost;dbname=ellynmic_aith', 'ellynmic_aith_user', 'aithpassword');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec('SET NAMES "utf8"');
    }
    catch (PDOException $e)
    {
        $error = 'Unable to connect to the database server.';
        include 'includes/error.html.php';
        exit();
    }

?>