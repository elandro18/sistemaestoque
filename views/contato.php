
<div class="card card-info">
  <div class="card-header bg-secondary">
    <h2 class="card-title">Contato</h2>
  </div>

<form class="form-horizontal" method="POST">
    <div class="card-body">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nome:</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control"  placeholder="Nome" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">E-mail:</label>
            <div class="col-sm-10">
                <input type="email" name="email" class="form-control" placeholder="E-mail" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Título da mensagem:</label>
            <div class="col-sm-10">
                <input type="text" name="titulo" class="form-control"  placeholder="Título" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Mensagem:</label>
            <div class="col-sm-10">
                <textarea class="form-control"  name='mensagem'rows="5" placeholder="Escreva aqui sua mensagem...."></textarea>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-secondary btn-md">Adicionar Produto</button>                  
        </div>
    <!-- /.card-footer -->
    </div>
</form>
</div>

