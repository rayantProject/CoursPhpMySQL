<?php

try {
    $mysqlConnection = new PDO(
        'mysql:host=localhost;dbname=test;charset=utf8',
        'root',
        ''
    );
} catch (Exception $e)
{
        die('Error : ' . $e->getMessage());
}


?>


