<!-- Begin page -->
<div id="layout-wrapper">    
    <!-- Topbar -->
    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="<?= base_url().'/admin' ?>" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="<?= base_url()?>assets/<?= $this->base->get_template() ?>/images/logo-sm.svg" alt="" height="24">
                        </span>
                        <span class="logo-lg">
                            <img src="<?= base_url()?>assets/<?= $this->base->get_template() ?>/images/logo-sm.svg" alt="" height="24">
                            <span class="logo-txt">Admin Panel</span>
                        </span>
                    </a>

                    <a href="<?= base_url().'/admin' ?>" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="<?= base_url()?>assets/<?= $this->base->get_template() ?>/images/logo-sm.svg" alt="" height="24">
                        </span>
                        <span class="logo-lg">
                            <img src="<?= base_url()?>assets/<?= $this->base->get_template() ?>/images/logo-sm.svg" alt="" height="24">
                            <span class="logo-txt">Admin Panel</span>
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
            </div>

            <div class="d-flex align-items-center">
                <!-- Theme Toggle Button -->
                <div class="dropdown">
                    <button type="button" class="btn header-item" id="mode-setting-btn">
                        <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                        <i data-feather="sun" class="icon-lg layout-mode-light"></i>
                    </button>
                </div>

                <!-- User Menu -->
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item bg-light-subtle border-start border-end" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="<?= $this->admin->get_avatar() ?>" alt="Header Avatar">
                        <span class="d-none d-xl-inline-block ms-1 fw-medium"><?= $this->admin->get_name() ?></span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="<?= base_url() ?>admin/settings">
                            <i class="mdi mdi-cog font-size-16 align-middle me-1"></i> Settings
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url() ?>a/logout">
                            <i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Left Sidebar -->
    <div class="vertical-menu">
        <div data-simplebar class="h-100">
            <div id="sidebar-menu">
    <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title" data-key="t-menu"></li>

        <li class="<?php if (isset($active) and $active == 'home') : ?>mm-active<?php endif ?>">
            <a href="<?= base_url() ?>admin/">
                <i data-feather="home"></i>
                <span data-key="t-dashboard">Dashboard</span>
            </a>
        </li>

        <li class="<?php if (isset($active) and $active == 'client') : ?>mm-active<?php endif ?>">
            <a href="<?= base_url() ?>client/list">
                <i data-feather="users"></i>
                <span data-key="t-clients">My Clients</span>
            </a>
        </li>

        <li class="<?php if (isset($active) and $active == 'account') : ?>mm-active<?php endif ?>">
            <a href="<?= base_url() ?>admin/account/list">
                <i data-feather="server"></i>
                <span data-key="t-accounts">MOFH Accounts</span>
            </a>
        </li>

        <li class="<?php if (isset($active) and $active == 'ticket') : ?>mm-active<?php endif ?>">
            <a href="<?= base_url() ?>admin/ticket/list">
                <i data-feather="message-square"></i>
                <span data-key="t-tickets">Support Tickets</span>
            </a>
        </li>

        <li class="<?php if (isset($active) and $active == 'site_settings') : ?>mm-active<?php endif ?>">
            <a href="<?= base_url() ?>admin/site">
                <i data-feather="settings"></i>
                <span data-key="t-site-settings">Site Settings</span>
            </a>
        </li>

        <li class="<?php if (isset($active) and $active == 'api_settings') : ?>mm-active<?php endif ?>">
            <a href="javascript: void(0);" class="has-arrow">
                <i data-feather="code"></i>
                <span data-key="t-api-settings">API Settings</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="<?= base_url() ?>api/settings/mofh">MOFH Settings</a></li>
                <li><a href="<?= base_url() ?>api/settings/sitepro">SitePro Settings</a></li>
            </ul>
        </li>

        <li class="<?php if (isset($active) and $active == 'email_settings') : ?>mm-active<?php endif ?>">
            <a href="javascript: void(0);" class="has-arrow">
                <i data-feather="mail"></i>
                <span data-key="t-email-settings">Email Settings</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="<?= base_url() ?>api/settings/smtp">SMTP Settings</a></li>
                <li><a href="<?= base_url() ?>email/templates">Email Templates</a></li>
            </ul>
        </li>

        <li class="<?php if (isset($active) and $active == 'ssl_settings') : ?>mm-active<?php endif ?>">
            <a href="<?= base_url() ?>api/settings/ssl">
                <i data-feather="shield"></i>
                <span data-key="t-ssl-settings">SSL Settings</span>
            </a>
        </li>

        <li class="<?php if (isset($active) and $active == 'captcha_settings') : ?>mm-active<?php endif ?>">
            <a href="<?= base_url() ?>api/settings/captcha">
                <i data-feather="check-square"></i>
                <span data-key="t-captcha-settings">Captcha Settings</span>
            </a>
        </li>

        <li class="<?php if (isset($active) and $active == 'oauth_settings') : ?>mm-active<?php endif ?>">
            <a href="<?= base_url() ?>api/settings/oauth">
                <i data-feather="lock"></i>
                <span data-key="t-oauth-settings">OAuth Settings</span>
            </a>
        </li>

        <li class="<?php if (isset($active) and $active == 'domain') : ?>mm-active<?php endif ?>">
            <a href="<?= base_url() ?>domain/list">
                <i data-feather="globe"></i>
                <span data-key="t-domain">Domain Extensions</span>
            </a>
        </li>
    </ul>
</div>
        </div>
    </div>
</div>