<div class="row">    
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

        <section class="content-header">
            <h1>
                <?= $product->product_name ?>
                <small>Control panel</small>
            </h1>
        </section>

        <div id="loading-example" class="box box-danger">
            <div class="box-body no-padding">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!-- Performanc-->
                        <section class="content-header">
                            <h3>               
                                <i class="fa fa-dashboard"></i>  <u>เน้นประสิทธิภาพ</u>
                            </h3>
                        </section>
                        <section class="content">
                            <!-- Small boxes (Stat box) -->
                            <div class="row">
                                <?php foreach ($performanc_attr as $key => $attr) { ?>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                        <!-- small box -->
                                        <div class="small-box bg-aqua">
                                            <div class="inner">
                                                <h3>
                                                    <?php echo $product->$key ?> <?php echo $attr['caption'] ?>
                                                </h3>
                                                <p>
                                                    <strong><?php echo $attr['desc'] ?></strong>
                                                </p>
                                            </div>
                                            <div class="icon">
                                                <i class="<?php echo $attr['icon'] ?>"></i>
                                            </div>
                                            <a class="small-box-footer" href="#" onclick="modalRelateTarget(<?= $product->product_id ?>)">
                                                More info <i class="fa fa-arrow-circle-right"></i>
                                            </a>
                                        </div>
                                    </div><!-- ./col -->
                                <?php } ?>

                            </div>
                        </section>


                        <!-- Mutimedia-->
                        <section class="content-header">
                            <h3>                
                                <i class="fa fa-camera"></i>  <u> เน้นถ่ายรูป เซลฟี่</u>
                            </h3>
                        </section>
                        <section class="content">
                            <!-- Small boxes (Stat box) -->
                            <div class="row">
                                <?php foreach ($mutimedia_attr as $key => $attr) { ?>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                        <!-- small box -->
                                        <div class="small-box bg-aqua">
                                            <div class="inner">
                                                <h3>
                                                    <?php echo $product->$key ?> <?php echo $attr['caption'] ?>
                                                </h3>
                                                <p>
                                                    <strong><?php echo $attr['desc'] ?></strong>
                                                </p>
                                            </div>
                                            <div class="icon">
                                                <i class="<?php echo $attr['icon'] ?>"></i>
                                            </div>
                                            <a class="small-box-footer" href="#">
                                                More info <i class="fa fa-arrow-circle-right"></i>
                                            </a>
                                        </div>
                                    </div><!-- ./col -->
                                <?php } ?>

                            </div>
                        </section>


                        <!-- Performanc-->
                        <section class="content-header">
                            <h3>                
                                <i class="fa fa-legal"></i>  <u> เน้นประโยชน์ใช้สอย</u>
                            </h3>
                        </section>
                        <section class="content">
                            <!-- Small boxes (Stat box) -->
                            <div class="row">
                                <?php foreach ($ass_attr as $key => $attr) { ?>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                        <!-- small box -->
                                        <div class="small-box bg-aqua">
                                            <div class="inner">
                                                <h3>
                                                    <?php echo $product->$key ?> <?php echo $attr['caption'] ?>
                                                </h3>
                                                <p>
                                                    <strong><?php echo $attr['desc'] ?></strong>
                                                </p>
                                            </div>
                                            <div class="icon">
                                                <i class="<?php echo $attr['icon'] ?>"></i>
                                            </div>
                                            <a class="small-box-footer" href="#">
                                                More info <i class="fa fa-arrow-circle-right"></i>
                                            </a>
                                        </div>
                                    </div><!-- ./col -->
                                <?php } ?>

                            </div>
                        </section>

                        <section>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="box box-solid">
                                        <div class="box-header">
                                            <h3 class="box-title">Progress bars</h3>
                                        </div><!-- /.box-header -->
                                        <div class="box-body">
                                            <div class="progress">
                                                <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-green">
                                                    <span class="sr-only">40% Complete (success)</span>
                                                </div>
                                            </div>
                                            <div class="progress">
                                                <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-aqua">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress">
                                                <div style="width: 60%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-yellow">
                                                    <span class="sr-only">60% Complete (warning)</span>
                                                </div>
                                            </div>
                                            <div class="progress">
                                                <div style="width: 80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-red">
                                                    <span class="sr-only">80% Complete</span>
                                                </div>
                                            </div>
                                        </div><!-- /.box-body -->
                                    </div><!-- /.box -->
                                </div><!-- /.col (right) -->
                            </div>
                        </section>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class="col-lg-3 col-md-3 col-md-12 col-xs-12">
        <?php include 'sidebar_brand.php'; ?>
    </div>
</div>

<?php include 'modal_relate.php'; ?>

<script type="text/javascript">
    function modalRelateTarget(productId) {
        console.log('modalRelate');
        $('#modalRelate').modal('show');
    }
</script>
