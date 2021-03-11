<div class="content-wrapper">
	<section class="content-header ">
		<div class="row">
			<div class="col-md-3"><h3><?php echo $title ?></h3></div>
			<div class="col-md-9 text-right mt-20">
				<!-- <a href="<?php //echo base_url(.'/users/') ?>" class="btn btn-success btn-sm"><i class="fa fa-backward"></i> Go Back</a> -->
			</div>
		</div>
	</section>
	<section class="content message">

		<form name="add-user">
		<div class="box box-default">

			<div class="pre-load"><span><i class="fa fa-circle-o-notch infinite"></i></span></div>
			<div class="box-header"><h3 class="box-title"><strong>Product Add</strong></h3></div>
			<div class="box-body">
				<div class="form-group">
					<div class="row">
						<div class="col-md-4">
							<label>Name <span style="color: red;">*</span></label>
							<input type="text" name="product_name" class="form-control" placeholder="Product Name" required>
						</div>
						<div class="col-md-4">
							<label>Price<span style="color: red;">*</span></label>
							<input type="number" name="product_price" class="form-control" placeholder="Price" required>
						</div>

						<div class="col-md-4">
							<a href="javascript:void(0)" class="btn btn-success btn-sm pull-right add-more"> Add More Image</a>
						</div>
						
					</div>
				</div>
				<div class="form-group product-image">
				<div class="row remove-div">
					
				<div class="col-md-3">
					<div class="row">
						<div class="col-md-9">
							<input type="file" name="product_image[]" required="">
						</div>
						<div class="col-md-3">
							<a href="javascript:void(0)" class="pull-right remove">Remove</a>
						</div>
					</div>					
				</div>
				</div>
				
				</div>
				
			</div>
		</div>
		<div class="text-right"><button type="submit" class="btn bg-orange btn-sm">Add Product</button></div>
		</form>
	</section>
</div>
<script>

$(document).ready(function(){

	product_image_field = $('.product-image').first().html();
	$('form[name="add-user"]').on('submit', function(e){
      e.preventDefault();
      $this = $(this);
      $('.pre-load').show();
      data = new FormData($(this)[0]);    
      $.ajax({
         url: base_url+'/product/add_product',
         type: 'POST',
         data: data,
         contentType: false,
         processData: false,
         success: function(data){
            data = data.split('####');
            $('.pre-load').hide();
            if(data[0] == 'error'){
             $('[name="add-user"]').prepend('<div class="alert alert-danger" role="alert" style="background-color:#ff851b; color:#fff;">'+data[1]+'</div>');  
            }
            if(data[0] == 'success'){
            	$('[name="add-user"]').prepend('<div class="alert alert-succcess" role="alert" style="background-color:#3c8dbc; color:#fff;">'+data[1]+'</div>');
            	setTimeout(function(){ location.reload(); }, 2000);        	        
            } 
         }
      });
   });

	$('.add-more').click(function(e){
		e.preventDefault();
		$('.product-image').append(product_image_field);
	})

	$('body').on('click','.remove',function(e){
		e.preventDefault();
		if($('.remove-div').length > 1){
			$(this).parents('.remove-div').remove();
		}else{
			alert('one image is required')
		}
	})


})
</script>