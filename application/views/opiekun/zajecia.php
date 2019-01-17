<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Lista zajęć</h3>
            <div class="box-tools">
                    <a href="<?php echo site_url('opiekun/zajecia_dodaj'); ?>" class="btn btn-success btn-sm">Dodaj</a>
                </div>
                </div>
            

            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Nazwa</th>
						<th>Dzień tygodnia</th>
						<th>Data</th>
                    </tr>
                    <?php foreach($zajecia as $zaj){ ?>
                    <tr>
						<td><?php echo $zaj['nazwa']; ?></td>
                        <td><?php echo $zaj['dzien_tyg']; ?></td>
                        <td><?php echo $zaj['data']; ?></td>
                        <td>
                            <a href="<?php echo site_url('opiekun/zajecia_edytuj/'.$zaj['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edytuj</a>
                            <a href="<?php echo site_url('opiekun/zajecia_usun/'.$zaj['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Usuń</a>
                        </td>
                       
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
