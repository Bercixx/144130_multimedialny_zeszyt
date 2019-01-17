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
        
    </div>
</div>