<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Lista zajęć</h3>
            	
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
                       
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
