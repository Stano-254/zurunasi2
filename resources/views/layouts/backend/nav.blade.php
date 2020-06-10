<nav class="navbar navbar-expand-md  navbar-dark bg-dark shadow-sm ">
    <div class="container">
        <a class="navbar-brand text-warning" href="{{ url('/') }}">
            {{ config('app.name', 'zurunasi') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @yield('admin')
            </ul>
        </div>
    </div>
</nav>