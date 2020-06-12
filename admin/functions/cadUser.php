<?php
    include ('c:/laragon/www/blog/config/database.php');

    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_SPECIAL_CHARS);

    $query = $pdo->prepare("SELECT * FROM usuario WHERE email = :email");
    $query->bindValue(':email', $email);
    
    $query->execute();
    
    if ($query->rowCount() === 0) {
        $data = Date('Y/m/d');

        $exec = $pdo->prepare('INSERT INTO usuario (nome, email, senha, data) VALUES (:nome, :email, :senha, :data)');
        
        $passHash = md5($senha);
        
        $exec->bindValue(":nome", $nome);
        $exec->bindValue(":email", $email);
        $exec->bindValue(":senha", $passHash);
        $exec->bindValue(":data", $data);

        $exec->execute();
        header('location: http://localhost/blog/admin/index.php?page=user');
    }else {
        echo "Email já existe.";
    }

    
?>