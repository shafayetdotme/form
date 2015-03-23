<?php 


/*
 * The Query Method
 * Anti-Pattern
 */


date_default_timezone_set('Asia/Dhaka');




try {
    $DBH = new PDO('mysql:host=localhost;dbname=auth', 'root', '');
    $DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>


