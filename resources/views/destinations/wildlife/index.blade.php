@extends('layouts.frontend.app')

@section('title','wildlife')

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
                        <h1> Our Marine life</h1>
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
        <h1 class="display-4 ">Our Big five wildlife </h1>
    </div>
    <div class="p-4" style="background: #f7f9fa">
        <div class="container jumbotron-fluid">
            <p class="disp_title">There is no other place to see the most amazing wildlife, its only in Kenya where you
                get to see a variety of the big five, ranging from Lion & Lioness, Cheetah, Leopards, Elephants ,
                Baboon, Chimpanzee and Giraffee.
                Kenya welcomes you to the most amazing asthetic beauty of the Kenyan wildlife. </p>
        </div>

    </div>

    <div class="park-wrapper">
        <h2 class="park-title">Lion and Lioness</h2>
        <div class="d-flex">
            <div class="content-img ">
                <img class="img-thumbnail" src="images/lakenakuruimg2.jpg" alt="Lake Nakuru image ">

            </div>
            <div class="content ">
                <p class="content-body"> The park is located south of Malindi town extending to Mida creek. It neighbors
                    the Gede ruins and Arabuko Sokoke forest.
                    The park is enveloped by a national reserve and a 100ft strip of coastal land starting from
                    Vasco-da-Gama pillar to Watamu. The reserve extends 3.5 nautical miles to seaward.
                    The park is endowed with magnificent resources such as fringing reefs, coral, sea grass, mangroves,
                    mudflats, high fish diversity, marine mammals, turtles and shorebirds.The fringing reef is close to
                    shore and exposed during low tide, but drops gradually to a sea grass bed that descends
                    precipitously to the deep Barracuda Channel.</p>
                <a href="#demo" data-toggle="collapse">
                    <button class="btn btn-outline-secondary mapbtn">view map</button>
                </a>
                <div id="demo" class="collapse mt-3">
                    <p> map for the area here....</p>
                </div>
            </div>
        </div>
    </div>
    <div class="park-wrapper">
        <h2 class="park-title">Elephants</h2>
        <div class="d-flex">
            <div class="content-img destination ">
                <img class="img-thumbnail" src="images/lakenakuruimg2.jpg" alt="Lake Nakuru image ">

            </div>
            <div class="content ">
                <p class="content-body"> Some of the best sites are in the Watamu Marine National Park- a well protected
                    and managed area.
                    The reef here is close to shore, meaning easily accessible shallow coral gardens that are ideal for
                    learners and snorkelers.
                    Whale Sharks pass through this year each year from October- February, with good sightings reported
                    each day.Migratory pods of Whales from Southern Africa pass through this area
                    during the months of June- September, and are often seen breaching in deep water beyond the
                    reefs.The outer reef has some fine drop offs, with sheer walls, and large brain corals attracting
                    consistently abundant sea life.
                </p>
                <div id="viewmorewatamu" class="collapse">
                    <p class="content-body"> Dives on the central Turtle Reef average at around 10-15 meters, with high
                        spiking coral heads attracting large shoals of colourful parrot and surgeon fish.You will
                        occasionally sight a few white-tip reef sharks that are in residence on the reef.This area is an
                        important egg laying site for the endangered Green sea Turtle,
                        which lay on the beaches at Watamu several times a year, and they are often seen around this
                        reef.Nearby Moray Reef has a breathtaking overhang dropping 28 metres to a sandy bottom.
                        The coral here is a refuge for octopus and eel. The sharp reef edge has plenty of nudibranch,
                        angel fish, tang, and the occasional grouper or barracuda.An excellent all round dive site is
                        the Canyon, a long sandy channel at 28m, bordered on each side by deep drop-offs. There is an
                        impressive arch covered with soft corals, and the reef walls are always alive with trevalies and
                        snapper.
                        Diving into the channel itself is a good way to find rays and reef sharks..</p>

                </div>
                <a href="#viewmorewatamu" data-toggle="collapse">
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

    <div class="park-wrapper">
        <h2 class="park-title">Buffalo</h2>
        <div class="d-flex">
            <div class="content-img destination ">
                <img class="img-thumbnail" src="images/lakenakuruimg2.jpg" alt="Lake Nakuru image ">

            </div>
            <div class="content ">
                <p class="content-body"> Kisite Mpunguti Marine Park is located on the south coast off Shimoni and south
                    of Wasini Island in Kwale District on the south Kenyan coast near the Tanzanian border.The complex
                    covers a marine area with four small islands surrounded by coral reef.Kisite island is a small
                    waterless coral island, 8 km offshore in the Marine Park. Coral platforms around the raised central
                    portion are exposed at low tide.The three other coral islets in the park (Mpunguti ya Juu, Mpunguti
                    ya Chini and Liwe la Jahazi) lie closer to the larger Wasini Island, are scrub covered and support
                    no significant wildlife or birds.The surrounding waters have well developed coral gardens and a
                    large variety of fish.</p>

                <a href="#demo" data-toggle="collapse">
                    <button class="btn btn-outline-secondary mapbtn">view map</button>
                </a>
                <div id="demo" class="collapse mt-3">
                    <p> map for the area here....</p>
                </div>
            </div>
        </div>

    </div>

    <div class="park-wrapper">
        <h2 class="park-title">Baboon</h2>
        <div class="d-flex">
            <div class="content-img destination ">
                <img class="img-thumbnail" src="images/lakenakuruimg2.jpg" alt="Lake Nakuru image ">

            </div>
            <div class="content ">
                <p class="content-body"> Both the park and reserve are the most highly utilized among marine protected
                    areas. There are various local agents who offer boats for hire to get into the Marine Park. There
                    are quite a good number of companies offering water sports facilities. These firms are spread along
                    the beach. The place is ideal for diving.
                    Diving gear is readily available from water sports desks at the hotels in Mombasa</p>

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
