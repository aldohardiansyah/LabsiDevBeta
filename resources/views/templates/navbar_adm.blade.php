    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary fixed-top">
      <div class="container">
        <a class="navbar-brand" style="color: #F8F5F0" href="{{route('beranda')}}">LAB SISTEM INFORMASI</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{route('beranda')}}"><i class="fa fa-home"></i> Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('informasi')}}"><i class="fa fa-bullhorn"></i> Informasi</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownPraktikum" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-code"></i> Praktikum
                </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="{{route('jadwal')}}"><i class="fa fa-calendar-alt mr-2"></i>Jadwal Praktikum</a>
                <a class="dropdown-item" href="{{route('peraturan')}}"><i class="fa fa-align-center mr-2"></i>Peraturan</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('laboratorium')}}"><i class="fa fa-building"></i>  Laboratorium</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin_dashboard')}}"><i class="fa fa-tachometer-alt"></i>  Admin Panel</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPraktikum" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-id-badge"></i> {{Auth::user()->name}}
                </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="{{route('asisten_dashboard')}}"><i class="fa fa-tachometer-alt mr-2"></i>Dashboard</a>
                <a class="dropdown-item" href="{{route('asisten_profile')}}"><i class="fa fa-user mr-2"></i>Profil</a>
                <a class="dropdown-item" href="{{route('asisten_catatan')}}"><i class="fa fa-clipboard-list  mr-2"></i>Catatan Bertugas</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                  <i class="fa fa-power-off  mr-2"></i>Logout
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
