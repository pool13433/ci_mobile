<h4 class="page-header">
    <small><i class="fa fa-mobile-phone"></i> <strong><?= $brand->name_th?></strong> ( <?=$brand->cnt?> ชิ้น)</small>
</h4>
<div class="row">   
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <div id="boxSearchResult" class="row">
            <?php foreach ($mobiles as $key => $mobile) { ?>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <div class="small-box <?php echo (empty($colors[$key]) ? 'bg-gray' : $colors[$key]) ?>">
                        <div class="inner">
                            <h4>
                                <?= $mobile->product_name ?>
                            </h4>
                            <p>
                                <?= (empty($mobile->series) ? '&nbsp' : $mobile->series) ?>
                            </p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-mobile-phone"></i>
                        </div>
                        <a class="small-box-footer" href="<?php echo site_url('mobile/item/' . $mobile->product_id . '?param1=' . $params['param1'] . '&param2=' . $params['param2']) ?>">
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


