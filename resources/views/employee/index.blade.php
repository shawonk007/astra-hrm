<x-admin-layout>

  <x-slot name="title">
    {{ __('Manage Employees') }}
  </x-slot>

  <x-slot name="header">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{ __('Our Employees') }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ ('Home') }}</a></li>
              <li class="breadcrumb-item active">{{ __('Employees') }}</li>
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
          <h3 class="card-title">{{ __('Departments DataTable') }}</h3>
          <div class="card-tools">
            <a href="{{ route('employees.create') }}" class="btn btn-primary btn-sm">
              <i class="fas fa-plus mr-1"></i>
              <span class="pl-1">{{ __('Add New') }}</span>
            </a>
          </div>
        </div><!-- /.card-header -->
        <div class="card-body">
          <table id="dataTable" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="d-none d-xl-table-cell" >{{ __('SL') }}</th>
                <th>{{ __('Name of Employee') }}</th>
                <th class="d-none d-xl-table-cell" >{{ __('Department') }}</th>
                <th class="d-none d-xl-table-cell" >{{ __('Designation') }}</th>
                <th>{{ __('Status') }}</th>
                <th class="d-none d-xl-table-cell" >{{ __('Date Joined') }}</th>
                <th>{{ __('Action') }}</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($employees as $employee)
                <tr>
                  <td class="d-none d-xl-table-cell" >{{ $loop->iteration }}</td>
                  <td>
                    <strong>{{ $employee->firstname . ' ' . $employee->lastname }}</strong>
                  </td>
                  <td class="d-none d-xl-table-cell" >{{ $employee->department->title }}</td>
                  <td class="d-none d-xl-table-cell" >{{ $employee->designation->title }}</td>
                  <td>
                    <span class="badge bg-info">{{ __('Currenty Employeed') }}</span>
                  </td>
                  <td class="d-none d-xl-table-cell" >{{ $employee->created_at->diffforhumans() }}</td>
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
              @empty
                <tr>
                  <td colspan="7" class="text-center">{{ __('No Data Found') }}</td>
                </tr>
              @endforelse
            </tbody>
            <tfoot>
              <tr>
                <th class="d-none d-xl-table-cell" >{{ __('SL') }}</th>
                <th>{{ __('Name of Employee') }}</th>
                <th class="d-none d-xl-table-cell" >{{ __('Department') }}</th>
                <th class="d-none d-xl-table-cell" >{{ __('Designation') }}</th>
                <th>{{ __('Status') }}</th>
                <th class="d-none d-xl-table-cell" >{{ __('Date Joined') }}</th>
                <th>{{ __('Action') }}</th>
              </tr>
            </tfoot>
          </table>
        </div><!-- /.card-body -->
      </div><!-- /.card -->
    </div>
  </section>

  <x-slot name="script">
  </x-slot>

</x-admin-layout>
