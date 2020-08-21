<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="referrer" content="always">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light" id="nav1">
            <a class="navbar-brand" id="scout-lily" href="https://cserkesz.hu">
                <img border="0" alt="" src="assets/images/logo-black-white-vector.svg">
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Főoldal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.html">Galéria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Magunkról</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Kapcsolat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Támogatás</a>
                    </li>
                </ul>
            </div>
            <a class="navbar-brand" id="facebook-logo" href="https://www.facebook.com/426szmacscs">
                <img border="0" alt="" src="assets/images/facebook-logo-black-white-vector.svg">
            </a>
            <a class="navbar-brand" id="instagram-logo" href="https://www.instagram.com/426_szmacs/">
                <img border="0" alt="" src="assets/images/instagram-logo-black-white-vector.svg">
            </a>

        </nav>

        <nav class="navbar navbar-light light-blue lighten-4" id="nav2">

            <!-- Navbar brand -->


            <!-- Collapse button -->
            <button class="navbar-toggler ml-auto custom-toggler"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
                    aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
                            class="navbar-toggler-icon"  ></i></span></button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent1">

                <!-- Links -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Főoldal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.html">Galéria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Magunkról</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kapcsolat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Támogatás</a>
                    </li>
                </ul>


            </div>
            <a class="navbar-brand" id="scout-lily" href="https://cserkesz.hu">
                <img border="0" alt="" src="assets/images/logo-black-white-vector.svg">
            </a>


        </nav>

      @yield('body')

        <footer class="footer" >
            <nav class="navbar navbar-default navbar-custom">
                <div class="container-fluid" >
                    <div class="col-md-3 col-sm-6 col-6 mb-3 p-0 float-left">
                        <h5 class="mb-4 font-weight-bold text-uppercase">Kapcsolat</h5>
                        <ul class="list-group">
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="">Térkép</a></li>
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="">Csapat adatok</a></li>
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="">Alapítvány adatok</a></li>
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href=""> Levelező lista</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6 mb-3 p-0 float-left">
                        <h5 class="mb-4 font-weight-bold text-uppercase">Magunkról</h5>
                        <ul class="list-group">
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="">Névadó</a></li>
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="">Bemutatkozás</a></li>
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="">Kronológia</a></li>
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href=""> Szervezeti felépítés</a></li>
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="">Vezetőink</a></li>
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="">Csatlakozz!</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6 mb-3 p-0 float-left">
                        <h5 class="mb-4 font-weight-bold text-uppercase">Támogatás</h5>
                        <ul class="list-group">
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="">Adó 1%</a></li>
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="">Banki átutalás</a></li>
                        </ul>
                    </div>
                    <div class="text-center center-block">
                        <a href="https://www.facebook.com/426szmacscs">
                            <img src="assets/images/facebook-logo-vector.svg" width="50px" height="auto">
                        </a>
                        <a href="https://www.instagram.com/426_szmacs/">
                            <img src="assets/images/instagram-logo-vector.svg" width="50px" height="auto">
                        </a>
                    </div>

                </div>
            </nav>
        </footer>
      <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </body>
</html>
