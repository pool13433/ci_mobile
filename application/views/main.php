<!--<section class="content">

    <div class="error-page">
        <form class="search-form" name="" method="get" action="<?= site_url('mobile/search') ?>">
            <div class="row">
                <div class="col-xs-4">
                    <div class="form-group">
                        <input type="text" name="param1" placeholder="Enter ..." class="form-control">
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="form-group">
                        <select class="form-control" name="param2">
                            <option value="">-- --</option>
                            <?php foreach ($list_brand as $key => $brand) { ?>
                                <option value="<?= $brand->brand_id ?>"><?= $brand->name_th ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-block">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div> /.error-page 

</section>-->

<section class="content">
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-9">

            <section class="content">
                <h4 class="page-header">
                    MOBILE BRANDS
                </h4>
                <!-- Card Box-->
                <div class="row">
                    <?php foreach ($list_brand as $key => $brand) { ?>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <!-- small box -->
                            <div class="small-box <?php echo (empty($colors[$key]) ? '' : $colors[$key]) ?>">
                                <div class="inner">
                                    <h3>
                                        <?= $brand->name_th ?>
                                    </h3>
                                    <p>
                                        <?= $brand->cnt ?> ชิ้น
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="glyphicon glyphicon-phone"></i>
                                </div>
                                <a class="small-box-footer" href="<?= site_url('mobile/search?param2=' . $brand->brand_id) ?>">
                                    รุ่นมือถือที่เกี่ยวข้อง... <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                    <?php } ?>
                </div>  
            </section>


            <section class="content">
                <h4 class="page-header">
                    FEATURED
                    <small></small>
                </h4>

                <!-- ********************* group 1 *************************-->
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title"><i class="fa fa-dashboard"></i> เน้นประสิทธิภาพ</h3>
                    </div>
                    <div class="box-body">

                        <h4 class="page-header">                           
                            <small><i class="fa fa-cog"></i> ความเร็วหน่วยประมวลผล (CPU)</small>
                        </h4>
                        <div class="row">
                            <?php foreach ($list_cpu_core as $key => $core) { ?>                                            
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <a href="<?= site_url('mobile/search?param4=cpu_core&param5=' . $core->data_value) ?>">
                                        <!-- Danger box -->
                                        <div class="small-box <?php echo $colors[$key] ?>">
                                            <div class="inner">
                                                <h3>
                                                    <?= $core->data_value ?> Ghz 
                                                </h3>
                                                <p>
                                                    <?= $core->data_cnt ?> รุ่น
                                                </p>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-cogs"></i>
                                            </div>
                                            <span class="small-box-footer">
                                                รุ่นมือถือที่เกี่ยวข้อง... <i class="fa fa-arrow-circle-right"></i>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                        

                        <h4 class="page-header">
                            <small><i class="fa fa-cogs"></i> จำนวนหน่วยประมวลผล</small>
                        </h4>
                        <div class="row">
                            <?php foreach ($list_cpu_vol as $key => $vol) { ?>                                            
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <a href="<?= site_url('mobile/search?param4=cpu_vol&param5=' . $vol->data_value) ?>">
                                        <div class="small-box <?php echo $colors[$key] ?>">
                                            <div class="inner">
                                                <h3>
                                                    <?= $vol->data_value ?> Core 
                                                </h3>
                                                <h4>
                                                    <?= $vol->data_cnt ?> รุ่น
                                                </h4>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-cog"></i>
                                            </div>
                                            <span class="small-box-footer">
                                                รุ่นมือถือที่เกี่ยวข้อง... <i class="fa fa-arrow-circle-right"></i>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                        

                        <h4 class="page-header">
                            <small><i class="fa fa-save"></i> หน่วยความจำ (RAM)</small>
                        </h4>
                        <div class="row">
                            <?php foreach ($list_ram as $key => $ram) { ?>                                            
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <a href="<?= site_url('mobile/search?param4=ram&param5=' . $ram->data_value) ?>">
                                        <!-- Danger box -->
                                        <div class="small-box <?php echo $colors[$key] ?>">
                                            <div class="inner">
                                                <h3>
                                                    <?= $ram->data_value ?> GB
                                                </h3>
                                                <p>
                                                    <?= $ram->data_cnt ?> รุ่น
                                                </p>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-save"></i>
                                            </div>
                                            <span class="small-box-footer">
                                                รุ่นมือถือที่เกี่ยวข้อง... <i class="fa fa-arrow-circle-right"></i>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>

                        <h4 class="page-header">
                            <small><i class="fa fa-flash"></i> ความจะแบตเตอรี่</small>
                        </h4>
                        <div class="row">
                            <?php foreach ($list_bat as $key => $batt) { ?>                                            
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <a href="<?= site_url('mobile/search?param4=batt&param5=' . $batt->data_value) ?>">
                                        <!-- Danger box -->
                                        <div class="small-box <?php echo $colors[$key] ?>">
                                            <div class="inner">
                                                <h3>
                                                    <?= $batt->data_value ?> Mah
                                                </h3>
                                                <p>
                                                    <?= $batt->data_cnt ?> รุ่น
                                                </p>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-flash"></i>
                                            </div>
                                            <span class="small-box-footer">
                                                รุ่นมือถือที่เกี่ยวข้อง... <i class="fa fa-arrow-circle-right"></i>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- ********************* group 2 *************************-->
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title"><i class="fa fa-camera"></i> เน้นถ่ายรูป เซลฟี่</h3>
                    </div>
                    <div class="box-body">

                        <h4 class="page-header">                           
                            <small><i class="fa fa-camera-retro"></i> กล้องหน้า</small>
                        </h4>
                        <div class="row">
                            <?php foreach ($list_cam_f as $key => $camf) { ?>                                            
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <a href="<?= site_url('mobile/search?param4=cam_f&param5=' . $camf->data_value) ?>">
                                        <div class="small-box <?php echo $colors[$key] ?>">
                                            <div class="inner">
                                                <h3>
                                                    <?= $camf->data_value ?> MP
                                                </h3>
                                                <h4>
                                                    <?= $camf->data_cnt ?> รุ่น
                                                </h4>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-camera-retro"></i>
                                            </div>
                                            <span class="small-box-footer">
                                                รุ่นมือถือที่เกี่ยวข้อง... <i class="fa fa-arrow-circle-right"></i>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>

                        <h4 class="page-header">
                            <small><i class="fa fa-camera"></i> กล้องหลัง</small>
                        </h4>
                        <div class="row">
                            <?php foreach ($list_cam_b as $key => $camb) { ?>                                            
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <a href="<?= site_url('mobile/search?param4=cam_b&param5=' . $camb->data_value) ?>">
                                        <!-- Danger box -->
                                        <div class="small-box <?php echo $colors[$key] ?>">
                                            <div class="inner">
                                                <h3>
                                                    <?= $camb->data_value ?> MP
                                                </h3>
                                                <p>
                                                    <?= $camb->data_cnt ?> รุ่น
                                                </p>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-camera"></i>
                                            </div>
                                            <span class="small-box-footer">
                                                รุ่นมือถือที่เกี่ยวข้อง... <i class="fa fa-arrow-circle-right"></i>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>

                        <h4 class="page-header">
                            <small><i class="glyphicon glyphicon-hdd"></i> ความจำในตัวเครื่อง </small>
                        </h4>
                        <div class="row">
                            <?php foreach ($list_rom as $key => $rom) { ?>                                            
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <a href="<?= site_url('mobile/search?param4=rom_in&param5=' . $rom->data_value) ?>">
                                        <!-- Danger box -->
                                        <div class="small-box <?php echo $colors[$key] ?>">
                                            <div class="inner">
                                                <h3>
                                                    <?= $rom->data_value ?> GB
                                                </h3>
                                                <p>
                                                    <?= $rom->data_cnt ?> รุ่น
                                                </p>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-hdd-o"></i>
                                            </div>
                                            <span class="small-box-footer">
                                                รุ่นมือถือที่เกี่ยวข้อง... <i class="fa fa-arrow-circle-right"></i>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>

                        <h4 class="page-header">
                            <small><i class="fa fa-credit-card"></i> ความจำภายนอก (SD Card)</small>
                        </h4>
                        <div class="row">
                            <?php foreach ($list_rom_ext as $key => $romext) { ?>                                            
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <a href="<?= site_url('mobile/search?param4=rom_ext&param5=' . $romext->data_value) ?>">
                                        <!-- Danger box -->
                                        <div class="small-box <?php echo $colors[$key] ?>">
                                            <div class="inner">
                                                <h3>
                                                    <?= $romext->data_value ?>  GB
                                                </h3>
                                                <p>
                                                    <?= $romext->data_cnt ?> รุ่น
                                                </p>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-credit-card"></i>
                                            </div>
                                            <span class="small-box-footer">
                                                รุ่นมือถือที่เกี่ยวข้อง... <i class="fa fa-arrow-circle-right"></i>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- ********************* group 3 *************************-->
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title"><i class="fa fa-legal"></i> เน้นประโยชน์ใช้สอย</h3>
                    </div>
                    <div class="box-body">
                        <!-- เน้นประสิทธิภาพ-->
                        <h4 class="page-header">                           
                            <small><i class="fa fa-tablet"></i> ขนาดหน้าจอ</small>
                        </h4>
                        <div class="row">
                            <?php foreach ($list_screen as $key => $screen) { ?>                                            
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <a href="<?= site_url('mobile/search?param4=screen_size&param5=' . $screen->data_value) ?>">
                                        <div class="small-box <?php echo $colors[$key] ?>">
                                            <div class="inner">
                                                <h3>
                                                    <?= $screen->data_value ?> Inch
                                                </h3>
                                                <h4>
                                                    <?= $screen->data_cnt ?> รุ่น
                                                </h4>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-tablet"></i>
                                            </div>
                                            <span class="small-box-footer">
                                                รุ่นมือถือที่เกี่ยวข้อง... <i class="fa fa-arrow-circle-right"></i>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>

                        <h4 class="page-header">
                            <small><i class="fa fa-suitcase"></i> น้ำหนัก</small>
                        </h4>
                        <div class="row">
                            <?php foreach ($list_weight as $key => $weight) { ?>                                            
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <a href="<?= site_url('mobile/search?param4=weight&param5=' . $weight->data_value) ?>">
                                        <!-- Danger box -->
                                        <div class="small-box <?php echo $colors[$key] ?>">
                                            <div class="inner">
                                                <h3>
                                                    <?= $weight->data_value ?> กรัม
                                                </h3>
                                                <p>
                                                    <?= $weight->data_cnt ?> รุ่น
                                                </p>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-suitcase"></i>
                                            </div>
                                            <span class="small-box-footer">
                                                รุ่นมือถือที่เกี่ยวข้อง... <i class="fa fa-arrow-circle-right"></i>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>

                        <h4 class="page-header">
                            <small><i class="fa fa-ticket"></i> จำนวน Sim Card</small>
                        </h4>
                        <div class="row">
                            <?php foreach ($list_sim as $key => $sim) { ?>                                            
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <a href="<?= site_url('mobile/search?param4=sim&param5=' . $sim->data_value) ?>">
                                        <!-- Danger box -->
                                        <div class="small-box <?php echo $colors[$key] ?>">
                                            <div class="inner">
                                                <h3>
                                                    <?= $sim->data_value ?> Sim
                                                </h3>
                                                <p>
                                                    <?= $sim->data_cnt ?> รุ่น
                                                </p>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-ticket"></i>
                                            </div>
                                            <span class="small-box-footer">
                                                รุ่นมือถือที่เกี่ยวข้อง... <i class="fa fa-arrow-circle-right"></i>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>

                    </div>
                </div>

            </section>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-3">
            <?php include 'sidebar_product_last.php'; ?>
        </div>
    </div>

</section>