	

<div class="card card-info">
	<div class="card-header bg-secondary">
        <h2 class="card-title">Pesquisa Rápida</h2>
    </div>
	<form  method="GET">		              
		<div class="col-sm-10 form-search">
			<input type="text" class="form-control  .form-control-lg" name="busca" id="busca" value="<?php echo (!empty($_GET['busca']))?$_GET['busca']:''; ?>" placeholder="Digite o código de barra ou o nome do produto"><br>
		</div>		
	</form>
</div><br>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header bg-gray ">
				<h3 class="card-title">Lista de Produtos</h3>
			</div>
			<!-- /.card-header -->
			<div class="card-body table-responsive p-0" style="height: 300px;">
				<table class="table table-head-fixed">
					<thead>
						<tr>
							<th>Cod</th>
							<th>Nome</th>
							<th>Preço</th>
							<th>Qtd.</th>
							<th>Ações</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($list as $item): ?>
						<tr>
							<td><?php echo $item['cod']; ?></td>
							<td><?php echo $item['name'];?></td>
							<td>R$ <?php echo number_format($item['price'],2,',','.');?></td>
							<td><?php echo $item['quantity'];?></td>
							<td>				
								<a href="<?php echo BASE_URL;?>home/edit/<?php echo $item['id']; ?>">Editar</a>
                				<a href="<?php echo BASE_URL;?>home/delete/<?php echo $item['id']; ?>">Deletar</a>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>		
		</div>	
	</div>
</div>
<script type="text/javascript">
	document.getElementById("busca").focus();
</script>
