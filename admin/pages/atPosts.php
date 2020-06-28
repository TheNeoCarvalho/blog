<?php
    include ($_SERVER['DOCUMENT_ROOT'].'/blog/config/database.php');
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    $query = $pdo->prepare("SELECT * FROM posts WHERE id = :id");
    $query->bindValue(':id', $id);

    $query->execute();

    $consulta = $query->fetch(PDO::FETCH_OBJ);

    if($consulta->publicado  == 1){
      $pubS = true;
    }else{
      $pubN = false;
    }

   
?>
<div class="content-wrapper">

<div class="content-header">
<?= $consulta->publicado;?>
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark" style="padding-bottom: 10px;">Atualizar Posts</h1>
          </div>
        </div>
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form action="http://localhost/blog/admin/functions/atPosts.php" method="POST">
                <div class="card-body">
                <form>
                  <input type="hidden" name="id" value="<?= $consulta->id?>">
                  <div class="form-group">
                    <label for="exampleInputName">Título</label>
                    <input type="text" value="<?= $consulta->titulo; ?>" name="titulo" class="form-control" id="exampleInputEmail1" placeholder="Digite aqui...">
                  </div>
                  <div class="form-group">
                  <label for="exampleInputName">Conteúdo</label>
                   <textarea name="conteudo" id="conteudo">
                   <?= $consulta->conteudo; ?>
                   </textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputSenha">Publicado?</label>
                    <input type="radio" name="pub" value="S">Sim
                    <input type="radio" name="pub" value="N">Não
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

<script>
  tinymce.init({
  selector: 'textarea#conteudo',
  height: 500,
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table paste code help wordcount',
  ],
  toolbar: 'undo redo | formatselect | ' +
  'bold italic backcolor | alignleft aligncenter ' +
  'alignright alignjustify | bullist numlist outdent indent | ' +
  'removeformat  | image | help',
  content_css: '//www.tiny.cloud/css/codepen.min.css'
});
</script>
