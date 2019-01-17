<div class="col-md-9">
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title"><?php echo $uwagi['tytul'];?></h3>              
        </div>
        <div class="mailbox-read-message">
        <?php echo $uwagi['uwaga'];?>
        </div>
        <br>
        <?php if($uwagi['koment']!=NULL) {?>
        <div class="box-header">
        
        <p><label>Komentarz rodzica: </label></p>
        <?php echo $uwagi['koment'];?>
        </div>
        <?php } ?>
        <?php echo form_open('rodzic/komentarz/'.$uwagi['id']); ?>
        <div class="box-header">
            <p><label>Komentarz</label></p>
            <input type="text" name="koment" value="<?php echo ($this->input->post('koment')); ?>" class="form-control" id="koment" />
            <br>
            <div class="box-footer">
            <button type="submit" class="btn btn-success" >
                <i class="fa fa-check"></i> Zapisz
			</button>
            </div>
        </div>
        <?php echo form_close(); ?>
        
    </div>
</div>