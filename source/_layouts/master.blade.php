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
                <img border="0" alt="" src="assets/images/logo-black-vector.svg">
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
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
            <a class="navbar-brand" id="facebook-logo" href="https://cserkesz.hu">
                <img border="0" alt="" src="assets/images/facebook-logo-vector.svg">
            </a>
            <a class="navbar-brand" id="instagram-logo" href="https://cserkesz.hu">
                <img border="0" alt="" src="assets/images/instagram-logo-vector.svg">
            </a>

        </nav>

        <nav class="navbar navbar-light light-blue lighten-4" id="nav2">

            <!-- Navbar brand -->


            <!-- Collapse button -->
            <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
                    aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
                            class="navbar-toggler-icon"></i></span></button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent1">

                <!-- Links -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
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
                <img border="0" alt="" src="assets/images/logo-black-vector.svg">
            </a>


        </nav>

      @yield('body')
      <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </body>
</html>
