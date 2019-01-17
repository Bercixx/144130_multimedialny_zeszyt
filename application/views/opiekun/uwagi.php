<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Uwagi</h3> 
                <div class="box-tools">
                <a href="<?php echo site_url('opiekun/uwagi_dodaj'); ?>" class="btn btn-success btn-sm">Dodaj</a> 
                </div>        	
            </div>
            <?php foreach($uwagi as $uw){ ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-success collapsed-box">
                        <div class="box-header with-border">
                            <h3 class="box-title">
                                <a href="<?= site_url('opiekun/komentarz/'.$uw['id']) ?>" style="color:black">
                                <?php echo $uw['tytul']; ?>
                                </a>
                            </h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                                </button>
                            </div>
                        <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                        <?php echo $uw['uwaga']; ?>
                        </div>
                        <!-- /.box-body -->
                    </div>
                
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

