<x-admin-layout>

  <x-slot name="title">
    {{ __('Add New Employee') }}
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
              <li class="breadcrumb-item"><a href="{{ route('employees.index') }}">{{ ('Employees') }}</a></li>
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
          <div class="col-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">{{ __('Personal Informations') }}</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <label for="">
                  <span>{{ __('Name of Employee') }}</span>
                  <span class="text-danger">*</span>
                </label>
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
                <label for="">
                  <span>{{ __('Email Address') }}</span>
                  <span class="text-danger">*</span>
                </label>
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
                      <label for="">
                        <span>{{ __('Cell Phone') }}</span>
                        <span class="text-danger">*</span>
                      </label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <span class="fas fa-phone-alt"></span>
                          </div>
                        </div>
                        <input type="tel" name="phone" class="form-control" id="phone" placeholder="+88 (01X) XX-XXXXXX" required oninput="formatPhoneNumber(this)" maxlength="19" />
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">{{ __('Date of Birth') }}</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <span class="fas fa-calendar-alt"></span>
                          </div>
                        </div>
                        <input type="date" name="date_of_birth" class="form-control" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-0">
                  <label for="">{{ __('Mailing Address') }}</label>
                  <div class="input-group">
                    <textarea name="address" class="form-control resize-none" id="address" cols="30" rows="6"></textarea>
                  </div>
                </div>
              </div><!-- /.card-body -->
              <div class="card-footer">
                <div class="row">
                  <div class="col-6">
                    <a href="{{ route('employees.index') }}" class="btn btn-secondary btn-block" >
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
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">{{ __('Employee Photo') }}</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body pb-1">
                <div class="row mb-3">
                  <div class="col-6">    
                    <label for="imageInput" class="d-flex flex-column align-items-center justify-content-center bg-light h-100" style="border: 3px solid lightgray; border-style: dashed;">
                      <div class="d-flex flex-column align-items-center justify-content-center py-1">
                        <h1 class="h1 mb-0"><i class="fas fa-cloud-upload-alt align-middle" data-feather="upload-cloud"></i></h1>
                        <h6 class="my-1 text-dark text-center"><strong>{{ __('Click to upload') }}</strong></h6>
                        <p class="mb-2 text-dark text-center" style="font-size: 0.75rem;">
                          <span>{{ __('PNG, JPG or JPEG') }}</span><br />
                          <span>{{ __('(MAX. UPLOAD 2MB)') }}</span><br/>
                          <span>{{ __('(MIN. RES. 300X300)') }}</span><br />
                          <span class="text-danger">{{ __('(Upload Photo Required)') }}</span>
                        </p>
                      </div>
                      <input type="file" name="avatar" class="d-none" id="imageInput" accept="image/*;capture=camera" />
                    </label>
                  </div>
                  <div class="col-6">
                    <img id="dummy" src="{{ asset('img/dummy/square.jpg') }}" class="w-100" alt="" />
                  </div>
                </div>
              </div><!-- /.card-body -->
            </div>
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">{{ __('Additional Informations') }}</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body pb-1">
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">{{ __('NID Number') }}</label>
                      <div class="input-group mb-3">
                        <input type="text" name="first_name" class="form-control" />
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">{{ __('Birth Certificate') }}</label>
                      <div class="input-group mb-3">
                        <input type="text" name="first_name" class="form-control" />
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">{{ __('Driving License') }}</label>
                      <div class="input-group mb-3">
                        <input type="text" name="first_name" class="form-control" />
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">{{ __('Passport No.') }}</label>
                      <div class="input-group mb-3">
                        <input type="text" name="first_name" class="form-control" />
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="">{{ __('Gender') }}</label>
                      <select class="form-control" id="exampleSelectBorder">
                        <option value="">{{ ('-- Choose One --') }}</option>
                        <option value="1">{{ ('Enable') }}</option>
                        <option value="0">{{ ('Disable') }}</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="">{{ __('Religion') }}</label>
                      <select class="form-control" id="exampleSelectBorder">
                        <option value="">{{ ('-- Choose One --') }}</option>
                        <option value="1">{{ ('Enable') }}</option>
                        <option value="0">{{ ('Disable') }}</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="">{{ __('Marital Status') }}</label>
                      <select class="form-control" id="exampleSelectBorder">
                        <option value="">{{ ('-- Choose One --') }}</option>
                        <option value="1">{{ ('Enable') }}</option>
                        <option value="0">{{ ('Disable') }}</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div><!-- /.card-body -->
            </div>
          </div>
          <div class="col-6">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">{{ __('Organizational Informations') }}</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body pb-1">
                <div class="row mb-0">
                  <div class="col-12">
                    <div class="form-group">
                      <label for="">
                        <span>{{ __('Department') }}</span>
                        <span class="text-danger">*</span>
                      </label>
                      <select class="form-control" id="exampleSelectBorder">
                        <option value="">{{ ('-- Choose One --') }}</option>
                        <option value="1">{{ ('Enable') }}</option>
                        <option value="0">{{ ('Disable') }}</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="">
                        <span>{{ __('Designation') }}</span>
                        <span class="text-danger">*</span>
                      </label>
                      <select class="form-control" id="exampleSelectBorder">
                        <option value="">{{ ('-- Choose One --') }}</option>
                        <option value="1">{{ ('Enable') }}</option>
                        <option value="0">{{ ('Disable') }}</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="employeeId">
                        <span>{{ __('Employee ID') }}</span>
                        <span class="text-danger">*</span>
                      </label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <button type="button" class="btn btn-secondary btn-sm" id="generate">
                            <i class="fas fa-sync-alt"></i>
                          </button>
                        </div>
                        <input type="text" name="unique_id" class="form-control" id="employeeId" placeholder="EMP-20230905-001" disabled />
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">
                        <span>{{ __('Basic Salary') }}</span>
                        <span class="text-danger">*</span>
                      </label>
                      <div class="input-group mb-3">
                        <input type="text" name="basic_salary" class="form-control" value="0.00" />
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">{{ __('Joining Date') }}</label>
                      <div class="input-group mb-3">
                        <input type="date" name="first_name" class="form-control" placeholder="First Name" disabled />
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">{{ __('Leave Date') }}</label>
                      <div class="input-group mb-3">
                        <input type="date" name="first_name" class="form-control" placeholder="First Name" disabled />
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">
                        <span>{{ __('Working Shift') }}</span>
                        <span class="text-danger">*</span>
                      </label>
                      <select class="form-control" id="exampleSelectBorder">
                        <option value="">{{ ('-- Choose One --') }}</option>
                        <option value="1">{{ ('Enable') }}</option>
                        <option value="0">{{ ('Disable') }}</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">
                        <span>{{ __('Employement Status') }}</span>
                        <span class="text-danger">*</span>
                      </label>
                      <select class="form-control" id="exampleSelectBorder">
                        <option value="">{{ ('-- Choose One --') }}</option>
                        <option value="1">{{ ('Enable') }}</option>
                        <option value="0">{{ ('Disable') }}</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div><!-- /.card-body -->
            </div>
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">{{ __('Salary Allowences') }}</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body pb-1">
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">{{ __('House Rent Allowence') }}</label>
                      <div class="input-group mb-3">
                        <input type="text" name="first_name" class="form-control" value="0.00" disabled />
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">{{ __('Medical Allowence') }}</label>
                      <div class="input-group mb-3">
                        <input type="text" name="first_name" class="form-control" value="0.00" disabled />
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">{{ __('Transport Allowence') }}</label>
                      <div class="input-group mb-3">
                        <input type="text" name="first_name" class="form-control" value="0.00" disabled />
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">{{ __('Education Allowence') }}</label>
                      <div class="input-group mb-3">
                        <input type="text" name="first_name" class="form-control" value="0.00" disabled />
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">{{ __('Phone Bill') }}</label>
                      <div class="input-group mb-3">
                        <input type="text" name="first_name" class="form-control" value="0.00" disabled />
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">{{ __('Internet Bill') }}</label>
                      <div class="input-group mb-3">
                        <input type="text" name="first_name" class="form-control" value="0.00" disabled />
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">{{ __('Overtime Pay') }}</label>
                      <div class="input-group mb-3">
                        <input type="text" name="first_name" class="form-control" value="0.00" disabled />
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">{{ __('Holiday Allowence') }}</label>
                      <div class="input-group mb-3">
                        <input type="text" name="first_name" class="form-control" value="0.00" disabled />
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- /.card-body -->
            </div>
            <div class="card card-primary card-outline">
              <div class="card-header">
                  <h3 class="card-title">{{ __('Salary Deductions') }}</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
              </div>
              <div class="card-body pb-1">
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">{{ __('Provident Fund') }}</label>
                      <div class="input-group mb-3">
                        <input type="text" name="first_name" class="form-control" value="0.00" disabled />
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">{{ __('Personal Savings') }}</label>
                      <div class="input-group mb-3">
                        <input type="text" name="first_name" class="form-control" value="0.00" disabled />
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">{{ __('Income Tax') }}</label>
                      <div class="input-group mb-3">
                        <input type="text" name="first_name" class="form-control" value="0.00" disabled />
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">{{ __('Security Tax') }}</label>
                      <div class="input-group mb-3">
                        <input type="text" name="first_name" class="form-control" value="0.00" disabled />
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">{{ __('Health Insurance') }}</label>
                      <div class="input-group mb-3">
                        <input type="text" name="first_name" class="form-control" value="0.00" disabled />
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">{{ __('Life Insurance') }}</label>
                      <div class="input-group mb-3">
                        <input type="text" name="first_name" class="form-control" value="0.00" disabled />
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- /.card-body -->
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
          </div>
          <div class="col-6">
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