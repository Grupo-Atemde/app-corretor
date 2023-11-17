<?php
/**
 * dashboards/analytics/views/inc_header.php
 *
 * Author: pixelcave
 *
 * The header of each page
 *
 */
?>

<!-- Header -->
<header id="page-header">
  <!-- Header Content -->
  <div class="content-header">
    <!-- Left Section -->
    <div class="d-flex align-items-center">
      <!-- Logo -->
      <a class="fw-semibold text-dual tracking-wide" href="index.php">
        Dash<span class="opacity-75">mix</span>
        <span class="fw-normal">Analytics</span>
      </a>
      <!-- END Logo -->

      <!-- Open Search Section -->
      <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
      <button type="button" class="btn btn-alt-secondary ms-2" data-toggle="layout" data-action="header_search_on">
        <i class="fa fa-search"></i>
      </button>
      <!-- END Open Search Section -->
    </div>
    <!-- END Left Section -->

    <!-- Right Section -->
    <div>
      <!-- User Dropdown -->
      <div class="dropdown d-inline-block">
        <button type="button" class="btn btn-alt-secondary dropdown-toggle" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="d-none d-sm-inline me-1">John Smith</span>
          <span class="badge rounded-pill bg-success">PRO</span>
        </button>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
          <div class="rounded-top fw-semibold text-white text-center bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo16.jpg');">
            <div class="p-3">
              <?php $dm->get_avatar(10, '', 64, true); ?>
            </div>
            <div class="p-3 bg-primary-dark-op">
              <a class="text-white fw-semibold" href="be_pages_generic_profile.php">John Smith</a>
              <div class="text-white-75">j.smith@example.com</div>
            </div>
          </div>
          <div class="p-2">
            <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
              Profile
              <i class="fa fa-fw fa-user-circle opacity-50 ms-1"></i>
            </a>
            <div role="separator" class="dropdown-divider"></div>
            <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
              Websites
              <div>
                <span class="badge rounded-pill bg-primary">3</span>
                <i class="fa fa-fw fa-globe opacity-50 ms-1"></i>
              </div>
            </a>
            <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
              Subscriptions
              <div>
                <span class="badge rounded-pill bg-primary">1</span>
                <i class="fa fa-fw fa-sync-alt opacity-50 ms-1"></i>
              </div>
            </a>
            <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
              Billing
              <i class="fab fa-fw fa-paypal opacity-50 ms-1"></i>
            </a>
            <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
              Preferences
              <i class="fa fa-fw fa-wrench opacity-50 ms-1"></i>
            </a>
            <div role="separator" class="dropdown-divider"></div>
            <a class="dropdown-item d-flex justify-content-between align-items-center" href="op_auth_signin.php">
              Log Out
              <i class="fa fa-fw fa-sign-out-alt text-danger ms-1"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- END User Dropdown -->
    </div>
    <!-- END Right Section -->
  </div>
  <!-- END Header Content -->

  <!-- Header Search -->
  <div id="page-header-search" class="overlay-header bg-header-dark">
    <div class="content-header">
      <form class="w-100" action="be_pages_generic_search.php" method="POST">
        <div class="input-group">
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <button type="button" class="btn btn-primary" data-toggle="layout" data-action="header_search_off">
            <i class="fa fa-fw fa-times-circle"></i>
          </button>
          <input type="text" class="form-control" placeholder="Search your websites.." id="page-header-search-input" name="page-header-search-input">
        </div>
      </form>
    </div>
  </div>
  <!-- END Header Search -->

  <!-- Header Loader -->
  <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
  <div id="page-header-loader" class="overlay-header bg-primary">
    <div class="content-header">
      <div class="w-100 text-center">
        <i class="fa fa-fw fa-2x fa-spinner fa-spin text-white"></i>
      </div>
    </div>
  </div>
  <!-- END Header Loader -->
</header>
<!-- END Header -->
