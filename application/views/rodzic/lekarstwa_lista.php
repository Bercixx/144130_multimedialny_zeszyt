<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Lista lekarstw</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('rodzic/lekarstwa_dodaj'); ?>" class="btn btn-success btn-sm">Dodaj</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Nazwa</th>
						<th>Dawkowanie</th>
						<th>Zalecenia</th>
                    </tr>
                    <?php foreach($lekarstwa as $lek){ ?>
                    <tr>
						<td><?php echo $lek['nazwa']; ?></td>
                        <td><?php echo $lek['dawkowanie']; ?></td>
                        <td><?php echo $lek['zalecenia']; ?></td>
						<td>
                            <a href="<?php echo site_url('rodzic/lekarstwa_edytuj/'.$lek['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edytuj</a> 
                            <a href="<?php echo site_url('rodzic/lekarstwa_usun/'.$lek['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Usuń</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
