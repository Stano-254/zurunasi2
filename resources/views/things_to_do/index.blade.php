@extends('layouts.frontend.app')

@section('title','Zurunasi | Things to do')

@section('content')
    <div class=" top_content  ">
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
                    <img src="images/campsite/Campcarnelleys.jpg" class="d-block w-100 card-img-top  " alt="...">
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
                    <img src="images/campsite/Camp-Malta.jpg" class="d-block w-100 card-img-top" alt="...">
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
                    <img src="images/campsite/El-Karama.jpg" class="d-block w-100 card-img-top" alt="...">
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
                    <img src="images/campsite/Mayewa-Bush-Ventures.jpg" class="d-block w-100 card-img-top" alt="...">
                    <div class="carousel-caption">
                        <h1> carousel caption</h1>
                        <hr class="nav-hr">
                        <p>this the first carousel</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="banner pt-2 pl-4">
            <h1 class="display-4 ">Things to do</h1>
        </div>
        <div class="row  p-4 " style="background: #f7f9fa">
            <div class="container jumbotron-fluid">
                <h4 class="text-center">Kenya is jam-packed with things to do. your choice of what to visit first would
                    probably be a little hard</h4>
                <p class="fa-1x">. Exploring Kenya's magnificent landscapes
                    and coastline tops the list for many. Fantastic cycling and walking, sailing or diving.

                    If you're after Kenya's famous adventure activities and extreme sports, there's a myriad to choose
                    from. while rafting, sky diving and sea diving offer a similar rush.
                    As well, participating in the Kenya's
                    richest cultural activities and festivities. you are sure to be treated to the Kenyan welcoming
                    spirit of togetherness, the warm treated of the kenyan people.
                    so be sure there is plenty of things to do</p>
            </div>

        </div>
        <div class="destination_links_showcase bg-light">
            <div class="d-links mt-1  ">
                <div class="destination card  content1 border-0 w-100 h-100">
                    <a href="{{'/camping'}}"><img src="images/campsite/Mamba-Village.jpg" alt="lamu home of culture"
                                                  class="img-fluid  card-img-top">
                        <div class="carousel-caption">
                            <h2 class="semi_title"> Go Camping <i class="fa fa-arrow-right leink-arrow"></i></h2>
                            <hr class="nav-hr">
                            <p><a href="{{'/camping'}}">Looking for a nice cool place with breath-taking sites and lots
                                    of adveture activities that you can undertake, then camping in one of the Kenya's
                                    campiwhether you're a group of friends, family or company looking for a retreat,
                                    there a lot of amazing camping sites in kenya</a></p>
                        </div>
                    </a>
                </div>

                <div class="destination card  content2 border-0 bg-transparent ">
                    <a href="{{'/safaris'}}"><img src="images/safari/hiking.jpg" alt="lamu home of culture"
                                                  class="img-fluid  card-img-top">
                        <div class="carousel-caption">
                            <h2 class="semi_title"> Go on a Safari <i class="fa fa-arrow-right link-arrow"></i></h2>
                            <hr class="nav-hr">
                            <p><a href="{{'/safaris'}}">take an adventure in the Kenya's most beautiful sceneries
                                    organized by some the safari and travel agencies. There are options
                                    to suit individual needs, the most common safaris are to the Game parks, to the
                                    animal orphanage, some just exploring the in depth of forests, see indeginous birds
                                    and
                                    wildlife</a></p>
                        </div>
                    </a>
                </div>


                <div class="destination card  content3  bg-transparent ">
                    <a href="{{'/watersports'}}"><img src="images/whitewaterraftingimg3.jpg" alt="lamu home of culture"
                                                      class="img-fluid  card-img-top">
                        <div class="carousel-caption">
                            <h2 class="semi_title"> water Sports <i class="fa fa-arrow-right link-arrow"></i></h2>
                            <hr class="nav-hr">
                            <p><a href="{{'/watersports'}}">There are a variety of water sports to partake on while in
                                    kenya, water rafting, fishing, swimming, boat riding tours. we got you covered as
                                    far a
                                    getting the best out of a moment. there is even special tour guides for those who
                                    wish to tour the lake regions on boats.</a></p>
                        </div>
                    </a>
                </div>

            </div>
            <div class=" d-links mt-1 ">
                <div class=" content4 bg-transparent ">
                    <div class="destination card bg-transparent">
                        <a href="{{'/culture'}}"><img src="images/nyaligolfimg2.jpg" alt="lamu home of culture"
                                                      class="img-fluid  card-img-top">
                            <div class="carousel-caption">
                                <h2 class="semi_title"> cultural Heritage <i class="fa fa-arrow-right link-arrow"></i>
                                </h2>
                                <hr class="nav-hr">
                                <p><a href="{{'/culture'}}">Kenya is home to a very rich and vibrant culture, The famous
                                        Maasai culture,the culture of the coastal people, we welcome you to the Kenyan
                                        culture be sure not to miss the Grit and Openness and lively
                                        spirit, because then you'll be close to really having a kenyan experience</a>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="destination card  content5 border-0 bg-transparent ">
                    <a href="{{'/festivals'}}"><img src="images/lamuculturalfestivalimg4.jpg" alt="lamu home of culture"
                                                    class="img-fluid  card-img-top"></a>
                    <div class="carousel-caption">
                        <h2 class="semi_title"> Events & Festivities <i class="fa fa-arrow-right link-arrow"></i></h2>
                        <hr class="nav-hr">
                        <p><a href="{{'/festivals'}}">while in Kenya enjoy being Kenyan for a while, it time to grab
                                your Kenyan Kitenge and show up at some of the local kenyan events, that will brighten
                                your vocation
                                join in on the festivals around, there you get to meet with the Kenya spirit alive and
                                at its best. If you are a foreigner be sure you'll learn alot about culture diversity
                                such
                                events and festivals. so brace your self and enjoys. the true Kenyan way.</a></p>
                    </div>

                </div>

                <div class="destination card  content6 bg-transparent ">
                    <a href="{{'/golf'}}"><img src="images/nyaligolfimg2.jpg" alt="lamu home of culture"
                                               class="img-fluid  card-img-top">
                        <div class="carousel-caption">
                            <h2 class="semi_title"> Play Golf <i class="fa fa-arrow-right link-arrow"></i></h2>
                            <hr class="nav-hr">
                            <p><a href="{{'/golf'}}"> when on holiday, vocation or you're here for the sport, be sure to
                                    check out, the most awesome golf courses around the Country. All secluded
                                    and well maintained to give you peace and fun at the same time. so pick up your club
                                    and let's check out some of the Best Golf courses around. shall we!!</a></p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


@endsection
