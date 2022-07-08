  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <!-- <li class="nav-item d-none d-sm-inline-block">
              <a href="<?= base_url('/dashboard') ?>" class="nav-link">Home</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
              <a href="<?= base_url('/contact') ?>" class="nav-link">Contact</a>
          </li> -->
      </ul>

      <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="#">
                  <span class="pr-2"><?= session()->username ?></span><i class="far fa-user"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                  <!-- <span class="dropdown-item dropdown-header">👋🏻</span> -->
                  <!-- <div class="dropdown-divider"></div> -->
                  <!-- <a href="#" class="dropdown-item">
                      <i class="fas fa-user mr-2"></i> Profile
                       <span class="float-right text-muted text-sm">3 mins</span> -->
                  <!-- </a> -->
                  <!-- <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                      <i class="fas fa-cog mr-2"></i> Setting -->
                  <!-- <span class="float-right text-muted text-sm">12 hours</span> -->
                  <!-- </a> -->
                  <!-- <div class="dropdown-divider"></div> -->
                  <a href="<?= route_to('logout') ?>" class="dropdown-item text-center"> Log out</a>
              </div>
          </li>
      </ul>
  </nav>