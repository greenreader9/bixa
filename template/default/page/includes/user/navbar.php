  <body>

    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
    <header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="<?= base_url() ?>" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="<?= base_url()?>assets/<?= $this->base->get_template() ?>/images/logo-sm.svg" alt="" height="24">
                    </span>
                    <span class="logo-lg">
                        <img src="<?= base_url()?>assets/<?= $this->base->get_template() ?>/images/logo-sm.svg" alt="" height="24"> <span class="logo-txt"><?= $this->base->text('company', 'paragraph') ?></span>
                    </span>
                </a>

                <a href="<?= base_url() ?>" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="<?= base_url()?>assets/<?= $this->base->get_template() ?>/images/logo-sm.svg" alt="" height="24">
                    </span>
                    <span class="logo-lg">
                        <img src="<?= base_url()?>assets/<?= $this->base->get_template() ?>/images/logo-sm.svg" alt="" height="24"> <span class="logo-txt"><?= $this->base->text('company', 'paragraph') ?></span>
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>
        </div>
                   
<!-- Theme Toggle Button -->
        <div class="d-flex align-items-center">
          <div class="dropdown">
                <button type="button" class="btn header-item" id="mode-setting-btn">
                    <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                    <i data-feather="sun" class="icon-lg layout-mode-light"></i>
                </button>
            </div>
     <!-- language change Button -->
<div class="dropdown">
    <button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="<?= base_url() ?>assets/<?= $this->base->get_template() ?>/images/flags/<?= getFlagCode(get_cookie('lang')) ?>.svg" 
             class="language" 
             height="16"
             alt="<?= ucfirst(get_cookie('lang')) ?>">
    </button>
    <div class="dropdown-menu dropdown-menu-end">
        <?php foreach (get_languages() as $lang): ?>
            <a href="<?= base_url('language/change/'.$lang['code']) ?>" 
               class="dropdown-item notify-item">
                <img src="<?= base_url() ?>assets/<?= $this->base->get_template() ?>/images/flags/<?= getFlagCode($lang['code']) ?>.svg" 
                     alt="<?= $lang['name'] ?>"
                     class="me-1" 
                     height="12">
                <?= $lang['name'] ?>
            </a>
        <?php endforeach; ?>
    </div>
</div>
            <!-- User Menu -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item bg-light-subtle border-start border-end" id="page-header-user-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="<?= $this->user->get_avatar() ?>" alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1 fw-medium"><?= $this->user->get_name() ?></span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="<?= base_url() ?>settings">
                        <i class="mdi mdi-cog font-size-16 align-middle me-1"></i> <?= $this->base->text('settings', 'title') ?>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="u/logout">
                        <i class="mdi mdi-logout font-size-16 align-middle me-1"></i> <?= $this->base->text('logout', 'button') ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

            <!-- ========== Left Sidebar Start ========== -->
          <div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!-- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu"></li>

                <li>
                    <a href="<?= base_url() ?>">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard"><?= $this->base->text('dashboard', 'heading') ?></span>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url() ?>account/list">
                        <i data-feather="users"></i>
                        <span data-key="t-hosting"><?= $this->base->text('accounts', 'title') ?></span>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url() ?>ssl/list">
                        <i data-feather="shield"></i>
                        <span data-key="t-ssl"><?= $this->base->text('ssl_certificates', 'heading') ?></span>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url() ?>ticket/list">
                        <i data-feather="message-square"></i>
                        <span data-key="t-support"><?= $this->base->text('support_tickets', 'heading') ?></span>
                    </a>
                </li>
                 <li>
                    <a href="<?= $this->base->get_fourm() ?>">
                        <i data-feather="book"></i>
                        <span data-key="t-support"><?= $this->base->text('community_forum', 'heading') ?></span>
                    </a>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="globe"></i>
                        <span data-key="t-domain"><?= $this->base->text('domain_tools', 'heading') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?= base_url() ?>domain/checker" data-key="t-domain-checker"><?= $this->base->text('domain_checker', 'title') ?></a></li>
                        <li><a href="<?= base_url() ?>whois/lookup" data-key="t-whois-lookup"><?= $this->base->text('whois_lookup', 'title') ?></a></li>
                        <li><a href="<?= base_url() ?>u/dns_lookup" data-key="t-dns-lookup"><?= $this->base->text('dns_lookup', 'title') ?></a></li>
                    </ul>
                </li>
            </ul>

            <div class="card sidebar-alert border-0 text-center mx-4 mb-0 mt-5">
                <div class="card-body">
                    <img src="<?= base_url()?>assets/<?= $this->base->get_template() ?>/images/giftbox.png" alt="">
                    <div class="mt-4">
                        <h5 class="alertcard-title font-size-16"><?= $this->base->text('premium', 'heading') ?></h5>
                        <p class="font-size-13"><?= $this->base->text('premium_content', 'paragraph') ?></p>
                        <a href="<?= base_url() ?>upgrade" class="btn btn-primary mt-2"><?= $this->base->text('upgrade', 'button') ?></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar -->
		</div>
		</div>
            <!-- Left Sidebar End -->
            

