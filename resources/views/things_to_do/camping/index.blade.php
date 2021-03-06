@extends('layouts.frontend.app')

@section('title','Go Camping')

@section('content')
    <div class="top_content">
        <div id="homepageSlide" class="carousel slide carousel-fade" data-interval="3500" data-ride="carousel">
            <div class="carousel-inner" style="height:520px;width:auto">
                <ol class="carousel-indicators">
                    <li data-target="#homepageSlide" data-slide-to="0" class="active dot"></li>
                    <li data-target="#homepageSlide" data-slide-to="1" class="dot"></li>
                    <li data-target="#homepageSlide" data-slide-to="2" class="dot"></li>
                    <li data-target="#homepageSlide" data-slide-to="3" class="dot"></li>
                    <li data-target="#homepageSlide" data-slide-to="4" class="dot"></li>
                    <li data-target="#homepageSlide" data-slide-to="5" class="dot"></li>
                </ol>
                <div class="carousel-item active">
                    <img src="images/campsite/Camp-Malta.jpg" class="d-block w-100 card-img-top  " alt="...">
                    <div class="carousel-caption">

                    </div>
                </div>

                <div class="carousel-item ">
                    <img src="images/campsite/Campcarnelleys.jpg" class="d-block w-100 card-img-top  " alt="...">
                    <div class="carousel-caption">

                    </div>
                </div>

                <div class="carousel-item ">
                    <img src="images/campsite/El-Karama.jpg" class="d-block w-100 card-img-top  " alt="...">
                    <div class="carousel-caption">

                    </div>
                </div>

                <div class="carousel-item">
                    <img src="images/campsite/Rapid-Camp-Sagana.jpg" class="d-block w-100 card-img-top  " alt="...">
                    <div class="carousel-caption">

                    </div>
                </div>

                <div class="carousel-item">
                    <img src="images/campsite/Wildebreest.jpg" class="d-block w-100 card-img-top  " alt="...">
                    <div class="carousel-caption">

                    </div>
                </div>

                <div class="carousel-item">
                    <img src="images/campsite/Camp-Yan-Kanzi1.png" class="d-block w-100 card-img-top  " alt="...">
                    <div class="carousel-caption">

                    </div>
                </div>
            </div>
        </div>
        <div class="banner pt-2 pl-4">
            <h1 class="display-4 ">Go Camping </h1>
        </div>
        <div class="p-4" style="background: #f7f9fa">
            <div class="container jumbotron-fluid">
                <p class="disp_title">Kenya has many scenic and peaceful places and most of them are great spots to go
                    camping.The picturesque scenery,
                    warm temperatures and great landscapes have made Kenya a camping destination for those who love
                    outdoor activities such as picnic, fishing and hiking.There are lots of places to go camping in
                    Kenya and they are all located in well-preservedlocalities, most are frequently close to the
                    National Parks.
                    The country’s national parks are wide spread all through the areas and they are great environment
                    for numerous styles of camping </p>
            </div>

        </div>

        <div class="park-wrapper">
            <h2 class="park-title">Rapids Camp, Sagana</h2>
            <div class="d-flex">
                <div class="content-img w-100">
                    <img class="img-thumbnail" src="images/campsite/Rapid-Camp-Sagana.jpg" alt="Lake Nakuru image ">

                </div>
                <div class="content ">
                    <p class="content-body"> Located right by the river, Rapids Camp is a camping site well-known for
                        its adventurous outdoor activities.
                        The riverside campsite is a perfect place to pitch a camping tent, relax and indulge yourself in
                        fun activities. Rapids camp others a
                        scenic surrounding with magnificent landscape. You can pitch your tent next to the Sagana
                        River and enjoy variety of water sports such as kayaking, water rafting in Tana River and
                        canoeing.</p>
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
            <h2 class="park-title">Malewa Bush Ventures</h2>
            <div class="d-flex">
                <div class="content-img destination ">
                    <img class="img-thumbnail" src="images/campsite/Mayewa-Bush-Ventures.jpg" alt="Lake Nakuru image ">

                </div>
                <div class="content ">
                    <p class="content-body"> Located near Naivasha, next to the Kigio Wildlife Conservancy, Malewa Bush
                        Ventures is anideal camping site, a quick getaway into a serene environment, which is surrounded
                        by plushvegetation. Malewa Bush Ventures o ers outdoor activities such as rock climbing,
                        trekking,game viewing, boating and  shing. The campsite o ers a variety of accommodation
                        includingluxury tents and dome tents with suitable facilities. Visit: <a
                            href="http://www.malewa.co.ke/">Malewa Bush Ventures</a>.</p>

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
            <h2 class="park-title">Wildebeest Eco Camp</h2>
            <div class="d-flex">
                <div class="content-img destination ">
                    <img class="img-thumbnail" src="images/campsite/WildebreestEcoCamp.jpg" alt="Wildebreest Eco Camp ">

                </div>
                <div class="content ">
                    <p class="content-body"> This is an eclectic camping site located in Lang’ata,
                        just next to Mamba Village. Here you will find all sorts of camping facilities,
                        from low budget tents to high luxury tents with electricity and flushable toilets.
                        It is the ideal place for a quick ‘one night’ getaway for city folk looking togo country! Visit:
                        <a href="http://wildebeestecocamp.com/">Wildebeest Eco Camp </a>.</p>
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
            <h2 class="park-title">El Karama</h2>
            <div class="d-flex">
                <div class="content-img destination ">
                    <img class="img-thumbnail" src="images/campsite/El-Karama.jpg" alt="Lake Nakuru image ">

                </div>
                <div class="content ">
                    <p class="content-body">TThis is a beautiful family run eco-camp site. It is located centrally
                        within Laikipia District.
                        ElKarama stands out, not only because it has luxury camping facilities, but because this region
                        has
                        the most diverse fauna and flora than anywhere else in the entire country!
                        The river side campsite and the beautiful cottages will give you a time to remember.</p>
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
            <h2 class="park-title">Kiboko Camp</h2>
            <div class="d-flex">
                <div class="content-img destination ">
                    <img class="img-thumbnail" src="images/campsite/WildebreestEcoCamp.jpg" alt="Lake Nakuru image ">

                </div>
                <div class="content ">
                    <p class="content-body"> This is a 12 tented camping site only 100KM from Malindi. It is ideal for
                        those travelers who want
                        to experience a bit of the country side but do not want to go too far from the beach. It has a
                        fully stocked bar and kitchen,
                        an amazing overview of a fast following river that brings with it different types of animals
                        from the wild.
                        This truly is Africa at its best. Visit: <a href="http://www.kibokocamp.com/">Kiboko
                            Campsite</a>.</p>

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
            <h2 class="park-title">Camp Malta</h2>
            <div class="d-flex">
                <div class="content-img destination h-100">
                    <img class="img-thumbnail" src="images/campsite/Camp-Malta1.jpg" alt="Lake Nakuru image ">

                </div>
                <div class="content ">
                    <p class="content-body"> Lake Nakuru was first gazetted as a bird sanctuary in 1960 and upgraded to
                        National Park status in 1968.The Park has Kenya’s largest population of rhinos. The surface of
                        the Lake Nakuru occupies about a third of the park. It supports a dense bloom of the blue-green
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

        <hr class="makerHr">

        <div class="park-wrapper">
            <h2 class="park-title">Camp Ya Kanzi</h2>
            <div class="d-flex">
                <div class="content-img destination ">
                    <img class="img-thumbnail" src="images/campsite/Camp-Yan-Kanzi.png" alt=" Camp Ya Kanzi image ">

                </div>
                <div class="content ">
                    <p class="content-body"> Located deep in the Maasai territory, Camp Ya Kanzi is an award winning
                        camping site that is at the foot of the legendary Chyulu Hills.
                        Here, you will experience first class wilderness accommodation,
                        amazingly exotic wildlife and get a taste of authentic Maasai culture.</p>

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
