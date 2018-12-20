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
                <?php elseif (czyRodzic()): ?>
                    <a class="btn btn-app" href="<?= site_url('rodzic/kalendarz') ?>">
                        <i class="fa fa-calendar"></i> Kalendarz
                    </a>
                    <a class="btn btn-app" href="<?= site_url('rodzic/lekarstwa_lista') ?>">
                        <i class="fa fa-heartbeat"></i> Lekarstwa
                    </a>
                    <a class="btn btn-app" href="<?= site_url('rodzic/zajecia') ?>">
                        <i class="fa fa-mortar-board"></i> Zajęcia
                    </a>
                    <a class="btn btn-app" href="<?= site_url('rodzic/opiekunowie_lista') ?>">
                        <i class="fa fa-user"></i> Opiekunowie
                    </a>
                    <a class="btn btn-app" href="<?= site_url('rodzic/uwagi') ?>">
                        <i class="fa fa-exclamation"></i> Uwagi
                    </a>
                   
                <?php elseif (czyOpiekun()): ?>
                    <a class="btn btn-app" href="<?= site_url('opiekun/kalendarz') ?>">
                        <i class="fa fa-calendar"></i> Kalendarz
                    </a>
                    
                    <a class="btn btn-app" href="<?= site_url('opiekun/zajecia') ?>">
                        <i class="fa fa-mortar-board"></i> Zajęcia
                    </a>
                    <a class="btn btn-app" href="<?= site_url('opiekun/podopieczni_lista') ?>">
                        <i class="fa fa-user"></i> Podopieczni
                    </a>
                    <a class="btn btn-app" href="<?= site_url('opiekun/notatki') ?>">
                        <i class="fa fa-file-text-o"></i> Notatki
                    </a>
                
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>