<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    @yield('styles')
</head>

<body class="d-flex flex-row" data-bs-theme="dark">

    <header class="d-flex border-end">
        <nav class="d-flex">
            <div class="container-fluid d-flex flex-column align-items-center justify-content-between py-5">
                <a class="navbar-brand fs-2" href="/">
                    <svg class="logo" width="4rem" height="4rem" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"
                        fill="#000000" stroke="#000000">
                        <path fill="#ffffff"
                            d="M266 51.727c-39.32 0-71 31.68-71 71 0 39.319 31.68 71.002 71 71.002s71-31.683 71-71.002c0-39.32-31.68-71-71-71zm-144 32c-30.483 0-55 24.517-55 55 0 30.482 24.517 55.002 55 55.002s55-24.52 55-55.002c0-30.483-24.517-55-55-55zm-23 128v110.002h238V211.727zm350 4.648l-94 40.285v20.133l94 40.285zm-386 2.352v32h18v-32zm113 121.002v17.998h13.012l-51.123 136.275h19.222l51.507-136.275.382 136.275h18l.382-136.275 51.507 136.275h19.222l-51.123-136.275H260v-17.998c-28.003-.003-55.997 0-84 0z">
                        </path>
                    </svg>
                </a>
                <div class="d-flex flex-column align-items-center">
                    <ul class="navbar-nav mb-2 mb-lg-0 text-center gap-4">
                        <li class="nav-item">
                            <a class="d-flex flex-column align-items-center" aria-current="page"
                                href="{{ route('home') }}"><i class="bi bi-house fs-5"></i>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex flex-column align-items-center" aria-current="page"
                                href="{{ route('contacts') }}"><i class="bi bi-question-lg fs-5"></i>Contacts</a>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav mx-4">
                    <li class="nav-item">
                        <a class="btn btn-outline-primary" href="{{ route('reviews') }}"><i
                                class="bi bi-chat-left-text"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="#"></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
</body>

</html>
