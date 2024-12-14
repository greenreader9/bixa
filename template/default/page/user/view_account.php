<!-- Main Content -->
<div class="main-content">
   <div class="page-content">
       <div class="container-fluid">

           <!-- Page Title -->
           <div class="row">
               <div class="col-12">
                   <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                       <h4 class="mb-sm-0 font-size-18"><?= $this->base->text('account_details', 'heading') ?></h4>
                   </div>
               </div>
           </div>

           <?php if($this->session->flashdata('msg')): ?>
               <?php $msg = json_decode($this->session->flashdata('msg'), true); ?>
               <div class="alert alert-<?= $msg[0] ? 'success' : 'danger' ?> alert-dismissible fade show" role="alert">
                   <?= $msg[1] ?>
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
           <?php endif; ?>

           <!-- Pending Alert -->
           <?php if($data['account_status'] === 'pending'): ?>
               <?php $time = $data['account_time'] + 3600; ?>
               <?php if($time > time()): ?>
                   <div class="alert alert-success alert-dismissible fade show" role="alert">
                       <i data-feather="clock" class="me-2"></i>
                       <?= $this->base->text('account_note', 'paragraph') ?>
                       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                   </div>
               <?php endif; ?>
           <?php endif; ?>

           <!-- Status Alerts -->
           <?php if($data['account_status'] === 'pending'): ?>
               <div class="alert alert-info alert-dismissible fade show" role="alert">
                   <i data-feather="info" class="me-2"></i>
                   <?= $this->base->text('account_pending', 'paragraph') ?>
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
           <?php elseif($data['account_status'] === 'reactivating'): ?>
               <div class="alert alert-warning alert-dismissible fade show" role="alert">
                   <i data-feather="alert-triangle" class="me-2"></i>
                   <?= $this->base->text('account_reactivating', 'paragraph') ?>
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
           <?php elseif($data['account_status'] === 'deactivating'): ?>
               <div class="alert alert-warning alert-dismissible fade show" role="alert">
                   <i data-feather="alert-triangle" class="me-2"></i>
                   <?= $this->base->text('account_deactivating', 'paragraph') ?>
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
           <?php elseif($data['account_status'] === 'suspended'): ?>
               <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   <i data-feather="alert-circle" class="me-2"></i>
                   <?= $this->base->text('account_suspended', 'paragraph') ?>
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
           <?php elseif($data['account_status'] === 'deactivated'): ?>
               <div class="alert alert-success alert-dismissible fade show" role="alert">
                   <i data-feather="check-circle" class="me-2"></i>
                   <?= $this->base->text('account_deactivated', 'paragraph') ?>
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
                                   <p class="text-muted mb-2"><?= $this->base->text('status', 'table') ?></p>
                                   <?php if($data['account_status'] === 'active'): ?>
                                       <span class="badge rounded-pill bg-success"><?= $this->base->text($data['account_status'], 'table') ?></span>
                                   <?php elseif($data['account_status'] === 'suspended'): ?>  
                                       <span class="badge rounded-pill bg-danger"><?= $this->base->text('suspended', 'table') ?></span>
                                   <?php else: ?>
                                       <span class="badge rounded-pill bg-warning"><?= ucfirst($data['account_status']) ?></span>
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
                                   <p class="text-muted mb-2"><?= $this->base->text('bandwidth', 'table') ?></p>
                                   <h5 class="mb-0"><?= $this->base->text('unlimited', 'table') ?></h5>
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
                                   <p class="text-muted mb-2"><?= $this->base->text('disk', 'table') ?></p>
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
                                   <p class="text-muted mb-2"><?= $this->base->text('domain', 'table') ?></p>
                                   <h5 class="mb-0">
                                       <?php if($data['account_status'] === 'active'): ?>
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
                               <!-- Control Panel -->
                               <div class="col-md-6 col-lg-3">
                                   <a href="<?= $data['account_status'] === 'active' ? base_url() . 'account/view/' . $id . '/cpanel' : '#' ?>" 
                                      class="btn btn-primary w-100 waves-effect waves-light <?= $data['account_status'] !== 'active' ? 'disabled' : '' ?>">
                                       <i data-feather="monitor" class="font-size-16 align-middle me-2"></i>
                                       <?= $this->base->text('control_panel', 'button') ?>
                                   </a>
                               </div>

                               <!-- File Manager -->
                               <div class="col-md-6 col-lg-3">
                                   <a href="<?= $data['account_status'] === 'active' ? base_url() . 'account/view/' . $id . '/filemanager' : '#' ?>"
                                      class="btn btn-info w-100 waves-effect waves-light <?= $data['account_status'] !== 'active' ? 'disabled' : '' ?>" 
                                      <?= $data['account_status'] === 'active' ? 'target="_blank"' : '' ?>>
                                       <i data-feather="folder" class="font-size-16 align-middle me-2"></i>
                                       <?= $this->base->text('file_manager', 'button') ?>
                                   </a>
                               </div>

                               <!-- Conditional Button -->
                               <?php if($data['account_status'] === 'suspended'): ?>
                                   <div class="col-md-6 col-lg-3">
                                       <a href="<?= base_url() ?>ticket/create" 
                                          class="btn btn-warning w-100 waves-effect waves-light">
                                           <i data-feather="tag" class="font-size-16 align-middle me-2"></i>
                                           <?= $this->base->text('open_ticket', 'button') ?>
                                       </a>
                                   </div>
                               <?php elseif($data['account_status'] === 'deactivated'): ?>
                                   <div class="col-md-6 col-lg-3">
                                       <a href="<?= base_url() ?>account/view/<?= $id ?>?reactivate=true" 
                                          class="btn btn-success w-100 waves-effect waves-light">
                                           <i data-feather="refresh-cw" class="font-size-16 align-middle me-2"></i>
                                           <?= $this->base->text('reactivate', 'button') ?>
                                       </a>
                                   </div>
                               <?php else: ?>
                                   <div class="col-md-6 col-lg-3">
                                       <a href="<?= $data['account_status'] === 'active' ? base_url() . 'account/view/' . $id . '/softaculous' : '#' ?>" 
                                          class="btn btn-secondary w-100 waves-effect waves-light">
                                           <i data-feather="box" class="font-size-16 align-middle me-2"></i>
                                           <?= $this->base->text('softaculous', 'button') ?>
                                       </a>
                                   </div>
                               <?php endif; ?>

                               <!-- Settings -->
                               <div class="col-md-6 col-lg-3">
                                   <a href="<?= $data['account_status'] === 'active' ? base_url() . 'account/settings/' . $id : '#' ?>" 
                                      class="btn btn-dark w-100 waves-effect waves-light <?= $data['account_status'] !== 'active' ? 'disabled' : '' ?>">
                                       <i data-feather="settings" class="font-size-16 align-middle me-2"></i>
                                       <?= $this->base->text('settings', 'button') ?>
                                   </a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

           <!-- Account Info & Connection Info -->
           <div class="row">
               <!-- Account Info -->
               <div class="col-lg-8">
                   <div class="card">
                       <div class="card-header">
                           <h4 class="card-title mb-0"><?= $this->base->text('account_details', 'heading') ?></h4>
                       </div>
                       <div class="card-body">
                           <div class="table-responsive">
                               <table class="table table-nowrap mb-0">
                                   <tbody>
                                       <tr>
                                           <th scope="row">
                                               <div class="d-flex align-items-center">
                                                   <i data-feather="user" class="font-size-20 text-primary me-2"></i>
                                                   <?= $this->base->text('username', 'table') ?>
                                               </div>
                                           </th>
                                           <td><?= $data['account_status'] === 'active' ? $data['account_username'] : $this->base->text('loading', 'label') ?></td>
                                       </tr>
                                       <tr>
                                           <th scope="row">
                                               <div class="d-flex align-items-center">
                                                   <i data-feather="key" class="font-size-20 text-primary me-2"></i>
                                                   <?= $this->base->text('password', 'table') ?>
                                               </div>
                                           </th>
                                           <td>
                                               <div class="d-flex align-items-center">
                                                   <span id="password-hidden">••••••••</span>
                                                   <span id="password-shown" class="d-none">
                                                       <?= $data['account_status'] === 'active' ? $data['account_password'] : '••••••••' ?>
                                                   </span>
                                                   <a href="javascript:void(0);" onclick="togglePassword()" class="text-muted ms-2">
                                                       <i class="fas fa-eye"></i>
                                                   </a>
                                               </div>
                                           </td>
                                       </tr>
                                       <tr>
                                           <th scope="row">
                                               <div class="d-flex align-items-center">
                                                   <i data-feather="server" class="font-size-20 text-primary me-2"></i>
                                                   <?= $this->base->text('nameserver', 'table') ?>
                                               </div>
                                           </th>
                                           <td>
                                               <?php if($data['account_status'] === 'active'): ?>
                                                   <?php
                                                       $mainDomain = $data['account_domain'];
                                                       $parts = explode('.', $mainDomain);
                                                       if(count($parts) > 2) {
                                                           array_shift($parts);
                                                           $baseDomain = implode('.', $parts);
                                                       } else {
                                                           $baseDomain = $mainDomain;
                                                       }
                                                   ?>
                                                   ns1.<?= $baseDomain ?>
                                                   ns2.<?= $baseDomain ?>
                                               <?php else: ?>
                                                   <?= $this->base->text('loading', 'label') ?>
                                               <?php endif; ?>
                                           </td>
                                       </tr>
                                       <tr>
                                           <th scope="row">
                                               <div class="d-flex align-items-center">
                                                   <i data-feather="globe" class="font-size-20 text-primary me-2"></i>
                                                   <?= $this->base->text('domain', 'table') ?>
                                               </div>
                                           </th>
                                           <td>
                                               <?php if($data['account_status'] === 'active'): ?>
                                                   <?php $domains = $this->account->get_domains($data['account_username'], $data['account_password'], $data['account_domain']) ?>
                                                   <?php if(count($domains) > 0): ?>
                                                       <?php foreach($domains as $domain): ?>
                                                           <?= $domain['domain'] ?><br>
                                                       <?php endforeach; ?>
                                                   <?php else: ?>
                                                       <?= $this->base->text('domain_list', 'paragraph') ?>
                                                   <?php endif; ?>
                                               <?php else: ?>
                                                   <?= $this->base->text('domain_list', 'paragraph') ?>
                                               <?php endif; ?>
                                           </td>
                                       </tr>
                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>
               </div>

               <!-- Connection Info -->
               <div class="col-lg-4">
                   <div class="card">
                       <div class="card-header">
                           <h4 class="card-title mb-0"><?= $this->base->text('connection_details', 'heading') ?></h4>
                       </div>
                       <div class="card-body">
                           <div class="table-responsive">
                               <table class="table table-nowrap mb-0">
                                   <tbody>
                                       <tr>
                                           <th scope="row">
                                               <div class="d-flex align-items-center">
                                                   <i data-feather="database" class="font-size-20 text-primary me-2"></i>
                                                   <?= $this->base->text('mysql', 'table') ?>
                                               </div>
                                           </th>
                                           <td><?= $data['account_status'] === 'active' ? str_replace('cpanel', $data['account_sql'], $this->mofh->get_cpanel()) : $this->base->text('loading', 'label') ?></td>
                                       </tr>
                                       <tr>
                                           <th scope="row">
                                               <div class="d-flex align-items-center">
                                                   <i data-feather="git-commit" class="font-size-20 text-primary me-2"></i>
                                                   <?= $this->base->text('port', 'table') ?>
                                               </div>
                                           </th>
                                           <td>3306</td>
                                       </tr>
                                       <tr>
                                           <th scope="row">
                                               <div class="d-flex align-items-center">
                                                   <i data-feather="server" class="font-size-20 text-primary me-2"></i>
                                                   <?= $this->base->text('ftp', 'table') ?>
                                               </div>
                                           </th>
                                           <td>ftpupload.net</td>
                                       </tr>
                                       <tr>
                                           <th scope="row">
                                               <div class="d-flex align-items-center">
                                                   <i data-feather="git-commit" class="font-size-20 text-primary me-2"></i>
                                                   <?= $this->base->text('port', 'table') ?>
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
   
   if(hidden.classList.contains('d-none')) {
       hidden.classList.remove('d-none');
       shown.classList.add('d-none');
   } else {
       hidden.classList.add('d-none');
       shown.classList.remove('d-none');
   }
}

// Initialize Feather Icons
feather.replace();
</script>