<div class="content-wrapper">

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark" style="padding-bottom: 10px;">Cadastrar Usuários</h1>
          </div>
        </div>
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Novo Usuário</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="http://localhost/blog/admin/functions/cadUser.php" method="POST">
                <div class="card-body">
                <form>
                  <div class="form-group">
                    <label for="exampleInputName">Nome</label>
                    <input type="text" name="nome" class="form-control" id="exampleInputEmail1" placeholder="Digite aqui...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="Digite aqui...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputSenha">Senha</label>
                    <input type="password" name="senha" class="form-control" id="exampleInputPassword" placeholder="Digite aqui...">
                  </div>
                  <div>
                    <button type="submit" class="btn btn-primary">ENVIAR</button>
                  </div>
                </div>
                </form>
      </div>
</div>
</div>
</div>
</div>