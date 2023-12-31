<x-admin-layout>

  <x-slot name="title">
    {{ __('Manage Departments') }}
  </x-slot>

  <x-slot name="header">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{ __('Our Departments') }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ ('Home') }}</a></li>
              <li class="breadcrumb-item active">{{ __('Departments') }}</li>
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
            <a href="{{ route('departments.create') }}" class="btn btn-primary btn-sm">
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
                <th>{{ __('Title') }}</th>
                <th>{{ __('Status') }}</th>
                <th class="d-none d-xl-table-cell" >{{ __('Date Created') }}</th>
                <th>{{ __('Action') }}</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($departments as $department)
                <tr>
                  <td class="d-none d-xl-table-cell" >{{ $loop->iteration }}</td>
                  <td>
                    <strong>{{ $department->title }}</strong>
                  </td>
                  <td>
                    @if ($department->status === 1)
                      <span class="badge bg-success">{{ __('Enable') }}</span>
                    @elseif ($department->status === 0)
                      <span class="badge bg-danger">{{ __('Disable') }}</span>
                    @else
                      <span class="badge bg-secondary">{{ __('Pending') }}</span>
                    @endif
                  </td>
                  <td class="d-none d-xl-table-cell" >{{ $department->created_at->diffforhumans() }}</td>
                  <td class="d-flex">
                    <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-info btn-sm mr-1">
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
                  <td colspan="5" class="text-center">{{ __('No Data Found') }}</td>
                </tr>
              @endforelse
            </tbody>
            <tfoot>
              <tr>
                <th class="d-none d-xl-table-cell" >{{ __('SL') }}</th>
                <th>{{ __('Title') }}</th>
                <th>{{ __('Status') }}</th>
                <th class="d-none d-xl-table-cell" >{{ __('Date Created') }}</th>
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
