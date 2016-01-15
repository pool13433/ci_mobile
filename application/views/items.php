<div class="row">   
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <div class="row">
            <?php foreach ($mobiles as $key => $mobile) { ?>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>
                                <?= $mobile->product_name ?>
                            </h3>
                            <p>
                                <?= $mobile->series ?>
                            </p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-mobile-phone"></i>
                        </div>
                        <a class="small-box-footer" href="<?php echo site_url('mobile/item/'.$mobile->product_id.'?param1='.$params['param1'].'&param2='.$params['param2'])?>">
                                รายละเอียด <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
     <div class="col-lg-3 col-md-3 col-md-12 col-xs-12">
        <?php include 'sidebar_brand.php'; ?>
    </div>
</div>


