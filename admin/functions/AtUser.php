<?php
    include ('c:/laragon/www/blog/config/database.php');

    $id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_SPECIAL_CHARS);

    $query = $pdo->prepare("UPDATE usuario SET nome = :nome, senha = :senha WHERE id = :id");
   
    $senhaHash = md5($senha);

    $query->bindValue(':nome', $nome);
    $query->bindValue(':senha', $senhaHash);
    $query->bindValue(':id', $id);
    
    $query->execute();

    if($query->rowCount() > 0){
        header('location: http://localhost/blog/admin/index.php?page=user');
      }else{
        echo "Deu ruim!";
      }

    
?>