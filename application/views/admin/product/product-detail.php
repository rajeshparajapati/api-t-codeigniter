<!-- <style type="text/css">
    .no-border{border: 0px !important;}
    .no-border th,.no-border td{border: 0px !important;}
</style> -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="row">
            <div class="col-md-3"><h3><?php echo $title ?></h3></div>
            <div class="col-md-9 text-right mt-20">
                <a href="<?php echo base_url('/product/') ?>" class="btn btn-success btn-sm"><i class="fa fa-backward"></i> Go Back</a>
            </div>
        </div>
</section>
<section class="content ">
    <div class="tab-content box box-primary">
        <div class="active tab-pane" id="product-detail">
            <div class="box box-primary" style="border-top:0px !important;">
                <div class="box-header">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="gray-box">
                                    <div class="row">
                                          <div class="col-sm-4 border-right">
                                            <div class="description-block">
                                                <h5 class="description-header">Product Name</h5> <span class="description-text"><?php echo $product_detail['product_name'] ?></span> </div>
                                        </div>
                                        <div class="col-sm-4 border-right">
                                            <div class="description-block">
                                                <h5 class="description-header">Product Price</h5> <span class="description-text"><?php echo $product_detail['product_price'] ?></span> </div>
                                        </div>
                                        <div class="col-sm-4">
                                          
                                        </div>                                       

                                    </div>
                                </div>

                                <div class="gray-box">
                                    <div class="row">
                                        <?php foreach ($product_detail['images'] as $pd) { ?>
                                         
                                       
                                          <div class="col-sm-1 border-right">
                                            <div class="description-block">
                                              <img src="<?php echo $pd['image_path'] ?>" style="width: 120px;">
                                            </div>
                                        </div>
                                      <?php } ?>
                                                                             

                                    </div>
                                </div>
    



                           
                      
                        

                         

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>




</div>





