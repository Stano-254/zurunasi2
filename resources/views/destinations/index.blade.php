@extends('layouts.frontend.app')

@section('title','Zurunasi|Destinations')

@section('content')
    <div class=" top_content  " style="background:#ffffff">
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
        <div class="banner pt-2 pl-4">
            <h1 class="display-4 ">Destinations </h1>
        </div>
        <div class="row  p-4 " style="background: #f7f9fa">
            <div class="container jumbotron-fluid">
                <p class="disp_title">if looking for a tourist destination that will give you an experience you'll live
                    to remember then Kenya, has a variety of destination to serve your varied needs wether
                    it's water-rafting or seeing wildlife or just want to sand bath at the kenyan coast</p>
            </div>

        </div>
        <div class="destination_links_showcase bg-light">
            <div class="d-links mt-1  ">
                <div class="destination card  content1 border-0">
                    <a href="{{'/nationalParks'}}"><img src="images/mtkenyawildlife.jpg" alt="lamu home of culture"
                                                        class="img-fluid  card-img-top">
                        <div class="carousel-caption">
                            <h2 class="semi_title"> Our National Parks <i class="fa fa-arrow-right link-arrow"></i></h2>
                            <hr class="nav-hr">
                            <p>Spend time in Kenya's national parks and you'll begin to understand the soul of this
                                place. Our national
                                parks are treasured and preserve our natural heritage, forests, wildlife and landscapes,
                                close to - if
                                not exactly, as it was before people arrived here <a href="{{'/nationalParks'}}">Our
                                    national parks</a></p>
                        </div>
                    </a>
                </div>

                <div class="destination card  content2 border-0 bg-transparent ">
                    <a href="{{'/nationalParks'}}"><img src="images/lamumuseum.jpg" alt="lamu home of culture"
                                                        class="img-fluid  card-img-top">
                        <div class="carousel-caption">
                            <h2 class="semi_title"> Our Museums <i class="fa fa-arrow-right link-arrow"></i></h2>
                            <hr class="nav-hr">
                            <p>Spend time in Kenya's national parks and you'll begin to understand the soul of this
                                place. Our national
                                parks are treasured and preserve our natural heritage, forests, wildlife and landscapes,
                                close to - if
                                not exactly, as it was before people arrived here <a href="{{'/nationalParks'}}">Our
                                    national parks</a></p>
                        </div>
                    </a>
                </div>


                <div class="destination card  content3  bg-transparent ">
                    <a href="{{'/nationalParks'}}"><img src="images/fortjesus.jpg" alt="lamu home of culture"
                                                        class="img-fluid  card-img-top">
                        <div class="carousel-caption">
                            <h2 class="semi_title"> Monuments <i class="fa fa-arrow-right link-arrow"></i></h2>
                            <hr class="nav-hr">
                            <p>Spend time in Kenya's national parks and you'll begin to understand the soul of this
                                place. Our national
                                parks are treasured and preserve our natural heritage, forests, wildlife and landscapes,
                                close to - if
                                not exactly, as it was before people arrived here <a href="{{'/nationalParks'}}">Our
                                    national parks</a></p>
                        </div>
                    </a>
                </div>

            </div>
            <div class=" d-links mt-1 ">
                <div class=" content4 bg-transparent ">
                    <div class="destination card bg-transparent">
                        <a href="{{'/nationalParks'}}"><img src="images/elephantwatching.jpg" alt="lamu home of culture"
                                                            class="img-fluid  card-img-top">
                            <div class="carousel-caption">
                                <h2 class="semi_title"> Big Five <i class="fa fa-arrow-right link-arrow"></i></h2>
                                <hr class="nav-hr">
                                <p>Spend time in Kenya's national parks and you'll begin to understand the soul of this
                                    place. Our national
                                    parks are treasured and preserve our natural heritage, forests, wildlife and
                                    landscapes, close to - if
                                    not exactly, as it was before people arrived here <a href="{{'/nationalParks'}}">Our
                                        national parks</a></p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="destination card  content5 border-0 bg-transparent ">
                    <a href="{{'/nationalParks'}}"><img src="images/olpejetaimg.jpg" alt="lamu home of culture"
                                                        class="img-fluid  card-img-top">
                        <div class="carousel-caption">
                            <h2 class="semi_title"> Conservancies <i class="fa fa-arrow-right link-arrow"></i></h2>
                            <hr class="nav-hr">
                            <p>Spend time in Kenya's national parks and you'll begin to understand the soul of this
                                place. Our national
                                parks are treasured and preserve our natural heritage, forests, wildlife and landscapes,
                                close to - if
                                not exactly, as it was before people arrived here <a href="{{'/nationalParks'}}">Our
                                    national parks</a></p>
                        </div>
                    </a>
                </div>

                <div class="destination card  content6 bg-transparent ">
                    <a href="{{'/nationalParks'}}"><img src="images/kakamegaforest.jpg" alt="lamu home of culture"
                                                        class="img-fluid  card-img-top">
                        <div class="carousel-caption">
                            <h2 class="semi_title"> Our Forests <i class="fa fa-arrow-right link-arrow"></i></h2>
                            <hr class="nav-hr">
                            <p>Spend time in Kenya's national parks and you'll begin to understand the soul of this
                                place. Our national
                                parks are treasured and preserve our natural heritage, forests, wildlife and landscapes,
                                close to - if
                                not exactly, as it was before people arrived here <a href="{{'/nationalParks'}}">Our
                                    national parks</a></p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


@endsection
