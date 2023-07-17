<nav class="navbar navbar-expand-lg bg-primary-subtle">
    <div class="container">
      <a class="navbar-brand " href="/">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav text-white" >
            <a class="nav-link {{($title === 'Home') ? 'active fw-bolder':''}} "  href="/">Home</a>
            <a class="nav-link {{($title === 'About') ? 'active fw-bolder':''}} " href="/about">About</a>
            <a class="nav-link {{str_contains($title,'All Posts')? 'active fw-bolder':''}} " href="/posts">Blog</a>
            <a class="nav-link {{($title === 'All Category') ? 'active fw-bolder':''}} " href="/categories">Category</a>
            <a class="nav-link {{($title === 'Login') ? 'active fw-bolder':''}} " href="/login">Login</a>
            <a class="nav-link {{($title === 'Register') ? 'active fw-bolder':''}} " href="/register">Register</a>
        </div>
      </div>
    </div>
  </nav>