<x-admin-layout>

  <x-slot name="title">
      {{ __('Manage Users') }}
  </x-slot>
    
  <x-slot name="header">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">{{ __('Users & Members') }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ ('Home') }}</a></li>
                <li class="breadcrumb-item active">{{ __('Users') }}</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div><!-- /.content-header -->
  </x-slot>

  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">{{ __('Users DataTable') }}</h3>
            <div class="card-tools">
              <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm">
                <i class="fas fa-plus mr-1"></i>
                <span class="pl-1">{{ __('Add New') }}</span>
              </a>
              {{-- <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button> --}}
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="dataTable" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th class="d-none d-xl-table-cell" >{{ __('SL') }}</th>
                  <th>{{ __('Name of User') }}</th>
                  <th class="d-none d-xl-table-cell" >{{ __('User Role') }}</th>
                  <th>{{ __('Status') }}</th>
                  <th class="d-none d-xl-table-cell" >{{ __('Date Created') }}</th>
                  <th>{{ __('Action') }}</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="d-none d-xl-table-cell" >01</td>
                  <td>
                    <strong>Shawon Khan</strong>
                  </td>
                  <td class="d-none d-xl-table-cell" >Super Admin</td>
                  <td>
                    <span class="badge bg-success">{{ __('Enable') }}</span>
                  </td>
                  <td class="d-none d-xl-table-cell" >2 minutes ago</td>
                  <td class="d-flex">
                    <a href="javascript:void(0)" class="btn btn-info btn-sm mr-1">
                      <i class="fas fa-edit"></i>
                    </a>
                    <form action="" method="post">
                      <button type="submit" class="btn btn-danger btn-sm">
                        <i class="fas fa-trash-alt"></i>
                      </button>
                    </form>
                  </td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th class="d-none d-xl-table-cell" >{{ __('SL') }}</th>
                  <th>{{ __('Name of User') }}</th>
                  <th class="d-none d-xl-table-cell" >{{ __('User Role') }}</th>
                  <th>{{ __('Status') }}</th>
                  <th class="d-none d-xl-table-cell" >{{ __('Date Created') }}</th>
                  <th>{{ __('Action') }}</th>
                </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
  </section>
    
  <x-slot name="script">
  </x-slot>

  </x-admin-layout>