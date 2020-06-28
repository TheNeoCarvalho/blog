<?php
    include ($_SERVER['DOCUMENT_ROOT'].'/blog/config/database.php');

    $id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

    $query = $pdo->prepare("DELETE FROM posts WHERE id = :id");
    $query->bindValue(':id', $id);

    $query->execute();
    header('location: http://localhost/blog/admin/index.php?page=posts');
?>
