<div class="container mb-5">
  <nav class="navbar navbar-white bg-white fixed-top">
  <div class="container-fluid">
    <a class="text-decoration-none fw-bold text-dark" href="/" style="margin: 0px auto;">
        Rizal De Studio
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-light" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Portfolio</h5>
        <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link {{ $active == 'Home' ? 'active fw-bold' : '' }}" href="/">
                @if( $active == 'Home' )
                    <i class="fa-solid fa-house mx-2"></i>Home <
                @else
                    <i class="fa-solid fa-house mx-2"></i>Home
                @endif
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $active == 'Achievements' ? 'active fw-bold' : '' }}" href="/achievements">
                @if( $active == 'Achievements' )
                    <i class="fa-solid fa-medal mx-2"></i>Achievements <
                @else
                    <i class="fa-solid fa-medal mx-2"></i>Achievements
                @endif
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
</div>