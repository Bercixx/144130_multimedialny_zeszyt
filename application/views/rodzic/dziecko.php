

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Lista dzieci</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('rodzic/dziecko_dodaj'); ?>" class="btn btn-success btn-sm">Dodaj</a>
                </div>
            	
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Nazwisko</th>
						<th>Numer grupy</th>

                    </tr>
                    <?php foreach($dziecko as $p){ ?>
                    <tr>
						<td><?php echo $p['nazwisko']; ?></td>
                        <td><?php echo $p['nr_grupy']; ?></td>
                        
						
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>


