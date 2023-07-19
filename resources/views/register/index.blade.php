@extends('layouts/main')


@section('container')  

<div class="row justify-content-center">
    <div class="col-lg-4">
        <main class="form-signin w-100 m-auto">
          <h1 class="h3 mb-3 fw-normal">Register</h1>
            <form method="post" action="/register">
              @csrf
              <div class="form-floating">
                <input
                  type="text"
                  class="form-control @error('name') is-invalid @enderror"
                  id="floatingInput"
                  placeholder="Name"
                  name="name"
                  value="{{old('name')}}"
                  required
                />
                <label class="form-label-font-size" for="floatingInput">Name</label>
                @error('name')
                <div class="invalid-feedback form-label-font-size mb-1">
                  {{$message}}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input
                  type="text"
                  class="form-control border-radius-0 @error('username') is-invalid @enderror"
                  id="floatingInput"
                  placeholder="rudeus123"
                  name="username"
                  value="{{old('username')}}"
                  required
                />
                <label class="form-label-font-size" for="floatingInput">Username</label>
                @error('username')
                <div class="invalid-feedback form-label-font-size mb-1">
                  {{$message}}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input
                  type="email"
                  class="form-control border-radius-0 @error('email') is-invalid @enderror"
                  id="floatingInput"
                  placeholder="name@example.com"
                  name="email"
                  value="{{old('email')}}"
                  required
                />
                <label class="form-label-font-size" for="floatingInput">Email address</label>
                @error('email')
                <div class="invalid-feedback form-label-font-size mb-1">
                  {{$message}}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input
                  type="password"
                  class="form-control @error('password') is-invalid @enderror"
                  id="floatingPassword"
                  placeholder="Password"
                  name="password"
                  required
                />
                <label class="form-label-font-size" for="floatingPassword">Password</label>
                @error('password')
                <div class="invalid-feedback form-label-font-size mb-1">
                  {{$message}}
                </div>
                @enderror
              </div>
      
            
              <button class="btn btn-primary w-100 py-2" type="submit">
               Register
              </button>
              
            </form>
            <small class="form-label-font-size">Already Registered? <a href="/login">Login Now</a></small>
          </main>
    </div>

</div>
@endsection