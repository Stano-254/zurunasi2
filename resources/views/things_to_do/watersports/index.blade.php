@extends('layouts.frontend.app')

@section('title','Water sports')



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
        <h1 class="display-4 ">Water Sports </h1>
    </div>
    <div class="p-4" style="background: #f7f9fa">
        <div class="container jumbotron-fluid">
            <p class="disp_title">Kenya has a wide variety of fun water sports from scuba diving and snorkelling at the
                Diani Beach , kitesurfing, jet skiing,white water rafting, Deep Sea Fishing to Boat riding. Kenya is
                fully packed within exhilarating fun water activities you can enjoy</p>
        </div>

    </div>

    <div class="park-wrapper">
        <h2 class="park-title">Diving</h2>
        <div class="d-flex">
            <div class="content-img ">
                <img class="img-thumbnail" src="images/watersport/DivingtheCrab.jpg" alt="Diving at Diani Beach"></div>
            <div class="content ">
                <p class="content-body"> Whether you are scuba divers during surface intervals, a family with children
                    or a group of friends, water sports activities will allow you to explore the Kenyan Southern
                    coastline, covering both sea and air. As you know, life around the kenyan coast revolves around the
                    gorgeous warm water of the sea and the refreshing sea breeze..</p>
                <a href="#demo" data-toggle="collapse">
                    <button class="btn btn-outline-secondary mapbtn">view map</button>
                </a>
                <a href="{{'/watersports/diving'}}">
                    <button class="btn btn-outline-secondary mapbtn">view more</button>
                </a>
                <div id="demo" class="collapse mt-3">
                    <p> map for the area here....</p>
                </div>
            </div>

        </div>
    </div>

    <div class="park-wrapper">
        <h2 class="park-title">Kite Surfing</h2>
        <div class="d-flex">
            <div class="content-img destination ">
                <img class="img-thumbnail" src="images/watersport/kitesurf.jpg" alt="kite surfing at Diani beach ">

            </div>
            <div class="content ">
                <p class="content-body">An ever-growing sport, kitesurfing, which involves riding the waves with a board
                    pulled by a kite, moved to Kenya and Zanzibar. In the northern part of the port city of Mombasa, the
                    reef is more distant from the shore: its role as a natural protective barrier is reduced, therefore
                    allowing the waves rolling towards the shore. If this is a small inconvenience for scuba diving,
                    gliders and kite surfing will be more excited about the waves!</p>

                <a href="#demo" data-toggle="collapse">
                    <button class="btn btn-outline-secondary mapbtn">view map</button>
                </a>
                <a href="{{'./watersports/kitesurfing'}}">
                    <button class="btn btn-outline-secondary mapbtn">view more</button>
                </a>
                <div id="demo" class="collapse mt-3">
                    <p> map for the area here....</p>
                </div>
            </div>
        </div>

    </div>

    <div class="park-wrapper">
        <h2 class="park-title">White Water Rafting</h2>
        <div class="d-flex">
            <div class="content-img destination ">
                <img class="img-thumbnail" src="images/watersport/whiterafting.jpg" alt="Lake Nakuru image ">

            </div>
            <div class="content ">
                <p class="content-body">Are you looking for an adventurous and relaxing day trip outside your normal
                    daily activities? White water rafting is the best outdoor activity you can enjoy in Kenya.
                    It’s usually done using an inflatable raft to navigate the white water or different degrees of rough
                    water. White water rafting in Kenya began in 1990 and
                    the activity has gained popularity over time.</p>
                <a href="#demo" data-toggle="collapse">
                    <button class="btn btn-outline-secondary mapbtn">view map</button>
                </a>
                <a href="{{'./watersports/watersport'}}">
                    <button class="btn btn-outline-secondary mapbtn">view more</button>
                </a>
                <div id="demo" class="collapse mt-3">
                    <p> map for the area here....</p>
                </div>
            </div>
        </div>

    </div>

    <div class="park-wrapper">
        <h2 class="park-title">Jet Skiing</h2>
        <div class="d-flex">
            <div class="content-img destination ">
                <img class="img-thumbnail" src="images/laketurkananational.jpg" alt="Lake Nakuru image ">

            </div>
            <div class="content ">
                <p class="content-body">Jet skiing is a high speed water sport that is great for developing your balance
                    and coordination skills as well as your leg muscles.

                    There are many great locations where you can get a great introduction to jet skiing. Of all the
                    water sports, jet skiing is probably the easiest to pick up. It’s also probably the fastest, and
                    it’s the
                    adrenaline attached to that speed that attracts thousands of people to the sport.</p>

            </div>
        </div>
    </div>



    <div class="park-wrapper">
        <h2 class="park-title">Boat Riding</h2>
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

