<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>CheckMyBac</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet"/>

    <!-- Vendor CSS Files -->
    <link href="{{asset("frontend/assets/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet"/>
    <link href="{{asset("frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css")}}" rel="stylesheet"/>
    <link href="{{asset("frontend/assets/vendor/aos/aos.css")}}" rel="stylesheet" />
    <link href="{{asset("frontend/assets/vendor/glightbox/css/glightbox.min.css")}}" rel="stylesheet"/>
    <link href="{{asset("frontend/assets/vendor/swiper/swiper-bundle.min.css")}}" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="{{asset("frontend/assets/css/main.css")}}" rel="stylesheet" />

    <!-- Custom CSS for loading modal and blur effect -->
    <style>
      /* Appliquer un flou à tout le contenu de la page lors du chargement */
      .blurred {
        filter: blur(5px);
        pointer-events: none;
      }
    </style>
  </head>

  <body class="index-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
      <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
        <a href="" class="logo d-flex align-items-center me-auto me-xl-0">
          <img src="{{ asset("frontend/img/Image1.png") }}" alt="" width="70px" />
        </a>
        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Acceuil</a></li>
            <li><a href="#about">A propos</a></li>
            <li><a href="#about">Contact</a></li>

                <!-- Authentication Links -->
    @auth
    @if (Auth::user()->role_as == '1')
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
        </a>
        <ul>
            <li><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
            <li><a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 Déconnexion
             </a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            </li>
        </ul>
    </li>
    @endif
    @endauth
</ul>

          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>
    </header>

    @yield('content')

    <footer id="footer" class="footer">
      <div class="container text-center mt-4">
        <p>© <strong>CheckMyBac</strong> Tout droits réservés</p>
        <div class="credits">
          Designed by <a href="mailto:paternefeindiro@gmail.com">BanguiWeb</a>
        </div>
      </div>
    </footer>

    <!-- Scroll Top -->
    <a
      href="#"
      id="scroll-top"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset("frontend/assets/js/jquery.min.js") }}"></script>
    <script src="{{ asset("frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{asset("frontend/assets/vendor/aos/aos.js")}}"></script>

    <!-- Custom JS File -->
    <script src="{{asset("frontend/assets/js/main.js")}}"></script>
    <script src="{{asset("frontend/assets/js/custom.js")}}"></script>
  </body>
</html>
