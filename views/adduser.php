<div class="card card-info">
  <div class="card-header bg-secondary">
    <h2 class="card-title">Adicionar Usuário</h2>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form class="form-horizontal" method="POST">
    <div class="card-body">
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Nome do Funcionário:</label>
        <div class="col-sm-10">
          <input type="text" name="name" class="form-control"  placeholder="Nome" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Mátricula do Func:</label>
        <div class="col-sm-10">
          <input type="text" name="user_number" class="form-control" placeholder="Mátricula" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Senha:</label>
        <div class="col-sm-10">
          <input type="password" name="user_pass" class="form-control"  placeholder="Senha" required>
        </div>
      </div>
      
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-secondary btn-md">Adicionar Funcionário</button>                  
    </div>
    <!-- /.card-footer -->
  </form>
    
</div>
<?php if (!empty($msg)): ?>
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-ban"></i> Alert!</h5>
        <?php echo $msg; ?>
    </div>
<?php endif; ?>