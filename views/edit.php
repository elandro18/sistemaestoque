

<div class="card card-info">
  <div class="card-header bg-secondary">
    <h2 class="card-title">Editar Produto</h2>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form class="form-horizontal" method="POST">
    <div class="card-body">
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Código de Barras:</label>
        <div class="col-sm-10">
          <input type="text" name="cod" class="form-control"  placeholder="Código" value="<?php echo $info['cod']; ?>" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Nome do Produto</label>
        <div class="col-sm-10">
          <input type="text" name="name" class="form-control" placeholder="Produto" value="<?php echo $info['name']; ?>" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Preço do Produto</label>
        <div class="col-sm-10">
          <input type="text" name="price" class="form-control"  placeholder="Preço" value="<?php echo number_format($info['price'], 2, ',', '.'); ?>"  required>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Quantidade do Estoque</label>
        <div class="col-sm-10">
          <input type="text" name="quantity" class="form-control" placeholder="QTD" value="<?php echo number_format($info['quantity'],2,',','.'); ?>" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Quantidade Mínima</label>
        <div class="col-sm-10">
          <input type="text" name="min_quantity" class="form-control" placeholder="QTD min"  value="<?php echo number_format($info['min_quantity'],2,',','.') ;  ?>"  required>
        </div>
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-secondary btn-md">Salvar</button>                  
    </div>
    <!-- /.card-footer -->
  </form>
</div>
<?php if (!empty($warning)): ?>
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-ban"></i> Alert!</h5>
        <?php echo $warning; ?>
    </div>
<?php endif; ?>