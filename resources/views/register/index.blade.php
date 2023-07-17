@extends('layouts/main')


@section('container')  

<div class="row justify-content-center">
    <div class="col-lg-4">
        <main class="form-signin  w-100 m-auto">
            <form>
              <h1 class="h3 mb-3 fw-normal">Register</h1>
              <div class="form-floating">
                <input
                  type="email"
                  class="form-control"
                  id="floatingInput"
                  placeholder="Rudeus"
                />
                <label class="form-label-font-size" for="floatingInput">Name</label>
              </div>
              <div class="form-floating">
                <input
                  type="email"
                  class="form-control border-radius-0"
                  id="floatingInput"
                  placeholder="rudeus123"
                />
                <label class="form-label-font-size" for="floatingInput">Username</label>
              </div>
              <div class="form-floating">
                <input
                  type="email"
                  class="form-control border-radius-0"
                  id="floatingInput"
                  placeholder="name@example.com"
                />
                <label class="form-label-font-size" for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input
                  type="password"
                  class="form-control"
                  id="floatingPassword"
                  placeholder="Password"
                />
                <label class="form-label-font-size" for="floatingPassword">Password</label>
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