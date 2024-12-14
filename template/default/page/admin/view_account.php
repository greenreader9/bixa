<!-- Main Content -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- Page Title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Account Details</h4>
                    </div>
                </div>
            </div>
<!-- Alert Messages -->
<?php $time = $data['account_time'] + 3600; ?>
<?php if ($time > time()) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i data-feather="clock" class="me-2"></i>
        Some of the hosting features may not work. It may take up to 72 hours for the account to work properly...
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<?php if ($data['account_status'] === 'pending') : ?>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <i data-feather="info" class="me-2"></i>
        This hosting account is pending activation and will be activated soon...
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php elseif ($data['account_status'] === 'reactivating') : ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <i data-feather="alert-triangle" class="me-2"></i>
        This hosting account is reactivating and will be activated soon...
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php elseif ($data['account_status'] === 'deactivating') : ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <i data-feather="alert-triangle" class="me-2"></i>
        This hosting account is deactivating and will be deactivated soon...
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php elseif ($data['account_status'] === 'suspended') : ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i data-feather="alert-circle" class="me-2"></i>
        This hosting account is suspended due to the reason provided in your email and will be completely removed within 30 days...
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php elseif ($data['account_status'] === 'deactivated') : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i data-feather="check-circle" class="me-2"></i>
        This hosting account is deactivated and will be completely removed within 30 days...
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>
            <!-- Stats Cards -->
            <div class="row">
                <!-- Status Card -->
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-primary-subtle text-primary rounded-3">
                                        <i data-feather="server" class="font-size-24"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <p class="text-muted mb-2">Status</p>
                                    <?php if ($data['account_status'] === 'active'): ?>
                                        <span class="badge rounded-pill bg-success"><?= $data['account_status'] ?></span>
                                    <?php elseif ($data['account_status'] === 'suspended'): ?>
                                        <span class="badge rounded-pill bg-danger"><?= $data['account_status'] ?></span>
                                    <?php else: ?>
                                        <span class="badge rounded-pill bg-warning"><?= $data['account_status'] ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bandwidth Card -->
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-success-subtle text-success rounded-3">
                                        <i data-feather="bar-chart-2" class="font-size-24"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <p class="text-muted mb-2">Bandwidth</p>
                                    <h5 class="mb-0">Unlimited</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Disk Card -->
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-warning-subtle text-warning rounded-3">
                                        <i data-feather="database" class="font-size-24"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <p class="text-muted mb-2">Disk</p>
                                    <h5 class="mb-0">5 GB</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Domain Card -->
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-danger-subtle text-danger rounded-3">
                                        <i data-feather="globe" class="font-size-24"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <p class="text-muted mb-2">Domain</p>
                                    <h5 class="mb-0">
                                        <?php if ($data['account_status'] === 'active'): ?>
                                            <?php 
                                                $domains = $this->account->get_domains($data['account_username'], $data['account_password'], $data['account_domain']);
                                                echo count($domains); 
                                            ?>
                                        <?php else: ?>
                                            0
                                        <?php endif; ?>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-6 col-lg-3">
                                    <a href="<?= $data['account_status'] === 'active' ? base_url() . 'admin/account/view/' . $id . '?login=true' : '#' ?>" 
                                       class="btn btn-primary w-100 waves-effect waves-light <?= $data['account_status'] !== 'active' ? 'disabled' : '' ?>"
                                       target="_blank">
                                        <i data-feather="monitor" class="font-size-16 align-middle me-2"></i>
                                        Control Panel
                                    </a>
                                </div>

                                <div class="col-md-6 col-lg-3">
                                    <a href="<?= $data['account_status'] === 'active' ? $this->account->create_fm_link($data['account_username'], $data['account_password']) : '#' ?>" 
                                       class="btn btn-info w-100 waves-effect waves-light <?= $data['account_status'] !== 'active' ? 'disabled' : '' ?>"
                                       target="_blank">
                                        <i data-feather="folder" class="font-size-16 align-middle me-2"></i>
                                        File Manager
                                    </a>
                                </div>

                                <div class="col-md-6 col-lg-3">
                                    <a href="https://sv1.scriptinstall.rocks:2083/login/?user=<?=$data['account_username']?>&pass=<?= $data['account_password']?>" 
                                       class="btn btn-secondary w-100 waves-effect waves-light <?= $data['account_status'] !== 'active' ? 'disabled' : '' ?>"
                                       target="_blank">
                                        <i data-feather="box" class="font-size-16 align-middle me-2"></i>
                                        Softaculous
                                    </a>
                                </div>

                                <div class="col-md-6 col-lg-3">
                                    <a href="<?= base_url() ?>admin/account/settings/<?= $id ?>" 
                                       class="btn btn-dark w-100 waves-effect waves-light <?= $data['account_status'] !== 'active' ? 'disabled' : '' ?>">
                                        <i data-feather="settings" class="font-size-16 align-middle me-2"></i>
                                        Settings
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Account Details & Connection Details -->
            <div class="row">
                <!-- Account Details -->
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Account Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-nowrap mb-0">
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <div class="d-flex align-items-center">
                                                    <i data-feather="user" class="font-size-20 text-primary me-2"></i>
                                                    Username
                                                </div>
                                            </th>
                                            <td><?= $data['account_status'] === 'active' ? $data['account_username'] : 'Loading' ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="d-flex align-items-center">
                                                    <i data-feather="key" class="font-size-20 text-primary me-2"></i>
                                                    Password
                                                </div>
                                            </th>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span id="password-hidden" class="">••••••••</span>
                                                    <span id="password-shown" class="d-none">
                                                        <?= $data['account_status'] === 'active' ? $data['account_password'] : '••••••••' ?>
                                                    </span>
                                                    <a href="javascript:void(0);" onclick="togglePassword()" class="text-muted ms-2">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="d-flex align-items-center">
                                                    <i data-feather="server" class="font-size-20 text-primary me-2"></i>
                                                    Nameserver
                                                </div>
                                            </th>
                                            <td>
                                                <?php if ($data['account_status'] === 'active'): ?>
                                                    <?= $data['account_domain'] ?>
                                                <?php else: ?>
                                                    Loading
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="d-flex align-items-center">
                                                    <i data-feather="globe" class="font-size-20 text-primary me-2"></i>
                                                    Domain
                                                </div>
                                            </th>
                                            <td>
                                                <?php if ($data['account_status'] === 'active'): ?>
                                                    <?= $data['account_domain'] ?>
                                                <?php else: ?>
                                                    Loading
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Connection Details -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Connection Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-nowrap mb-0">
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <div class="d-flex align-items-center">
                                                    <i data-feather="database" class="font-size-20 text-primary me-2"></i>
                                                    MySQL Host
                                                </div>
                                            </th>
                                            <td><?= $data['account_status'] === 'active' ? str_replace('cpanel', $data['account_sql'], $this->mofh->get_cpanel()) : 'Loading' ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="d-flex align-items-center">
                                                    <i data-feather="git-commit" class="font-size-20 text-primary me-2"></i>
                                                    Port
                                                </div>
                                            </th>
                                            <td>3306</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="d-flex align-items-center">
                                                    <i data-feather="server" class="font-size-20 text-primary me-2"></i>
                                                    FTP Host
                                                </div>
                                            </th>
                                            <td>ftpupload.net</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="d-flex align-items-center">
                                                    <i data-feather="git-commit" class="font-size-20 text-primary me-2"></i>
                                                    Port
                                                </div>
                                            </th>
                                            <td>21</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function togglePassword() {
    var hidden = document.getElementById('password-hidden');
    var shown = document.getElementById('password-shown');
    
    if (hidden.classList.contains('d-none')) {
        hidden.classList.remove('d-none');
        shown.classList.add('d-none');
    } else {
        hidden.classList.add('d-none');
        shown.classList.remove('d-none');
    }
}

// Initialize Feather Icons
document.addEventListener('DOMContentLoaded', function() {
    feather.replace();
});
</script>