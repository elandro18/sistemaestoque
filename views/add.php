<div class="card card-info">
  <div class="card-header bg-secondary">
    <h2 class="card-title">Adicionar Produto</h2>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form class="form-horizontal" method="POST">
    <div class="card-body">
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Código de Barras:</label>
        <div class="col-sm-10">
          <input type="text" name="cod" class="form-control"  placeholder="Código" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Nome do Produto</label>
        <div class="col-sm-10">
          <input type="text" name="name" class="form-control" placeholder="Produto" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Preço do Produto</label>
        <div class="col-sm-10">
          <input type="text" name="price" class="form-control"  placeholder="Preço" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Quantidade do Estoque</label>
        <div class="col-sm-10">
          <input type="text" name="quantity" class="form-control" placeholder="QTD" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Quantidade Mínima</label>
        <div class="col-sm-10">
          <input type="text" name="min_quantity" class="form-control" placeholder="QTD min" required>
        </div>
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-secondary btn-md">Adicionar Produto</button>                  
    </div>
    <!-- /.card-footer -->
  </form>
</div>