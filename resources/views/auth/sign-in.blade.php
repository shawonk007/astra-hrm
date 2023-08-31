<x-auth-layout>
    
  <x-slot name="title" >
    {{ __('Admin Login') }}
  </x-slot>

  <x-slot name="header" >
    <p class="login-box-msg">{{ __('Sign in to start your session') }}</p>
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
    <div class="input-group mb-3">
      <input type="password" name="password" class="form-control" placeholder="Password" />
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-lock"></span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-6">
        <div class="icheck-primary">
          <input type="checkbox" id="remember" />
          <label for="remember">{{ __('Remember Me') }}</label>
        </div>
      </div><!-- /.col -->
      <div class="col-6">
        <p class="mt-1 text-right">
          <a href="{{ route('admin.forget') }}">{{ __('I forgot my password') }}</a>
        </p>
      </div><!-- /.col -->
    </div>
    {{-- <div class="btn-group"> --}}
      <button type="submit" class="btn btn-primary btn-block">{{ __('Sign In') }}</button>
    {{-- </div> --}}
  </form>
  {{-- <p class="mb-0">
    <a href="register.html" class="text-center">Register a new membership</a>
  </p> --}}

  <x-slot name="script" >
  </x-slot>

</x-auth-layout>