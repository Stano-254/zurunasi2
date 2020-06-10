<style type="text/css">
    @font-face {
        font-family: Dancing;
        src: url('{{ public_path('fonts/DancingScript-Regular.ttf') }}');
    }
</style>


<nav class="navbar navbar-expand-md  navbar-laravel navbar-light shadow-sm">
    <div class="container">
        <a class="navbar-brand " href="{{ url('/') }}">
            {{ config('app.name', 'zurunasi') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <div class="nav-item">
                    <a class="nav-link" href="{{'/home'}}"><span class="home fa fa-home"></span></a>
                </div>
                <div class="dropdown nav-item">

                    <a class="nav-link dropdown-toggle" href="{{'/destinations'}}">Destinations</a>

                    <ul class="dropdown-menu">

                        <li><a class="nav-link" href="{{'/nationalParks'}}">National Parks</a></li>

                        <hr class="nav-hr ">
                        <li><a class="nav-link" href="{{'/historic_sites'}}">Museums and monuments</a></li>

                        <hr class="nav-hr">
                        <li><a class="nav-link" href="{{'/marineParks'}}">Marine Parks</a></li>

                        <hr class="nav-hr">
                        <li><a class="nav-link" href="{{'/wildlife'}}">Big-five Wildlife</a></li>
                        <hr class="nav-hr">
                        <li><a class="nav-link" href="{{'/conservancy'}}">Conservancies</a></li>

                    </ul>

                </div>

                <div class="dropdown nav-item ">
                    <a class="nav-link dropdown-toggle test" href="{{'/things_to_do'}}">Things to do </a>
                    <ul class="dropdown-menu">

                        <li><a class="nav-link" href="{{'/camping'}}">Go Camping</a></li>
                        <hr class="nav-hr ">
                        <li><a class="nav-link" href="{{'/safaris'}}">Go on Safari</a></li>

                        <hr class="nav-hr">
                        <li><a class="nav-link" href="{{'/golf'}}">play Golf</a></li>

                        <hr class="nav-hr">
                        <li><a class="nav-link" href="{{'/watersports'}}">Water Sport</a></li>

                        <hr class="nav-hr">
                        <li><a class="nav-link" href="{{'/culture'}}">Culture heritage</a></li>
                        <hr class="nav-hr">
                        <li><a class="nav-link" href="{{'/festivals'}}">Events and Festivals</a></li>
                    </ul>

                </div>

                <div class="nav-item">
                    <a class="nav-link" href="{{'/destination'}}">Transport</a>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="{{url('/accomodation')}}">Accomodation</a>
                </div>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <form class="example" action="#">
                    <div class="input-group">

                        <input type="search" placeholder="Search.." name="search" class="form-control"
                               autocomplete="off">
                        <button type="submit" class="btn btn-outline-success search-btn">
                            <div class="input-group-addon"><span class="fa fa-search"></span></div>
                        </button>


                    </div>
                </form>
                <!-- Authentication Links -->

            </ul>
        </div>
    </div>
</nav>
