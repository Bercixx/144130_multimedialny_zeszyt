<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">
                Strona główna
                </h3>
                <br>
                <br>
                <?php if(czyAdmin()): ?>
                    <a class="btn btn-app" href="<?= site_url('uzytkownicy/index') ?>">
                        <i class="fa fa-users"></i> Użytkownicy
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>