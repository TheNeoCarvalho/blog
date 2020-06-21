<div class="content-wrapper">

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Posts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a class="btn btn-warning" href="?page=cadUser">
                <i class="fas fa-plus"></i>
                  ADICIONAR POST
              </a>
            </ol>
          </div>
        </div>
        <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>TÍTULO</th>
                      <th>DATA DA PUBLICAÇÃO</th>
                      <th>PUBLICADO</th>
                      <th>AÇÕES</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    
                    $sql = "SELECT * FROM posts";
                    $consulta = $pdo->prepare($sql);
                    $consulta->execute();

                    if($consulta->rowCount() == 0){
                      echo "<tr>
                              <td colspan='6' align='center'>Você não possui nenhum post :(</td>
                            </tr>";
                    }else{
                        
                      $dados = $consulta->fetchAll(PDO::FETCH_OBJ);

                      foreach($dados as $dado) {
                        $date = date_create($dado->data);

                  ?>
                    <tr>
                      <td><?= $dado->id ?></td>
                      <td><?= $dado->titulo?></td>
                      <td><?= date_format($date, 'd/m/Y')?></td>
                      <td>
                        <?php
                        if($dado->publicado === "S"){
                          echo '<i class="fas fa-check"></i>';
                        }else{
                          echo '<i class="fas fa-times"></i>';
                        }
                        ?>
                  
                      </td>
                      <td>
                        <a class="btn btn-secondary <?= $_SESSION['id'] == $dado->id? 'disabled': ''?>" onclick="return confirm('Deseja realmente deletar?')" href="functions/delUser.php?id=<?= $dado->id ?>">
                          <i class="far fa-trash-alt"></i> 
                            DELETAR
                        </a>
                        <a class="btn btn-info" href="?page=AtUser&id=<?= $dado->id ?>">
                          <i class="far fa-edit"></i>
                            ATUALIZAR
                          </a>
                      </td>
                    </tr>
                    
                    <?php 
                      }
                    } 
                    ?>
                    <?php echo 'Nome: '.$_SESSION['user']?>
                    
                  </tbody>
                </table>
</div>
      </div>
</div>

</div>
