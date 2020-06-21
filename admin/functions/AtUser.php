<?php

    include ($_SERVER['DOCUMENT_ROOT'].'/blog/config/database.php');

    $id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_SPECIAL_CHARS);

    $sql = "SELECT * FROM usuario WHERE id = $id";
    $consulta = $pdo->prepare($sql);
    $consulta->execute();

    $dados = $consulta->fetchAll(PDO::FETCH_ASSOC);

    $antigaSenha = $dados[0]['senha'];
    $antigoAvatar = $dados[0]['avatar'];

    $query = $pdo->prepare("UPDATE usuario SET nome = :nome, senha = :senha, avatar = :avatar WHERE id = :id");

    $dir = "../uploads/";
    
   if(isset($_FILES['file'])){
     $nomeFoto = $_FILES['file']['name'];
     $ext = substr($nomeFoto, -3, 3);
      
     $nomeMd5 = md5(microtime());
     $avatar = "$nomeMd5.$ext";

     move_uploaded_file($_FILES['file']['tmp_name'], $dir.$avatar);

     if(empty($senha)){
        
        $query->bindValue(':nome', $nome);
        $query->bindValue(':senha', $antigaSenha);
        $query->bindValue(':avatar', $avatar);
        $query->bindValue(':id', $id);
        
        $query->execute();
        
        if($query->rowCount() == 0){
          echo "Deu ruim!";
        }  
        
      }else{
        
        $senhaHash = md5($senha);
        
        $query->bindValue(':nome', $nome);
        $query->bindValue(':senha', $antigaSenha);
        $query->bindValue(':avatar', $avatar);
        $query->bindValue(':id', $id);
        
        $query->execute();
        
        if($query->rowCount() == 0){
          echo "Deu ruim!";
        }  
        
      }
      header('location: http://localhost/blog/admin/index.php?page=profile');
   }else{
    if(empty($senha)){
  
        $query->bindValue(':nome', $nome);
        $query->bindValue(':senha', $antigaSenha);
        $query->bindValue(':avatar', $antigoAvatar);
        $query->bindValue(':id', $id);
        
        $query->execute();
    
        if($query->rowCount() == 0){
          echo "Deu ruim!";
        }  
    
      }else{
        
        $senhaHash = md5($senha);
  
        $query->bindValue(':nome', $nome);
        $query->bindValue(':senha', $senhaHash);
        $query->bindValue(':avatar', $antigoAvatar);
        $query->bindValue(':id', $id);
        
        $query->execute();
    
        if($query->rowCount() == 0){
            echo "Deu ruim!";
        }  
  
      }
      header('location: http://localhost/blog/admin/index.php?page=user');
   }

   
    
?>
