@extends('layouts.frontend.app')

@section('title','Homepage')

@section('content')
    <div class="mt-5">
        <div class="justify-content-center ">
            <div class="slider">


                <div id="homepageSlide" class="carousel slide carousel-fade" data-interval="2500" data-ride="carousel">

                    <div class="carousel-inner" style="height:500px">
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
                            <img src="images/culture.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="images/tour.jpg" class="d-block w-100" alt="...">
                        </div>

                        <div class="carousel-item">
                            <img src="images/tour2.jpg" class="d-block w-100" alt="...">
                        </div>

                        <div class="carousel-item">
                            <img src="images/kite2.jpg" class="d-block w-100" alt="...">
                        </div>

                        <div class="carousel-item">
                            <img src="images/kite4.jpg" class="d-block w-100" alt="...">
                        </div>

                        <div class="carousel-item">
                            <img src="images/whitewaterraftingimg3.jpg" class="d-block w-100" alt="...">
                        </div>

                        <div class="carousel-item">
                            <img src="images/lamuculturalfestivalimg4.jpg" class="d-block w-100" alt="...">
                        </div>

                        <div class="carousel-item">
                            <img src="images/wildbeasts.jpg" class="d-block w-100" alt="...">
                        </div>


                        <div class="carousel-item">
                            <img src="images/conservancyimg8.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid p-0 m-0 ">
        <div class="main-content ">
            <div class="sub_nav bg-dark  d-flex">
                <div class="newsbar ml-5 ">
                    <h4 class=" bg-danger text-white p-2 m-0">Latest News</h4>
                </div>
                @foreach($news as $new)
                    <div class="newscontent ">
                        {{--                    <h6 class=" p-2  text-white font-italic">New migration of wildbeast anticipated. plan your visit--}}
                        {{--                        around this period for a wonderful experience </h6>--}}
                        <h6 class=" p-2  text-white font-italic">{{$new->title}} </h6>
                    </div>
                @endforeach
            </div>
            <div class="content d-flex pl-4 pr-4">
                <div class="center-page py-2 mr-5">
                    @foreach($intros as $intro)
                        <h2 class="">
                            <strong> {{$intro->title}}</strong>
                        </h2>
                        <hr class="nav-hr">
                        <div class=" container-fluid sub-content mt-2">

                            <p>{{$intro->desc}}</p>
                            @endforeach
                            {{--                        <p> We have designed this website to let you explore Kenya and discover the untold wealth of--}}
                            {{--                            destinations--}}
                            {{--                            and experiences available to the visitor; if you are planning a trip to Kenya or just--}}
                            {{--                            interested in learning more about--}}
                            {{--                            the country , you'll find all the relevant information to make your experience a wonderful--}}
                            {{--                            one.</p>--}}
                        </div>
                        <div class="row d-flex my-2 ml-4">
                            <div class="card card-item   bg-transparent border-0">
                                <div class="body ">
                                    <img src="images/nyaligolfimg2.jpg" class="img-fluid  card-img-top"
                                         alt="our culture">
                                    <h6 class=" text-center m-0">National parks</h6>
                                    <p class=" "><i>"Spend</i> time in Kenya's national parks and you'll begin to
                                        understand
                                        the soul
                                        of this place. Our national parks are treasured and preserved our natural
                                        heritage,
                                        wildlife and landscapes,close
                                        to - if not exactly as it was before people arrived here"</p>
                                </div>

                            </div>
                            <div class="card bg-transparent card-item ml-3 border-0">
                                <div class="body">
                                    <img src="images/highlandsandvalleysthumb.jpg" class="img-fluid  card-img-top"
                                         alt="our culture">
                                    <p class="text-justify"> From hand feeding of Giraffe, to adopting orphaned
                                        elephants,
                                        to taking
                                    breathtaking balloon safaris in at down. There are alot you can do in Kenya.</p>
                            </div>

                        </div>

                        <div class="card card-item bg-transparent ml-3 border-0">
                            <div class="body">
                                <img src="images/wildbeasts.jpg" class="img-fluid  card-img-top" alt="our culture">
                                <p class="text-justify">The big-5, beutiful diversity of landscapes, animals birds and
                                    plant life and fascinating
                                    cultures. white sandy beaches on the East African coast more than 45 National parks
                                    and reserves not to mention the
                                    bustling metropolitan cities and town</p>
                            </div>

                        </div>


                    </div>
                </div>
                <div class="right-sidebar py-2 row">
                    <div class="showcase ml-5 pl-3 ">
                        <div class="card  border-0 my-3 ">
                            <img src="images/culture.jpg" class="img-fluid  card-img-top" alt="our culture">
                        </div>

                        <div class="card  border-0 my-3">
                            <img src="images/wildbeasts.jpg" class="img-fluid  card-img-top" alt="our culture">
                        </div>

                        <div class="card  border-0 my-3">
                            <img src="images/openess.jpg" class="img-fluid  card-img-top" alt="our culture">
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>




@endsection







