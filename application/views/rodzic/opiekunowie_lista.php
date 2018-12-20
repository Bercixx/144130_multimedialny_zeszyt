<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Lista opiekunów</h3>
            	
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Imię</th>
						<th>Nazwisko</th>
						<th>Email</th>
                    </tr>
                    <?php foreach($opiekun as $op){ ?>
                    <tr>
						<td><?php echo $op['imie']; ?></td>
                        <td><?php echo $op['nazwisko']; ?></td>
                        <td><?php echo $op['email']; ?></td>
                       
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
