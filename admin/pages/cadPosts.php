<div class="content-wrapper">

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark" style="padding-bottom: 10px;">Cadastrar Usuários</h1>
          </div>
        </div>
        <div class="col-md-12">
        <div class="card">
            <!-- general form elements -->
              <!-- /.card-header -->
              <!-- form start -->
              <form action="http://localhost/blog/admin/functions/cadPosts.php" method="POST">
                <div class="card-body">
                <form>
                  <div class="form-group">
                    <label for="exampleInputName">Título</label>
                    <input type="text" name="titulo" class="form-control" id="exampleInputEmail1" placeholder="Digite aqui...">
                  </div>
                  <div class="form-group">
                  <label for="exampleInputName">Conteúdo</label>
                   <textarea name="conteudo" id="conteudo">
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
