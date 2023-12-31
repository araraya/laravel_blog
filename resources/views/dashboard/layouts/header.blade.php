<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="/">My Blog</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button"
    data-toggle="collapse" data-target="#sidebarMenu"
     aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <form action="/logout" method="POST">
        @csrf
        <button type="submit" class="nav-link px-3 border-0 bg-dark text-white text-nowrap">
          Logout &nbsp;<span data-feather="log-out"></span>
        </button>
    </form>
  </nav>