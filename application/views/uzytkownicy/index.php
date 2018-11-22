<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Uzytkownicy</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('uzytkownicy/add'); ?>" class="btn btn-success btn-sm">Dodaj</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Email</th>
						<th>Imie</th>
						<th>Nazwisko</th>
						<th>Typ</th>
						<th>Akcje</th>
                    </tr>
                    <?php foreach($uzytkownicy as $u){ ?>
                    <tr>
						<td><?php echo $u['id']; ?></td>
						<td><?php echo $u['email']; ?></td>
						<td><?php echo $u['imie']; ?></td>
						<td><?php echo $u['nazwisko']; ?></td>
						<td><?php echo $u['typ']; ?></td>
						<td>
                            <a href="<?php echo site_url('uzytkownicy/edit/'.$u['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edytuj</a>
                            <a href="<?php echo site_url('uzytkownicy/remove/'.$u['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Usuń</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
