@extends('layout.master')

@section('content')
<div class="container  pt-4">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Register') }}</div>

        <div class="card-body">
          <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

              <div class="col-md-6">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="gender" class="col-md-4 col-form-label text-md-right">Gender</label>
              <div class="col-md-6">
                <input id="gender" type="text" name="gender" class="form-control" required="">
              </div>
            </div>

            <div class="form-group row">
              <label for="dob" class="col-md-4 col-form-label text-md-right">Date of Birth</label>
              <div class="col-md-6">
                <input id="dob" type="text" name="dob" class="form-control" required="">
              </div>
            </div>

            <div class="form-group row">
              <label for="dept" class="col-md-4 col-form-label text-md-right">Department </label>
              <div class="col-md-6">
                <input id="dept" type="text" name="dept" class="form-control" required="">
              </div>
            </div>

            <div class="form-group row">
              <label for="branch" class="col-md-4 col-form-label text-md-right">Branch</label>
              <div class="col-md-6">
                <input id="branch" type="text" name="branch" class="form-control" required="">
              </div>
            </div>

            <div class="form-group row">
              <label for="f_title" class="col-md-4 col-form-label text-md-right">Functional Title</label>
              <div class="col-md-6">
                <input id="f_title" type="text" name="f_title" class="form-control" required="">
              </div>
            </div>

            <div class="form-group row">
              <label for="c_title" class="col-md-4 col-form-label text-md-right">Corporate Title</label>
              <div class="col-md-6">
                <input id="c_title" type="text" name="c_title" class="form-control" required="">
              </div>
            </div>

            <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

              <div class="col-md-6">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

              <div class="col-md-6">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">
                {{ __('Confirm Password') }}
              </label>

              <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  {{ __('Register') }}
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
