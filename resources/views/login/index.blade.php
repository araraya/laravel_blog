@extends('layouts/main')


@section('container')

<div class="row justify-content-center">
    <div class="col-lg-4">
        <main class="form-signin w-100 m-auto">
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show form-label-font-size" role="alert">
              {{session('success')}}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show form-label-font-size" role="alert">
              {{session('loginError')}}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif


            <form method="post" action="/login">
              @csrf
              <h1 class="h3 mb-3 fw-normal">Please Login</h1>
      
              <div class="form-floating">
                <input
                  type="email"
                  class="form-control
                  @error('email')
                  is-invalid
                  @enderror"
                  id="floatingInput"
                  placeholder="name@example.com"
                  name="email"
                  autofocus
                  required
                  value="{{old('email')}}"
                  
                />
                <label class="form-label-font-size" for="email">Email address</label>

                @error('email')
                <div class="invalid-feedback form-label-font-size mb-1">
                  {{$message}}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input
                  type="password"
                  class="form-control"
                  id="floatingPassword"
                  placeholder="Password"
                  name="password"
                />
                <label class="form-label-font-size" for="email">Password</label>
              </div>
      
            
              <button class="btn btn-primary w-100 py-2" type="submit">
                Login
              </button>
              
            </form>
            <small class="form-label-font-size">Not Registered? <a href="/register">Register Now</a></small>
          </main>
    </div>

</div>
@endsection
