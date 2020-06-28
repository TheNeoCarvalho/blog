<?php
    include ($_SERVER['DOCUMENT_ROOT'].'/blog/config/database.php');

        $titulo = filter_input(INPUT_POST, "titulo", FILTER_SANITIZE_SPECIAL_CHARS);
        $conteudo = filter_input(INPUT_POST, "conteudo", FILTER_SANITIZE_SPECIAL_CHARS);
        $publicado = filter_input(INPUT_POST, "pub", FILTER_SANITIZE_SPECIAL_CHARS);

        $data = Date('Y/m/d');

      
        $exec = $pdo->prepare('INSERT INTO posts (titulo, conteudo, data, publicado) VALUES (:titulo, :conteudo, :data, :publicado)');
        
        $exec->bindValue(":titulo", $titulo);
        $exec->bindValue(":conteudo", $conteudo);
        $exec->bindValue(":data", $data);
        $exec->bindValue(":publicado", $publicado);

        $exec->execute();
        header('location: http://localhost/blog/admin/index.php?page=posts');
 
    
?>
