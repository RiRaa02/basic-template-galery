<body>
  <!-- Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="{{ asset('tmp/src/assets/images/logos/pt2.png') }}" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ url('index') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">GALLERY PHOTO</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('albums.index') }}" aria-expanded="false">
                <span>
                  <i class="fas fa-photo-video"></i> <!-- Ikon album -->
                </span>
                <span class="hide-menu">Album</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('fotos.index') }}" aria-expanded="false">
                <span>
                  <i class="fas fa-camera"></i> <!-- Ikon foto -->
                </span>
                <span class="hide-menu">Foto</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('komentarfoto.index') }}" aria-expanded="false">
                <span>
                  <i class="fas fa-comments"></i> <!-- Ikon komentar -->
                </span>
                <span class="hide-menu">Komentar</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('like_fotos.index') }}" aria-expanded="false">
                <span>
                  <i class="fas fa-thumbs-up"></i> <!-- Ikon like -->
                </span>
                <span class="hide-menu">Like</span>
              </a>
            </li>

            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">AUTH</span>
            </li>

            <li class="sidebar-item">
    <a class="sidebar-link" href="javascript:void(0);" aria-expanded="false">
        <span>
        <i class="fas fa-sign-out-alt"></i> <!-- Ikon logout -->
        </span>
        <span class="hide-menu">
            @auth
                <!-- Jika pengguna sudah login -->
                <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            @else
                <!-- Jika pengguna belum login -->
                <a href="{{ route('login') }}">
                    <button type="button" class="btn btn-danger">Login</button>
                </a>
            @endauth
        </span>
    </a>
</li>


          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!-- Sidebar End -->