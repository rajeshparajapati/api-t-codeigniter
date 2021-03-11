<div class="content-wrapper">
	<section class="content-header">
		<div class="row">
			<div class="col-md-3"><h3><?php echo $title ?></h3></div>
			<div class="col-md-9 text-right mt-20">
			
				<a href="<?php echo base_url('/product/add_product') ?>" class="btn btn-success btn-sm"><i class="fa fa-plus-circle"></i> Add Product</a>
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
							<th>Product Name</th>
							<th>Price</th>
							
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php 
					if(count($product_llist)){
						$i = 0;
						foreach($product_llist as $i=> $p){
							$i++;
					?>
						<tr>
							<td><?php echo ++$i; ?></td>						
							<td><?php echo $p['product_name'] ?></td>
							<td><?php echo $p['product_price'] ?></td>
							<td>
								<a href="<?php echo base_url('product/view/'.$p['product_id']) ?>" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye"></i></a>
								
							</td>
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
