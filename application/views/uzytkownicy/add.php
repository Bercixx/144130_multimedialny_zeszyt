<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Dodaj użytkownika</h3>
            </div>
            <?php echo form_open('uzytkownicy/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="email" class="control-label"><span class="text-danger">*</span>Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="haslo" class="control-label"><span class="text-danger">*</span>Haslo</label>
						<div class="form-group">
							<input type="text" name="haslo" value="" class="form-control" id="haslo" />
							<span class="text-danger"><?php echo form_error('haslo');?></span>
						</div>
					</div>
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
						<label for="typ" class="control-label"><span class="text-danger">*</span>Typ</label>
						<div class="form-group">
                            <?= form_dropdown('typ',['admin'=>'Admin','opiekun'=>'Opiekun','podopieczny'=>'Podopieczny'],$this->input->post('typ'), 'class="form-control" id="typ"') ?>
							<span class="text-danger"><?php echo form_error('typ');?></span>
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