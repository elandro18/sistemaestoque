

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header bg-gray ">
				<h3 class="card-title">Relatório</h3>
			</div>
			<!-- /.card-header -->
			<div class="card-body table-responsive p-0" style="height: 300px;">
				<table class="table table-head-fixed">
					<thead>
						<tr>
							<th>Cod</th>
							<th>Nome</th>
							<th>Qtd.</th>
							<th>Min Qtd.</th>
							<th>Diferença</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($list as $item): ?>
						<tr>
							<td><?php echo $item['cod']; ?></td>
							<td><?php echo $item['name'];?></td>
							<td><?php echo $item['quantity'];?></td>
							<td><?php echo $item['min_quantity'];?></td>
							<td><?php echo (floatval($item['min_quantity']) - floatval($item['quantity'])); ?></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>		
		</div>	
	</div>
</div>
