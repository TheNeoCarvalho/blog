<?php
    session_start();
    include ($_SERVER['DOCUMENT_ROOT'].'/blog/config/database.php');

    $id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);
    $titulo = filter_input(INPUT_POST, "titulo", FILTER_SANITIZE_SPECIAL_CHARS);
    // $conteudo = filter_input(INPUT_POST, "conteudo", FILTER_SANITIZE_SPECIAL_CHARS);
    $conteudo = filter_input(INPUT_POST, "conteudo");
    $publicado = filter_input(INPUT_POST, "pub", FILTER_SANITIZE_SPECIAL_CHARS);

    $query = $pdo->prepare("UPDATE posts SET titulo = :titulo, conteudo = :conteudo, publicado = :publicado WHERE id = :id");

    $query->bindValue(':titulo', $titulo);
    $query->bindValue(':conteudo', $conteudo);
    $query->bindValue(':publicado', $publicado);
    $query->bindValue(':id', $id);
    
    $query->execute();
        
    header('location: http://localhost/blog/admin/index.php?page=posts');
     
?>
