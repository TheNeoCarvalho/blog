<?php

include('../config/config.php');

$pdo = new PDO(DRIVER.":host=".HOST.";dbname=".DB, USER, PASS);

?>