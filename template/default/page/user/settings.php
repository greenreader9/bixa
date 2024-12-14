<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- Page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18"><?= $this->base->text($title, 'title') ?></h4>
                    </div>
                </div>
            </div>

            <!-- Name Settings -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0"><?= $this->base->text('your_name', 'label') ?></h4>
                        </div>
                        <div class="card-body">
                            <?= form_open('settings', ['class' => 'needs-validation']) ?>
                                <div class="mb-3">
                                    <label class="form-label"><?= $this->base->text('your_name', 'label') ?></label>
                                    <input type="text" name="name" class="form-control" 
                                           value="<?= $this->user->get_name() ?>" 
                                           placeholder="<?= $this->base->text('your_name', 'label') ?>" required>
                                </div>
                                <button type="submit" name="update_name" class="btn btn-primary waves-effect waves-light" value="change">
                                    <i data-feather="save" class="me-1"></i><?= $this->base->text('change', 'button') ?>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Security Settings -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0"><?= $this->base->text('security', 'heading') ?></h4>
                        </div>
                        <div class="card-body">
                            <?= form_open('settings', ['class' => 'needs-validation']) ?>
                                <?php if ($this->oauth->is_active('github')): ?>
                                    <a href="?enable_oauth=true" class="btn btn-dark w-100 mb-3">
                                        <i data-feather="github" class="me-1"></i>
                                        <?= $this->base->text('github_signin', 'button') ?>
                                    </a>
                                <?php endif ?>

                                <div class="mb-3">
                                    <label class="form-label"><?= $this->base->text('new_password', 'label') ?></label>
                                    <input type="password" name="password" class="form-control"
                                           placeholder="<?= $this->base->text('new_password', 'label') ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label"><?= $this->base->text('confirm_password', 'label') ?></label> 
                                    <input type="password" name="password1" class="form-control"
                                           placeholder="<?= $this->base->text('confirm_password', 'label') ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label"><?= $this->base->text('old_password', 'label') ?></label>
                                    <input type="password" name="old_password" class="form-control" 
                                           placeholder="<?= $this->base->text('old_password', 'label') ?>">
                                </div>
                                <button type="submit" name="update_password" class="btn btn-primary waves-effect waves-light" value="change">
                                    <i data-feather="key" class="me-1"></i><?= $this->base->text('change', 'button') ?>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>