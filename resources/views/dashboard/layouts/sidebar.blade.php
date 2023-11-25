<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="sidebar-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{Request::is('dashboard') ? 'active' : ''}}" href="/dashboard" >
            <span data-feather="home"></span>
            Dashboard <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Request::is('dashboard/posts*') ? 'active' : ''}}" href="/dashboard/posts">
            <span data-feather="file-text"></span>
           Posts
          </a>
        </li>
      </ul>


      @can('admin')
      <h6 class="d-flex sidebar-heading align-items-center text-muted justify-content-between px-3 mt-4 mb-1">Administrator</h6>
      <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link {{Request::is('dashboard/category*') ? 'active' : ''}}" href="/dashboard/category" >
                <span data-feather="grid"></span>
                Post Categories
            </a>
        </li>
      </ul>
      @endcan
    </div>
</nav>
