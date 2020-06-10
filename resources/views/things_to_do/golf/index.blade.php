@extends('layouts.frontend.app')

@section('title','golf courses')

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
                    <img src="images/golf/Vipingo-Ridge-Baobob-Course.png" class="d-block w-100 card-img-top  "
                         alt="...">
                    <div class="carousel-caption">
                        <h1> Our National Parks</h1>
                        <hr class="nav-hr">
                        <p class="text">get the best experience in company of natural nature </p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="images/golf/sigonagolf.jpg" class="d-block w-100 card-img-top" alt="...">
                    <div class="carousel-caption">
                        <h1> carousel caption</h1>
                        <hr class="nav-hr">
                        <p>this the first carousel</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="images/golf/nyaligolfclub.jpeg" class="d-block w-100 card-img-top" alt="...">
                    <div class="carousel-caption">
                        <h1> carousel caption</h1>
                        <hr class="nav-hr">
                        <p>this the first carousel</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="images/golf/windsorgolf.jpg" class="d-block w-100 card-img-top" alt="...">
                    <div class="carousel-caption">
                        <h1> carousel caption</h1>
                        <hr class="nav-hr">
                        <p>this the first carousel</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="images/golf/leisurelodge.jpg" class="d-block w-100 card-img-top" alt="...">
                    <div class="carousel-caption">
                        <h1> carousel caption</h1>
                        <hr class="nav-hr">
                        <p>this the first carousel</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="images/golf/muthaigagolf.jpg" class="d-block w-100 card-img-top" alt="...">
                    <div class="carousel-caption">
                        <h1> carousel caption</h1>
                        <hr class="nav-hr">
                        <p>this the first carousel</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="images/golf/karengolf.jpg" class="d-block w-100 card-img-top" alt="...">
                    <div class="carousel-caption">
                        <h1> carousel caption</h1>
                        <hr class="nav-hr">
                        <p>this the first carousel</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/golf/kenyaroyalgolf.jpg" class="d-block w-100 card-img-top" alt="...">
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
        <h1 class="display-4 ">Golf Courses</h1>
    </div>
    <div class="p-4" style="background: #f7f9fa">
        <div class="container jumbotron-fluid">
            <p class="disp_title">When you think of Kenya, you might think of lions chasing maasai warriors and warriors
                chasing lions. And perhaps you might also have visions of thousands of wildebeests and zebra grazing the
                endless plains and savannah. You will be surprised to find out that when it comes to golfing, Kenya is
                the new gem on your discovery list </p>
        </div>

    </div>

    <div class="park-wrapper">
        <h2 class="park-title">Vipingo Ridge Baobab Course</h2>
        <div class="d-flex">
            <div class="content-img ">
                <img class="img-thumbnail" src="images/golf/Vipingo-Ridge-Baobob-Course.png" alt="Vipigo golf course ">

            </div>
            <div class="content ">
                <p class="content-body"> Vipingo Ridge Baobab Course is a PGA accredited course which lies between the
                    coastline and the green hills inland. The course meets international standards, bringing an
                    unparalleled golfing experience in East Africa. It is always in excellent condition thanks to the
                    computerized irrigation system,
                    fine Bermuda grass and state of the art green-keeping equipment..</p>
                <a href="{{'./golf/vipingogolf'}}">
                    <button class="btn btn-outline-secondary mapbtn">read more</button>
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
        <h2 class="park-title">Windsor Golf and Country Club (Nairobi)</h2>
        <div class="d-flex">
            <div class="content-img destination ">
                <img class="img-thumbnail" src="images/golf/windsorgolf.jpg" alt="Windsor Golf and Country club ">

            </div>
            <div class="content ">
                <p class="content-body">The Windsor Golf Hotel & Country Club is Africa’s leading golf resort having one
                    of Kenya’s best golf courses. While being designed at international standards the local atmosphere
                    is still retained. At the 14th hole you get challenged by a cliff and water. Also, don’t be
                    surprised when you encounter dozens of monkeys while playing! I can say that from my own
                    experience </p>

                <a href="#demo" data-toggle="collapse">
                    <button class="btn btn-outline-secondary mapbtn">view map</button>
                </a>
                <a href="{{'/golf/windsorgolf'}}">
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
        <h2 class="park-title">Muthaiga Golf Club</h2>
        <div class="d-flex">
            <div class="content-img destination ">
                <img class="img-thumbnail" src="images/golf/muthaigagolf.jpg" alt="Muthaiga Golf Club ">

            </div>
            <div class="content ">
                <p class="content-body">Muthaiga Golf Club is an 18-holes championship golf course,it enjoys the
                    influential position of having been one of the Kenya’s pioneer golf courses and it serves as a home
                    to the Kenya Golf Union and plays host to the most prestigious golfing event in the country, The
                    Kenya Open. . It was named best golf club of Kenya in 2015. The golf course is situated in the
                    middle of Nairobi next to Karura Forest..</p>
                <a href="#demo" data-toggle="collapse">
                    <button class="btn btn-outline-secondary mapbtn">view map</button>
                </a>
                <a href="{{'/golf/muthaigagolf'}}">
                    <button class="btn btn-outline-secondary mapbtn">read more</button>
                </a>
                <div id="demo" class="collapse mt-3">
                    <p> map for the area here....</p>
                </div>
            </div>
        </div>

    </div>
    <hr class="makerHr">
    <div class="park-wrapper">
        <h2 class="park-title">Karen Golf & Country Club (Nairobi)</h2>
        <div class="d-flex">
            <div class="content-img destination ">
                <img class="img-thumbnail" src="images/golf/karengolf.jpg" alt="karen golf Country club ">

            </div>
            <div class="content ">
                <p class="content-body">Situated at one of Kenya’s suburb about 16 kilometres from Nairobi, lies The
                    Karen Country Club which is famous for its beautiful course and lawn terrace. This course is in such
                    fine condition, that it is qualified to annually host the Kenyan Open on the European Challenge
                    Tour. The Karen Golf & Country Club golf course has flourishing wildlife, both flora and fauna and
                    even in the dry-season, you will be blown away by its breathtaking scenery.</p>
                <a href="{{'/golf/karengolf'}}">
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
        <h2 class="park-title">Sigona Golf Club </h2>
        <div class="d-flex">
            <div class="content-img destination ">
                <img class="img-thumbnail" src="images/golf/sigonagolf.jpg" alt="Sigona Golf Club ">

            </div>
            <div class="content ">
                <p class="content-body"> Sigona Golf Club provides lush wide fairways and ample dog legs requiring
                    carefully thought-out shots. It has a serene atmosphere and lies in the middle of beautiful flower
                    bushes and scenic greenery. Expect several tees way higher than the fairway, high trees and fast
                    greens..</p>
                <a href="{{'/golf/sigonagolf'}}">
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
        <h2 class="park-title">Nyali Golf & Country Club </h2>
        <div class="d-flex">
            <div class="content-img destination ">
                <img class="img-thumbnail" src="images/golf/NyaliGolfClub1.jpg" alt=" Nyali Golf & Country Club">

            </div>
            <div class="content ">
                <p class="content-body"> Designed by Monty Lowry, this challenging championship course of Nyali Golf &
                    Country Club offers short rough and numerous doglegs, providing a multitude of individual challenges
                    for the seasoned golfer. The closely mown, well-watered fairways are comprised of a mixture of
                    Mozambique Polana and Pemba grasses, while the lush, finely contoured greens are laid with Polana.
                    The club mascot, the green monkey, will certainly be spotted during a round of golf.

                    .</p>
                <a href="{{'/golf/nyaligolf'}}">
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
        <h2 class="park-title">Leisure Lodge Beach & Golf Resort </h2>
        <div class="d-flex">
            <div class="content-img destination ">
                <img class="img-thumbnail" src="images/golf/leisurelodge.jpg" alt="Leisure Lodge Beach & Golf Resort ">

            </div>
            <div class="content ">
                <p class="content-body"> “The pearl at the Kenyan Coast” located south of Mombasa. The Leisure Lodge
                    Beach & Golf Resort is one of the best golf courses of Kenya and hosts the annual “Diani Beach
                    Masters”. The area was designed to preserve the tropical plants. There are plenty of water obstacles
                    and sand obstacles, which will challenge your golf skills. It is located at Diana Beach,
                    Mombasa..</p>
                <a href="{{'/golf/leisurelodge'}}">
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
        <h2 class="park-title">Limuru Golf Club </h2>
        <div class="d-flex">
            <div class="content-img destination ">
                <img class="img-thumbnail" src="images/golf/golf-limuru-country.jpg" alt=" Limuru Golf Club ">

            </div>
            <div class="content ">
                <p class="content-body"> Limuru Country Club is a private Members’ club that was established in 1926 by
                    colonial settlers. It opened it’s first nine holes in 1949 and the second nine holes in 1952. Other
                    than the golf course, the club consists of lawn bowling, tennis courts, a cricket pitch, squash
                    courts and a swimming pool. The club is located 25 kilometres from Nairobi, surrounded by
                    luxuriously verdant tea fields with a proud reputation of providing Members and their guests with a
                    friendly, welcoming and inclusive experience..</p>
                <a href="{{'/golf/limurugolf'}}">
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














@endsection
