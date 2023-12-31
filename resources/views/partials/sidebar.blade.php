<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">{{ config('app.name', 'AdminLTE 3') }}</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div> --}}

    <!-- SidebarSearch Form -->
    {{-- <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div> --}}

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="{{ route('admin.dashboard') }}" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>{{ __('Dashboard') }}</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="javascript:void(0)" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>{{ __('Widgets') }}
              <span class="right badge badge-danger">{{ __('New') }}</span>
            </p>
          </a>
        </li>
        <li class="nav-header border-bottom mb-1">{{ __('USER MANAGEMENT') }}</li>
        <li class="nav-item">
          <a href="javascript:void(0)" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>{{ ('Users & Members') }}
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">6</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('users.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>{{ __('Manage Users') }}</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('users.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>{{ __('Add New User') }}</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="{{ route('roles.index') }}" class="nav-link">
            <i class="fas fa-user-shield nav-icon"></i>
            <p>{{ __('User Settings') }}</p>
          </a>
        </li>
        <li class="nav-header border-bottom mb-1">{{ __('EMPLOYEE MANAGEMENT') }}</li>
        <li class="nav-item">
          <a href="javascript:void(0)" class="nav-link">
            <i class="nav-icon fas fa-user-tie"></i>
            <p>{{ ('Our Employees') }}
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">6</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('employees.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>{{ __('Manage Employees') }}</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('employees.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>{{ __('Add New Employee') }}</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="javascript:void(0)" class="nav-link">
            <i class="nav-icon fas fa-user-tie"></i>
            <p>{{ ('Our Departments') }}
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">6</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('departments.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>{{ __('Manage Departments') }}</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('departments.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>{{ __('Add New Department') }}</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="javascript:void(0)" class="nav-link">
            <i class="nav-icon fas fa-user-tie"></i>
            <p>{{ ('Job Designations') }}
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">6</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('designations.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>{{ __('Manage Designations') }}</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('designations.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>{{ __('Add New Designation') }}</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-header border-bottom mb-1">{{ __('EXAMPLES') }}</li>
        <li class="nav-item">
          <a href="javascript:void(0)" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>{{ ('Layout Options') }}
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">6</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>{{ __('Test Link 01') }}</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>{{ __('Test Link 02') }}</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav><!-- /.sidebar-menu -->
  </div><!-- /.sidebar -->
</aside>