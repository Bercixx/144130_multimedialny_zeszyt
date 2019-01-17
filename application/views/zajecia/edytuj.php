<div class="row">
    <div class="col-md-12">
      	<div class="box box-success">
            <div class="box-header with-border">
              	<h3 class="box-title">Edytuj zajecia</h3>
            </div>
			<?php echo form_open('opiekun/zajecia_edytuj/'.$zajecia[0]['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nazwa" class="control-label"><span class="text-danger">*</span>Nazwa</label>
						<div class="form-group">
							<input type="text" name="nazwa" value="<?php echo ($this->input->post('nazwa') ? $this->input->post('nazwa') : $zajecia[0]['nazwa']); ?>" class="form-control" id="nazwa" />
							<span class="text-danger"><?php echo form_error('nazwa');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="typ" class="control-label"><span class="text-danger">*</span>Dzień tygodnia</label>
						<div class="form-group">
                            <?= form_dropdown('dzien_tyg',['Pon'=>'Poniedziałek','Wt'=>'Wtorek','Śr'=>'Środa','Czw'=>'Czwartek','Pt'=>'Piątek'],$this->input->post('dzien_tyg') ? $this->input->post('dzien_tyg') : $zajecia[0]['dzien_tyg'], 'class="form-control" id="dzien_tyg"') ?>
							<span class="text-danger"><?php echo form_error('dzien_tyg');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="data" class="control-label">Data</label>
						<div class="form-group">
							<input type="date" name="data" value="<?php echo ($this->input->post('data') ? $this->input->post('data') : $zajecia[0]['data']); ?>" class="form-control" id="data" />
							<span class="text-danger"><?php echo form_error('data');?></span>
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