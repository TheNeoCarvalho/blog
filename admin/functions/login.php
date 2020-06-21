<?php
    session_start();
    include($_SERVER['DOCUMENT_ROOT'].'/blog/config/database.php');

    $sair = $_GET['sair'];

    if(!empty($sair) || isset($sair)){
      session_destroy();
      header('location: http://localhost/blog/admin/login.php');
    }else{
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_SPECIAL_CHARS);
        $hash = md5($senha);
        
        $consulta = $pdo->prepare("SELECT * FROM usuario WHERE email = :email AND senha = :senha LIMIT 1");
    
        $consulta->bindValue(':email', $email);
        $consulta->bindValue(':senha', $hash);
    
        $consulta->execute();
    
        if($consulta->rowCount() == 1){
            $usuario = $consulta->fetch(PDO::FETCH_OBJ);
            $_SESSION['user'] = $usuario->nome;
            $_SESSION['id'] = $usuario->id;
            header('location: http://localhost/blog/admin/');
            unlink($_SESSION['error']);
        }else{
  
            $_SESSION['error'] = 'Usuário e/ou Senha está errado!';
            header('location: http://localhost/blog/admin/login.php');
        }
    }

?>