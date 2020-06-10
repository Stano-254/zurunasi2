@extends('layouts.frontend.app')

@section('title','NationalParks')

@section('content')
    <div class="top_content">
        <div id="homepageSlide" class="carousel slide carousel-fade" data-interval="3500" data-ride="carousel">
            <div class="carousel-inner" style="height:420px;width:auto">
                <ol class="carousel-indicators">
                    <li data-target="#homepageSlide" data-slide-to="0" class="active dot"></li>
                    <li data-target="#homepageSlide" data-slide-to="1" class="dot"></li>
                    <li data-target="#homepageSlide" data-slide-to="2" class="dot"></li>
                    <li data-target="#homepageSlide" data-slide-to="3" class="dot"></li>
                    <li data-target="#homepageSlide" data-slide-to="4" class="dot"></li>
                    <li data-target="#homepageSlide" data-slide-to="5" class="dot"></li>
                    <li data-target="#homepageSlide" data-slide-to="6" class="dot"></li>
                    <li data-target="#homepageSlide" data-slide-to="7" class="dot"></li>
                    <li data-target="#homepageSlide" data-slide-to="8" class="dot"></li>
                </ol>
                <div class="carousel-item active">
                    <img src="images/tour.jpg" class="d-block w-100 card-img-top  " alt="...">
                    <div class="carousel-caption">
                        <h1> Our National Parks</h1>
                        <hr class="nav-hr">
                        <p class="text">get the best experience in company of natural nature </p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="images/kite2.jpg" class="d-block w-100 card-img-top" alt="...">
                    <div class="carousel-caption">
                        <h1> carousel caption</h1>
                        <hr class="nav-hr">
                        <p>this the first carousel</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="images/kite4.jpg" class="d-block w-100 card-img-top" alt="...">
                    <div class="carousel-caption">
                        <h1> carousel caption</h1>
                        <hr class="nav-hr">
                        <p>this the first carousel</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="images/whitewaterraftingimg3.jpg" class="d-block w-100 card-img-top" alt="...">
                    <div class="carousel-caption">
                        <h1> carousel caption</h1>
                        <hr class="nav-hr">
                        <p>this the first carousel</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="images/lamuculturalfestivalimg4.jpg" class="d-block w-100 card-img-top" alt="...">
                    <div class="carousel-caption">
                        <h1> carousel caption</h1>
                        <hr class="nav-hr">
                        <p>this the first carousel</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="images/wildbeasts.jpg" class="d-block w-100 card-img-top" alt="...">
                    <div class="carousel-caption">
                        <h1> carousel caption</h1>
                        <hr class="nav-hr">
                        <p>this the first carousel</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="images/culture.jpg" class="d-block w-100 card-img-top" alt="...">
                    <div class="carousel-caption">
                        <h1> carousel caption</h1>
                        <hr class="nav-hr">
                        <p>this the first carousel</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/conservancyimg8.jpg" class="d-block w-100 card-img-top" alt="...">
                    <div class="carousel-caption">
                        <h1> carousel caption</h1>
                        <hr class="nav-hr">
                        <p>this the first carousel</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="banner pt-2 pl-4">
        <h1 class="display-4 ">National parks </h1>
    </div>
    <div class="p-4" style="background: #f7f9fa">
        <div class="container jumbotron-fluid">
            <p class="disp_title">Kenya has a wide variety of national parks and national reserves, places
                where you can visit. enjoy wild range of nature, beautiful wildlife, birds and indegenious thick forests
                too.
                <break>
                    Kenya prides itself to be home of
                    <quote>34</quote>
                    National parks and
                    <quote>34</quote>
                    national reserves. Most openssl_free_key which
                    have been well conserved and protected by the Government of Kenya Through ...
            </p>
        </div>
    </div>


    <div class="park-wrapper">
        <h2 class="park-title">Lake Nakuru National park</h2>
        <div class="d-flex">
            <div class="content-img ">
                <img class="img-thumbnail" src="images/lakenakuruimg2.jpg" alt="Lake Nakuru image ">

            </div>
            <div class="content ">
                <p class="content-body"> Lake Nakuru was first gazetted as a bird sanctuary in 1960 and upgraded to
                    National Park status in 1968.The Park has Kenya’s largest population of rhinos. The surface of the
                    Lake Nakuru occupies about a third of the park. It supports a dense bloom of the blue-green
                    Cyanophyte Spirulina platensis
                    from which it derives its colour and is a food source for flamingos.During peak
                    season over millions of flamingos and Pelicans congregate on the lake.</p>
                <a href="#demo" data-toggle="collapse">
                    <button class="btn btn-outline-secondary mapbtn">view map</button>
                </a>
                <a href="{{'./lnakurupark'}}">
                    <button class="btn btn-outline-secondary mapbtn">view more</button>
                </a>
                <div id="demo" class="collapse mt-3">
                    <p> map for the area here....</p>
                </div>
            </div>
        </div>
    </div>

    <hr class="makerHr">

    <div class="park-wrapper">
        <h2 class="park-title">Nairobi National Park</h2>
        <div class="d-flex">
            <div class="content-img destination ">
                <img class="img-thumbnail" src="images/nairobinationalpark.jpg" alt="Lake Nakuru image ">

            </div>
            <div class="content ">
                <p class="content-body"> Nairobi National Park is unique by being the only protected area in the world
                    with a variety of animals and birds close to a capital city.The park is a principal attraction for
                    visitors to Nairobi. Nairobi National Park is one of the most successful of Kenya’s rhino
                    sanctuaries that is already generating a stock for reintroduction in the species former range and
                    other upcoming sanctuaries. Due to this success, it is one of the few parks where a visitor can be
                    certain of seeing a black rhino in its natural habitat.</p>

                <a href="#demo" data-toggle="collapse">
                    <button class="btn btn-outline-secondary mapbtn">view map</button>
                </a>
                <a href="{{'./nationalParks/nairobiNationalPark'}}">
                    <button class="btn btn-outline-secondary mapbtn">view more</button>
                </a>
                <div id="demo" class="collapse mt-3">
                    <p> map for the area here....</p>
                </div>
            </div>
        </div>
    </div>

    <hr class="makerHr">

    <div class="park-wrapper">
        <h2 class="park-title">Amboseli National Park</h2>
        <div class="d-flex">
            <div class="content-img destination ">
                <img class="img-thumbnail" src="images/amboselinationalpark.jpg" alt="Lake Nakuru image ">

            </div>
            <div class="content ">
                <p class="content-body"> Amboseli lies immediately north-west of Mount Kilimanjaro, on the border with
                    Tanzania. The Park covers 392 square km, and forms part of the much larger 3,000 square km Amboseli
                    ecosystem. Large concentrations of wildlife occur here in the dry season, making Amboseli a popular
                    tourist destination. It is surrounded by six communally owned group ranches. The National Park
                    embodies five main wildlife habitats (open plains, acacia woodland, rocky thorn bush country, swamps
                    and marshland) and covers part of a Pleistocene lake basin, now dry..</p>
                <a href="#demo" data-toggle="collapse">
                    <button class="btn btn-outline-secondary mapbtn">view map</button>
                </a>
                <a href="{{'./nationalParks/amboseli'}}">
                    <button class="btn btn-outline-secondary mapbtn">view more</button>
                </a>
                <div id="demo" class="collapse mt-3">
                    <p> map for the area here....</p>
                </div>
            </div>
        </div>
    </div>

    <hr class="makerHr">

    <div class="park-wrapper">
        <h2 class="park-title">Lake Turkana National park</h2>
        <div class="d-flex">
            <div class="content-img destination ">
                <img class="img-thumbnail" src="images/laketurkananational.jpg" alt="Lake Nakuru image ">

            </div>
            <div class="content ">
                <p class="content-body">The World Heritage Committee inscribed Lake Turkana National Parks on the UNESCO
                    World Heritage List in 1997, which consists of three national parks, located around Lake Turkana,
                    also known as the Jade Sea
                    because of the remarkable, almost incandescent color of its waters, which strikingly appear
                    blue-green</p>
                <a href="{{'./lturkanapark'}}">
                    <button class="btn btn-outline-secondary mapbtn">view more</button>
                </a>
                <a href="#demo" data-toggle="collapse">
                    <button class="btn btn-outline-secondary mapbtn">view map</button>
                </a>
                <div id="demo" class="collapse mt-3">
                    <p> map for the area here....</p>
                </div>
            </div>
        </div>
    </div>

    <hr class="makerHr">

    <div class="park-wrapper">
        <h2 class="park-title">Tsavo national Park</h2>
        <div class="d-flex">
            <div class="content-img destination ">
                <img class="img-thumbnail" src="images/lakenakuruimg2.jpg" alt="Lake Nakuru image ">

            </div>
            <div class="content ">
                <p class="content-body"> Lake Nakuru was first gazetted as a bird sanctuary in 1960 and upgraded to
                    National Park status in 1968.The Park has Kenya’s largest population of rhinos. The surface of the
                    Lake Nakuru occupies about a third of the park. It supports a dense bloom of the blue-green
                    Cyanophyte Spirulina platensis
                    from which it derives its colour and is a food source for flamingos.During peak
                    season over millions of flamingos and Pelicans congregate on the lake.</p>

                <a href="#demo" data-toggle="collapse">
                    <button class="btn btn-outline-secondary mapbtn">view map</button>
                </a>
                <div id="demo" class="collapse mt-3">
                    <p> map for the area here....</p>
                </div>
            </div>
        </div>
    </div>












@endsection
