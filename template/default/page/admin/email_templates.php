<!-- Main Content -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- Page Title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Email Templates</h4>
                    </div>
                </div>
            </div>

            <!-- Email Templates Table -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Your Templates</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-nowrap mb-0">
                                    <thead>
                                        <tr>
                                            <th width="5%">ID</th>
                                            <th width="75%">Subject</th>
                                            <th width="15%">Trigger</th>
                                            <th width="5%" class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (count($list) > 0): ?>
                                            <?php foreach ($list as $item): ?>
                                                <tr>
                                                    <td><?php echo $count = $count ?? 1 ?></td>
                                                    <td><?= $item['email_subject'] ?></td>
                                                    <td>
                                                        <span class="badge bg-primary">
                                                            <?= strtoupper($item['email_id']) ?>
                                                        </span>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="<?= base_url().'email/edit/'.$item['email_id'] ?>" 
                                                           class="btn btn-primary btn-sm waves-effect waves-light">
                                                            <i data-feather="edit" class="font-size-16"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php $count += 1; ?>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <tr>
                                                <td colspan="4" class="text-center">Nothing to show</td>
                                            </tr>
                                        <?php endif ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-muted">
                                <i data-feather="mail" class="font-size-16 align-middle me-2"></i>
                                <?= count($list) ?> Sendable Emails
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Initialize Feather Icons
document.addEventListener('DOMContentLoaded', function() {
    feather.replace();
});
</script>