<x-admin-layout>

    <x-slot name="title">
      {{ __('Dashboard') }}
    </x-slot>
    
    <x-slot name="header">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">{{ __('Dashboard') }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ ('Home') }}</a></li>
                <li class="breadcrumb-item active">{{ __('Dashboard') }}</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div><!-- /.content-header -->
    </x-slot>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid"></div>
    </section>
    
    <x-slot name="script">
    </x-slot>

  </x-admin-layout>