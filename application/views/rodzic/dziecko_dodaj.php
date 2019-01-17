<div class="row">
    <div class="col-md-12">
      	<div class="box box-success">
            <div class="box-header with-border">
              	<h3 class="box-title">Dodaj użytkownika</h3>
            </div>
            <?php echo form_open('rodzic/dziecko_dodaj'); 
            var_dump(sizeof($opiekun));
            ?>
          	<div class="box-body">
          		<div class="row clearfix">
					
					
					<div class="col-md-6">
						<label for="imie" class="control-label"><span class="text-danger">*</span>Imie</label>
						<div class="form-group">
							<input type="text" name="imie" value="<?php echo $this->input->post('imie'); ?>" class="form-control" id="imie" />
							<span class="text-danger"><?php echo form_error('imie');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nazwisko" class="control-label"><span class="text-danger">*</span>Nazwisko</label>
						<div class="form-group">
							<input type="text" name="nazwisko" value="<?php echo $this->input->post('nazwisko'); ?>" class="form-control" id="nazwisko" />
							<span class="text-danger"><?php echo form_error('nazwisko');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nr_grupy" class="control-label"><span class="text-danger">*</span>Numer grupy</label>
						<div class="form-group">
							<input type="text" name="nr_grupy" value="<?php echo $this->input->post('nr_grupy'); ?>" class="form-control" id="nr_grupy" />
							<span class="text-danger"><?php echo form_error('nr_grupy');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="opiekun" class="control-label"><span class="text-danger">*</span>Opiekun</label>
						<div class="form-group">
                        
                            <?= form_dropdown('opiekun',[  $opiekun[0]['id'] =>  $opiekun[0]['nazwisko']." ".$opiekun[0]['imie']],$this->input->post('opiekun'), 'class="form-control" id="opiekun"') ?>
                            <span class="text-danger"><?php echo form_error('opiekun');?></span>
                           
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