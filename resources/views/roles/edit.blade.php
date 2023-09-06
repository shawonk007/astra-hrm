<x-admin-layout>

  <x-slot name="title">
    {{ __('Update Role') }}
  </x-slot>
    
  <x-slot name="header">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{ __('User Settings') }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ ('Home') }}</a></li>
              <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">{{ ('Roles') }}</a></li>
              <li class="breadcrumb-item active">{{ __('Edit') }}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div><!-- /.content-header -->
  </x-slot>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- form start -->
      <form action="{{ route('roles.update', $role->id) }}" method="POST" id="quickForm">
        @csrf
        @method('put')
        <div class="row">
          <div class="col-12 d-flex justify-content-center">
            <div class="card card-success col-10 col-lg-6 px-0">
              <div class="card-header">
                <h3 class="card-title">{{ __('Update Existing Role') }}</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <input type="text" name="title" class="form-control" id="title" placeholder="Role Title" value="{{ $role->title }}" required />
                </div>
                <div class="form-group">
                  <textarea name="description" class="form-control resize-none" id="description" cols="30" rows="6" placeholder="Type role details here ...">{{ $role->description }}</textarea>
                </div>
                <div class="row">
                  <div class="col-6">
                    <div class="form-group mb-0">
                      <input type="text" name="slug" class="form-control" id="slug" placeholder="Role Slug" value="{{ $role->slug }}" required readonly />
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group mb-0">
                      <select class="form-control" id="status">
                        <option value="">{{ ('-- Choose Status --') }}</option>
                        <option value="1" {{ $role->status === 1 ? 'selected' : '' }} >{{ ('Enable') }}</option>
                        <option value="0" {{ $role->status === 0 ? 'selected' : '' }} >{{ ('Disable') }}</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div><!-- /.card-body -->
              <div class="card-footer">
                <div class="row">
                  <div class="col-6">
                    <a href="{{ route('roles.index') }}" class="btn btn-secondary btn-block" >
                      <i class="fas fa-arrow-left mr-1"></i>
                      <span class="pl-1">{{ __('Discard') }}</span>
                    </a>
                  </div>
                  <div class="col-6">
                    <button type="submit" class="btn btn-success btn-block">
                      <i class="fas fa-check mr-1"></i>
                      <span class="pl-1">{{ __('Update') }}</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div><!-- /.container-fluid -->
  </section><!-- /.content -->
    
  <x-slot name="script">
  </x-slot>

</x-admin-layout>