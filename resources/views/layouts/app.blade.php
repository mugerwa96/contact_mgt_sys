<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    @livewireStyles
</head>
<body style="background:rgba(226, 224, 224, 0.541)">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ route('contact.index') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->

                            <li class="nav-item">
                                <a class="nav-link text-dark" href="{{ route('contact.index') }}">All Contact
                                    <span class="badge rounded-pill bg-danger">
                                        <livewire:contact.contact-count/>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="{{ route('contact.create') }}">Add Contact</a>
                            </li>

                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    @livewireScripts
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/mdb.min.js') }}"></script>
    <script>

            window.addEventListener('openViewModal',function(){
                $('#viewModal').modal('show');
                // alert('ok');
            })
            window.addEventListener('openDeleteModal',function(){
                $('#openDeleteModal').modal('show');
                // alert('ok');
            })
            window.addEventListener('closeDeleteModal',function(){
                $('#openDeleteModal').modal('hide');


            })


    </script>
</body>
</html>
