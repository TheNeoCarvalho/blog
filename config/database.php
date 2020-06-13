<?php

include($_SERVER['DOCUMENT_ROOT'].'/blog/config/config.php');

$pdo = new PDO(DRIVER.":host=".HOST.";dbname=".DB, USER, PASS);

?>