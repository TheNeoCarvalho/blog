<div class="content-wrapper">

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Usuários cadastrados</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a class="btn btn-warning" href="?page=cadUser">
                <i class="fas fa-plus"></i>
                  ADICIONAR USUÁRIO
              </a>
            </ol>
          </div>
        </div>
        <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>NOME</th>
                      <th>EMAIL</th>
                      <th>DATA</th>
                      <th>AÇÕES</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    
                    $sql = "SELECT * FROM usuario";
                    $consulta = $pdo->prepare($sql);
                    $consulta->execute();

                    $dados = $consulta->fetchAll(PDO::FETCH_OBJ);

                    foreach($dados as $dado) {
                      $date = date_create($dado->data);

                  ?>
                    <tr>
                      <td><?= $dado->id ?></td>
                      <td><?= $dado->nome?></td>
                      <td><?= $dado->email?></td>
                      <td><?= date_format($date, 'd/m/Y')?></td>
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
                    
                    <?php } ?>
                  </tbody>
                </table>
</div>
      </div>
</div>

</div>
