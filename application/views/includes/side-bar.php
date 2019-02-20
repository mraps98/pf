<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url();?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-graduation-cap"></i>
        </div>
        <div class="sidebar-brand-text mx-3">PF University</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item" id="menu-dashboard">
        <a class="nav-link" href="<?php echo base_url();?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Operations
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item" id='menu-students'>
        <a class="nav-link" href="<?php echo base_url();?>student/">
          <i class="fas fa-fw fa-users"></i>
          <span>Students</span>
        </a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item" id='menu-teachers'>
        <a class="nav-link" href="<?php echo base_url();?>teacher/">
          <i class="fas fa-fw fa-chalkboard-teacher"></i>
          <span>Teachers</span>
        </a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item" id='menu-departments'>
        <a class="nav-link" href="<?php echo base_url();?>department/">
          <i class="fas fa-fw fa-folder"></i>
          <span>Departments</span>
        </a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item" id='menu-courses'>
        <a class="nav-link" href="<?php echo base_url();?>course/">
          <i class="fas fa-book"></i>
          <span>Courses</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
