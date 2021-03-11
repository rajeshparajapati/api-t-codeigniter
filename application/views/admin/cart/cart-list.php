<div class="content-wrapper">
	<section class="content-header">
		<div class="row">
			<div class="col-md-3"><h3><?php echo $title ?></h3></div>
			<div class="col-md-9 text-right mt-20">
			
			</div>
		</div>
	</section>
	<section class="content">
	
		<div class="box box-primary">
			<div class="box-body">
				<table id="users-list" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Sr.No.</th>
							<th>Firsr Name</th>
							<th>Last Name</th>
							<th>Product Name</th>							
							<th>Product Price</th>
							<th>Quantity</th>
						</tr>
					</thead>
					<tbody>
					<?php 
					if(count($carts)){
						$i = 0;
						foreach($carts['data'] as $i=> $c){
					
						?>
						<tr>
							<td><?php echo ++$i; ?></td>						
							<td><?php echo $c->first_name ?></td>
							<td><?php echo $c->last_name; ?></td>
							<td><?php echo $c->product_name ?></td>
							<td><?php echo $c->product_price ?></td>
							<td><?php echo $c->quantity; ?></td>
							
						</tr>
					<?php
						}
					} 
					?>
					</tbody>
				</table>
			</div>
		</div>
	</section>
</div>
<script type="text/javascript">
	$('#users-list').DataTable();
</script>