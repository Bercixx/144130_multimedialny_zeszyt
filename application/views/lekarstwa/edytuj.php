<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Lekarstwa - edytowanie</h3>
            </div>
			<?php echo form_open('rodzic/lekarstwa_edytuj/'.$leki['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
                            <label for="nazwa" class="control-label"><span class="text-danger">*</span>Nazwa</label>
                            <div class="form-group">
                                <input type="text" name="nazwa" value="<?php echo ($this->input->post('nazwa') ? $this->input->post('nazwa') : $leki['nazwa']); ?>" class="form-control" id="nazwa" />
                                <span class="text-danger"><?php echo form_error('nazwa');?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="dawkowanie" class="control-label"><span class="text-danger">*</span>Dawkowanie</label>
                            <div class="form-group">
                                <input type="text" name="dawkowanie" value="<?php echo ($this->input->post('dawkowanie') ? $this->input->post('dawkowanie') : $leki['dawkowanie']); ?>" class="form-control" id="dawkowanie" />
                                <span class="text-danger"><?php echo form_error('dawkowanie');?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="zalecenia" class="control-label"><span class="text-danger">*</span>Zalecenia</label>
                            <div class="form-group">
                                <input type="text" name="zalecenia" value="<?php echo ($this->input->post('zalecenia') ? $this->input->post('zalecenia') : $leki['zalecenia']); ?>" class="form-control" id="zalecenia" />
                                <span class="text-danger"><?php echo form_error('zalecenia');?></span>
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