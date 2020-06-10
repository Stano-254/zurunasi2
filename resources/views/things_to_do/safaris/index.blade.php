@extends('layouts.frontend.app')

@section('title','go on a safari')


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
        <h1 class="display-4 ">Go On a Safari </h1>
    </div>
    <div class="p-4" style="background: #f7f9fa">
        <div class="container jumbotron-fluid">
            <p class="disp_title">take an adventure in the Kenya's most beautiful sceneries organized by some the safari
                and travel agencies. There are options
                to suit individual needs, the most common safaris are to the Game parks, to the animal orphanage, some
                just exploring the in depth of forests, see indeginous birds and
                wildlife </p>
        </div>
    </div>


    <div class="park-wrapper">
        <h2 class="park-title">Go on Camel Safari</h2>
        <div class="d-flex">
            <div class="content-img ">
                <img class="img-thumbnail" src="images/safari/maralalcamel.jpg" alt="Maralal came raiding ">
            </div>
            <div class="content ">
                <p class="content-body"> Camel Safaris are becoming an increasingly popular way to explore Kenya’s
                    wilderness. The camel is perfectly adapted to this landscape and is widely used throughout Northern
                    Kenya. Camels with saddles are usually used. Gifted local guides, for whom a camel train through the
                    wilderness is a way of life accompany groups and introduce them to the bush and the local wildlife.
                    A camel safari in Kenya is a once in a lifetime experience, riding through the bush with only the
                    sounds of the wild and the soft tinkling of the camel bells, you will find yourself travelling at a
                    relaxed pace,
                    moving through the wild in tune with the rhythms of nature</p>
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
        <h2 class="park-title">Go on Walk Safari</h2>
        <div class="d-flex">
            <div class="content-img destination ">
                <img class="img-thumbnail" src="images/safari/walkingsafari.jpg" alt="walking safari ">
            </div>
            <div class="content ">
                <p class="content-body"> A privately escorted foot safari in Kenya is the best way to really experience
                    the African bush at its best. Walking through the wild allows you to explore the Kenyan wildness at
                    its most pure. As you track big game, you become aware of every sight and sound, the smell of the
                    earth and the touch of the wind.

                    Various camps and lodges in Kenya have guides available for game and birding walks into the bush.
                    Whether you are a keen birder, or would like to get close to game on foot, this is the perfect way
                    to explore Kenya. The guides have an excellent local knowledge and are well versed at tracking and
                    approaching game.

                    There are few experiences as exhilarating as a close encounter with an elephant, lion or buffalo.
                    This is an experience that will make you feel more alive. You will, of course, want to stay alive so
                    make sure that any foot safari is undertaken by a fully trained and responsible guide..</p>

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
        <h2 class="park-title">Bike raiding tour Safari</h2>
        <div class="d-flex">
            <div class="content-img destination ">
                <img class="img-thumbnail" src="images/safari/mountainbiking.jpg" alt="Mountain biking in Naivasha ">
            </div>
            <div class="content ">
                <p class="content-body"> Kenya has some excellent potential areas for off road mountain biking. As the
                    popularity of the sport increases, more and more mountain bikes are now for hire, and there is
                    plenty of undiscovered country for bush biking.
                    most suitable terrain for bike tour are:- <a href="{{'/bikeriding/#diani'}}">south coast area within
                        diani</a> ,<a href="{{'/bikeriding/#watama'}}">Areas of Malindi and Watamu coastline</a>, <a
                        href="{{'/bikeriding/#bikenaivasha'}}">Mountain biking in Naivasha</a></p>

                <a href="#demo" data-toggle="collapse">
                    <button class="btn btn-outline-secondary mapbtn">view map</button>
                </a>
                <a href="{{'./bikeriding'}}">
                    <button class="btn btn-outline-secondary mapbtn">Read more</button>
                </a>
                <div id="demo" class="collapse mt-3">
                    <p> map for the area here....</p>
                </div>
            </div>
        </div>
    </div>

    <hr class="makerHr">

    <div class="park-wrapper">
        <h2 class="park-title">Hot Air Ballons safaris</h2>
        <div class="d-flex">
            <div class="content-img destination ">
                <img class="img-thumbnail" src="images/safari/balloonsafari.jpg" alt="Maasai Mara ballon ">

            </div>
            <div class="content ">
                <p class="content-body">For a truly unique perspective on this spectacular wilderness, dawn Balloon
                    safaris, carried out daily from several lodges, can be booked through most Safari companies. This
                    incredible once in a lifetime experience offers the visitor a fantastic view of the great plains of
                    the Mara and the chance to drift unobtrusively over the great herds below</p>
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
        <h2 class="park-title">Hiking And Trekking</h2>
        <div class="d-flex">
            <div class="content-img destination ">
                <img class="img-thumbnail" src="images/safari/hiking.jpg" alt="Lake Nakuru image ">

            </div>
            <div class="content ">
                <p class="content-body"> For the Trekker, Kenya is a world of highs and lows assuming you don’t
                    suffer from muscle conditions like Tetany or hypocalcemia. From the snow capped peak of Mt Kenya to
                    the desert plains of the north. There are a range of treks from sedate hill walks through game rich
                    ranges to high altitude routes on alpine slopes. For those aiming higher, Kenya offers plenty of
                    challenges. Climbers may be aware of the mighty peak of Mt Kenya, but there are many other climbing
                    areas to be explored. There is a broad scope of destinations, from granite cliffs and volcanic rock
                    towers to the ultimate challenge-
                    a technical assault on Africa’s second highest summit. </p>

                <a href="{{'./hiking'}}">
                    <button class="btn btn-outline-secondary mapbtn">Read more</button>
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
        <h2 class="park-title">Boat Dhow Safaris</h2>
        <div class="d-flex">
            <div class="content-img destination ">
                <img class="img-thumbnail" src="images/safari/boatdhow.jpg" alt="Lake Nakuru image ">

            </div>
            <div class="content ">
                <p class="content-body"> A day spent at sea on a Dhow Safari is a wonderful experience and a fantastic
                    way to explore Kenya’s pristine coastline.
                    And not online the coastline but Boat Safaris are common too in the Lake victoria, Former Nyanza
                    province, Kisumu county. This provides a beutiful view of the surrundings the water, breeze and the
                    landscape.</p>

                <a href="{{'./dhowsafari'}}">
                    <button class="btn btn-outline-secondary mapbtn">Read more</button>
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












@endsection

