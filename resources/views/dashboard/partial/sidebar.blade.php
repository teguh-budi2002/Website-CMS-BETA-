<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item ">
          <a class="nav-link {{ Request::is('gae-post') ? 'active' : '' }}" aria-current="page" href="{{ url('/gae-post') }}">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  {{ Request::is('gae-post/buat/postingan') ? 'active' : '' }}" href="{{ url('/gae-post/buat/postingan') }}">
            <span data-feather="file"></span>
            My Post
          </a>
        </li>
      </ul>
    </div>
  </nav>