<?php var_dump($podopieczni);
    var_dump($opiekun_id);
    ?>

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Podopieczni</h3>
            	
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Nazwisko</th>
						<th>PESEL</th>

                    </tr>
                    <?php foreach($podopieczni as $p){ ?>
                    <tr>
						<td><?php echo $p['nazwisko']; ?></td>
						<td><?php echo $p['PESEL']; ?></td>
						
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>


