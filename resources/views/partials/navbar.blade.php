<nav class="navbar navbar-expand-lg bg-primary-subtle">
    <div class="container">
      <a class="navbar-brand " href="/">Araya Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{($title === 'Home') ? 'active fw-bolder':''}} "  href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{($title === 'About') ? 'active fw-bolder':''}} " href="/about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{str_contains($title,'All Posts')? 'active fw-bolder':''}} " href="/posts">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{($title === 'All Category') ? 'active fw-bolder':''}} " href="/categories">Category</a>
              </li>
            </ul>


            <ul class="navbar-nav ms-auto">
              @auth  
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Welcome back, {{auth()->user()->name}}
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/dashboard">Dashboard <i class="bi bi-layout-text-sidebar-reverse"></i></a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <form action="/logout" method="POST">
                      @csrf
                      <button type="submit" class="dropdown-item">
                        Logout <i class="bi bi-box-arrow-in-right"></i>
                      </button>
                    </form>
                  </li>
                </ul>
              </li>

              @else
              <li class="nav-item">
                <a class="nav-link {{($title === 'Login') ? 'active fw-bolder':''}} " href="/login">Login <i class="bi bi-box-arrow-left"></i></a>
              </li>
              @endauth
            </ul>            
      </div>
    </div>
  </nav>