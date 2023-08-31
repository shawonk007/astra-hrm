<x-admin-layout>

  <x-slot name="title">
    {{ __('Add New User') }}
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
              <li class="breadcrumb-item"><a href="{{ route('users.index') }}">{{ ('Users') }}</a></li>
              <li class="breadcrumb-item active">{{ __('New') }}</li>
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
      <form id="quickForm">
        <div class="row">
          <div class="col-12 d-flex justify-content-center">
            <div class="card card-primary col-10 col-lg-6 px-0">
              <div class="card-header">
                <h3 class="card-title">{{ __('Create New User') }}</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="row mb-3">
                  <div class="col-6">    
                    <label for="imageInput" class="d-flex flex-column align-items-center justify-content-center bg-light h-100" style="border: 3px solid lightgray; border-style: dashed;">
                      <div class="d-flex flex-column align-items-center justify-content-center py-1">
                        <h1 class="h1 mb-0"><i class="fas fa-cloud-upload-alt align-middle" data-feather="upload-cloud"></i></h1>
                        <h6 class="my-1 text-dark text-center"><strong>{{ __('Click to upload') }}</strong></h6>
                        <p class="mb-2 text-dark text-center" style="font-size: 0.75rem;">
                          <span>{{ __('PNG, JPG or JPEG') }}</span><br />
                          <span>{{ __('(MAX. UPLOAD 2MB)') }}</span><br/>
                          <span>{{ __('(MIN. RES. 300X300)') }}</span>
                        </p>
                      </div>
                      <input type="file" name="avatar" class="d-none" id="imageInput" accept="image/*;capture=camera" />
                    </label>
                  </div>
                  <div class="col-6">
                    <img id="dummy" src="{{ asset('img/dummy/square.jpg') }}" class="w-100" alt="" />
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <span class="fas fa-user"></span>
                      </div>
                    </div>
                    <input type="text" name="first_name" class="form-control" placeholder="First Name" required />
                    <input type="text" name="last_name" class="form-control" placeholder="Last Name" required />
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                      </div>
                    </div>
                    <input type="email" name="email" class="form-control" placeholder="Email Address" required />
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <span class="fas fa-at"></span>
                          </div>
                        </div>
                        <input type="text" name="username" class="form-control" placeholder="Username" required />
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <span class="fas fa-phone-alt"></span>
                          </div>
                        </div>
                        <input type="tel" name="phone" class="form-control" id="phone" placeholder="{{ __('Primary Phone') }}" required oninput="formatPhoneNumber(this)" maxlength="19" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                      </div>
                    </div>
                    <input type="text" name="password" class="form-control" placeholder="Password" required />
                    <input type="text" name="password_confirmation" class="form-control" placeholder="Confirm Password" required />
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <div class="form-group mb-0">
                      <select class="form-control" id="exampleSelectBorder">
                        <option value="">{{ ('-- User Role --') }}</option>
                        <option value="1">{{ ('Enable') }}</option>
                        <option value="0">{{ ('Disable') }}</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group mb-0">
                      <select class="form-control" id="exampleSelectBorder">
                        <option value="">{{ ('-- User Status --') }}</option>
                        <option value="1">{{ ('Enable') }}</option>
                        <option value="0">{{ ('Disable') }}</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div><!-- /.card-body -->
              <div class="card-footer">
                <div class="row">
                  <div class="col-6">
                    <a href="{{ route('users.index') }}" class="btn btn-secondary btn-block" >
                      <i class="fas fa-arrow-left mr-1"></i>
                      <span class="pl-1">{{ __('Discard') }}</span>
                    </a>
                  </div>
                  <div class="col-6">
                    <button type="submit" class="btn btn-primary btn-block">
                      <i class="fas fa-plus mr-1"></i>
                      <span class="pl-1">{{ __('Create New') }}</span>
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
    <script>
      var imgInp = document.getElementById("imageInput");
      var dummy = document.getElementById("dummy");
      imgInp.onchange = evt => {
        const [file] = imgInp.files
        if (file) {
          dummy.src = URL.createObjectURL(file)
        }
      }
    </script>
  </x-slot>

</x-admin-layout>