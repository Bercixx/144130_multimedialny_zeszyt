<div class="row">
    <div class="col-md-12">
      	<div class="box box-success">
            <div class="box-header with-border">
              	<h3 class="box-title">Uwagi - dodawanie</h3>
            </div>
			<?php echo form_open('opiekun/uwagi_dodaj/'); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
                            <label for="tytul" class="control-label"></span>Tytuł</label>
                            <div class="form-group">
                                <input type="text" name="tytul" value="<?php echo ($this->input->post('tytul')); ?>" class="form-control" id="tytul" />
                                <span class="text-danger"><?php echo form_error('tytul');?></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="tresc" class="control-label"></span>Treść</label>
                            <div class="form-group">
                                <input type="text" name="tresc" value="<?php echo ($this->input->post('tresc')); ?>" class="form-control" id="tresc" />
                                <span class="text-danger"><?php echo form_error('tresc');?></span>
                            </div>
                        </div>
                       
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Zapisz
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>