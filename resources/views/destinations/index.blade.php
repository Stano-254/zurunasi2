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
                @foreach($intros as $dest_intro)
                    {{--                <p class="disp_title">if looking for a tourist destination that will give you an experience you'll live--}}
                    {{--                    to remember then Kenya, has a variety of destination to serve your varied needs wether--}}
                    {{--                    it's water-rafting or seeing wildlife or just want to sand bath at the kenyan coast</p>--}}
                    <p class="disp_title">{{$dest_intro->desc}}</p>
                @endforeach
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
                            {{--                            <p><a href="{{'/nationalParks'}}">Spend time in Kenya's national parks and you'll begin to understand the soul of this--}}
                            {{--                                place. Our national parks are treasured and preserve our natural heritage, forests, wildlife and landscapes, close to--}}
                            {{--                                    if not exactly, as it was before people arrived here Our national parks</a></p>--}}
                            <p><a href="{{'/nationalParks'}}">{{$other_intro[0]->desc}}</a></p>
                        </div>
                    </a>
                </div>

                <div class="destination card  content2 border-0 bg-transparent ">
                    <a href="{{'/historic_sites'}}"><img src="images/lamumuseum.jpg" alt="lamu home of culture"
                                                         class="img-fluid  card-img-top">
                        <div class="carousel-caption">
                            <h2 class="semi_title"> Our Museums <i class="fa fa-arrow-right link-arrow"></i></h2>
                            <hr class="nav-hr">
                            {{--                            <p><a href="{{'/historic_sites'}}"> Museum visits are not about dusty artefacts. In Kenya, museums provide an educational insight of our culture,--}}
                            {{--                                history and contemporary themes Our museums</a></p>--}}
                            <p><a href="{{'/historic_sites'}}"> {{$other_intro[1]->desc}}</a></p>
                        </div>
                    </a>
                </div>


                <div class="destination card  content3  bg-transparent ">
                    <a href="{{'/marineParks'}}"><img src="images/fortjesus.jpg" alt="lamu home of culture"
                                                      class="img-fluid  card-img-top">
                        <div class="carousel-caption">
                            <h2 class="semi_title"> Marine life <i class="fa fa-arrow-right link-arrow"></i></h2>
                            <hr class="nav-hr">
                            {{--                            <p><a href="{{'/marineParks'}}"> Marine parks in Kenya have been established at the Coastal Kenya to protect the rich aquatic life abound in the Kenyan waters.--}}
                            {{--                                If you love underwater photography and underwater flora and fauna excites you, come to the Kenya and enjoy your underwater--}}
                            {{--                                paradise.  </a> </p>--}}
                            <p><a href="{{'/marineParks'}}">{{$other_intro[2]->desc}}  </a></p>
                        </div>
                    </a>
                </div>

            </div>
            <div class=" d-links mt-1 ">
                <div class=" content4 bg-transparent ">
                    <div class="destination card bg-transparent">
                        <a href="{{'/wildlife'}}"><img src="images/elephantwatching.jpg" alt="lamu home of culture"
                                                       class="img-fluid  card-img-top">
                            <div class="carousel-caption">
                                <h2 class="semi_title"> Big Five <i class="fa fa-arrow-right link-arrow"></i></h2>
                                <hr class="nav-hr">
                                {{--                                <p> <a href="{{'/wildlife'}}">There is no other place to see the most amazing wildlife, its only in Kenya where you get to see a variety of the--}}
                                {{--                                    big five, ranging from Lion & Lioness, Cheetah, Leopards, Elephants ,--}}
                                {{--                                    Baboon, Chimpanzee and Giraffee. Kenya welcomes you to the most amazing asthetic beauty of the Kenyan wildlife.--}}
                                {{--                                   </a></p> --}}
                                <p><a href="{{'/wildlife'}}">{{$other_intro[3]->desc}} </a></p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="destination card  content5 border-0 bg-transparent ">
                    <a href="{{'/conservancy'}}"><img src="images/olpejetaimg.jpg" alt="lamu home of culture"
                                                      class="img-fluid  card-img-top">
                        <div class="carousel-caption">
                            <h2 class="semi_title"> Conservancies <i class="fa fa-arrow-right link-arrow"></i></h2>
                            <hr class="nav-hr">
                            {{--                            <p><a href="{{'/conservancy'}}">Kenya has lost nearly 70% of its wildlife during the past 30 years. Loss of space and connectivity and the increasing development--}}
                            {{--                                pressures and impacts of climate change is threatening Kenya’s--}}
                            {{--                                iconic wildlife, its multibillion tourism industry and livelihoods for rural communities.--}}
                            {{--                                Conservancies offer hope.  </a></p>--}}
                            <p><a href="{{'/conservancy'}}"> {{$other_intro[4]->desc}} </a></p>
                        </div>
                    </a>
                </div>


                <div class="destination card  content6 bg-transparent ">
                    <a href="{{'/forests'}}"><img src="images/kakamegaforest.jpg" alt="lamu home of culture"
                                                  class="img-fluid  card-img-top">
                        <div class="carousel-caption">
                            <h2 class="semi_title"> Our Forests <i class="fa fa-arrow-right link-arrow"></i></h2>
                            <hr class="nav-hr">
                            <p><a href="{{'/forests'}}">There's always somewhere new to enjoy, forests is filled with
                                    inspiring places to visit and things to do. some created
                                    by nature, others made by histroy.prepare to be educated and enchanted but never
                                    bored</a></p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


@endsection
