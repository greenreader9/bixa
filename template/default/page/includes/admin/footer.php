</div>
            <!-- end main content-->
        </div>
        <!-- END layout-wrapper -->

        <!-- Footer -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © <?= $this->base->text('company', 'paragraph') ?>.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            <?= $this->base->text('made', 'paragraph') ?> <?= $this->base->text('company', 'paragraph') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT -->
        <script src="<?= base_url()?>assets/<?= $this->base->get_template() ?>/libs/jquery/jquery.min.js"></script>
        <script src="<?= base_url()?>assets/<?= $this->base->get_template() ?>/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url()?>assets/<?= $this->base->get_template() ?>/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?= base_url()?>assets/<?= $this->base->get_template() ?>/libs/simplebar/simplebar.min.js"></script>
        <script src="<?= base_url()?>assets/<?= $this->base->get_template() ?>/libs/node-waves/waves.min.js"></script>
        <script src="<?= base_url()?>assets/<?= $this->base->get_template() ?>/libs/feather-icons/feather.min.js"></script>
        <script>
    if (typeof feather !== 'undefined') {
        feather.replace();
    }
</script>
        <!-- pace js -->
        <script src="<?= base_url()?>assets/<?= $this->base->get_template() ?>/libs/pace-js/pace.min.js"></script>

        <!-- apexcharts -->
        <script src="<?= base_url()?>assets/<?= $this->base->get_template() ?>/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Plugins js-->
        <script src="<?= base_url()?>assets/<?= $this->base->get_template() ?>/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="<?= base_url()?>assets/<?= $this->base->get_template() ?>/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
        <!-- dashboard init -->
        <script src="<?= base_url()?>assets/<?= $this->base->get_template() ?>/js/pages/dashboard.init.js"></script>

        <script src="<?= base_url()?>assets/<?= $this->base->get_template() ?>/js/app.js"></script>
    </body>