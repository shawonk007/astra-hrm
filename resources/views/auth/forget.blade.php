<x-auth-layout>
    
  <x-slot name="title" >
    {{ __('Admin Login') }}
  </x-slot>

  <x-slot name="header" >
    <p class="login-box-msg">{{ __('You forgot your password? Here you can easily retrieve a new password.') }}</p>
  </x-slot>


  <form action="" method="post">
    <div class="input-group mb-3">
      <input type="email" name="email" class="form-control" placeholder="Email" />
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-envelope"></span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <button type="submit" class="btn btn-primary btn-block">{{ __('Request new password') }}</button>
      </div><!-- /.col -->
    </div>
  </form>

  <p class="mt-3 mb-1">
    <a href="{{ route('admin.login') }}">{{ __('Login') }}</a>
  </p>
  {{-- <p class="mb-0">
    <a href="register.html" class="text-center">Register a new membership</a>
  </p> --}}

  <x-slot name="script" >
  </x-slot>

</x-auth-layout>