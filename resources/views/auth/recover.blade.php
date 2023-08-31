<x-auth-layout>
    
  <x-slot name="title" >
    {{ __('Admin Login') }}
  </x-slot>

  <x-slot name="header" >
    <p class="login-box-msg">{{ __('You are only one step a way from your new password, recover your password now.') }}</p>
  </x-slot>

  <form action="" method="post">
    <div class="input-group mb-3">
      <input type="password" name="password" class="form-control" placeholder="Password" />
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-lock"></span>
        </div>
      </div>
    </div>
    <div class="input-group mb-3">
      <input type="password" class="form-control" placeholder="Confirm Password" />
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-lock"></span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <button type="submit" class="btn btn-primary btn-block">{{ __('Change password') }}</button>
      </div><!-- /.col -->
    </div>
  </form>

  <p class="mt-3 mb-1">
    <a href="{{ route('admin.login') }}">{{ __('Login') }}</a>
  </p>

  <x-slot name="script" >
  </x-slot>

</x-auth-layout>