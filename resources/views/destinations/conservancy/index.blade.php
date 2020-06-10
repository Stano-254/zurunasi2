@extends('layouts.frontend.app')

@section('title','conservancy')

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
        <h1 class="display-4 ">Conservancy </h1>
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
        <h2 class="park-title">Lewa wildlife Conservancy</h2>
        <div class="d-flex">
            <div class="content-img ">
                <img class="img-thumbnail" src="images/lewawildlife.jpg" alt="Lake Nakuru image ">

            </div>
            <div class="content ">
                <p class="content-body">Recently crowned UNESCO World Heritage Site, Lewa Wildlife Conservancy prides in
                    its key goal of ‘conservation, community and inspiration’. Lewa offers the full package for wildlife
                    and conservation lovers ranging from children, researchers, leisure tourists, adventure lovers and
                    even cultural enthusiasts.Similar to Ol Pejeta, Lewa hosts an abundance of endangered flora and
                    fauna. Aside from game drives, Lewa also offers a walk in the wild accompanied by local armed
                    guides. This makes the wildlife experience a little more intimate and enjoyable </p>

                <div id="viewmorelewa" class="collapse">
                    <p class="content-body"> Many times you will enjoy this experience as you watch the Maasai morans
                        also graze their cattle as the elephants, antelopes and zebras graze alongside a resting lion!
                        After a game drive, a relaxing visit to a nearby Maasai or Samburu cultural village will give
                        you the perfect opportunity to interact with the locals Lewa Conservancy also takes social
                        responsibility to neighboring communities very serious. If you like, you could get a chance to
                        visit the different development projects Lewa runs. You are sure to get an appreciation of where
                        your money goes</p>

                </div>
                <a href="#viewmorelewa" data-toggle="collapse">
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
        <h2 class="park-title">Ol Pejeta Chimpanzee Sanctuary</h2>
        <div class="d-flex">
            <div class="content-img destination ">
                <img class="img-thumbnail" src="images/olpejeta.jpg" alt="Lake Nakuru image ">

            </div>
            <div class="content ">
                <p class="content-body"> Established in 1993, when a rescue center in Burundi was compelled to close
                    down, due to a civil war, Ol Pejeta opened its doors to home and nurse brutally tortured
                    chimpanzees. Ol Pejeta Ranch has created a sanctuary for chimpanzees, working in close conjunction
                    with the Jane Goodall Institute. While Chimpanzees are not native to Kenya, small endangered
                    populations are found in the rainforests of neighboring Tanzania and Uganda, and throughout Central
                    and West Africa. The refuge at Ol Pejeta has been designed as a safe haven for chimps from Central
                    Africa, rescued from the bush meat and pet trade. All of the Chimps at Ol Pejeta were rescued from
                    traumatic situations (orphaned and abused, with horrific injuries, sustained from human torture).
                </p>
                <div id="viewmorewatamu" class="collapse">
                    <p class="content-body"> The Ol Pejeta Chimpanzee Sanctuary nurses these remarkable great apes to
                        health. They now roam free on a large island at the centre of the ranch where they have formed a
                        large social group, and socialize and breed freely.Ol Pejeta is as well a sanctuary for
                        critically endangered black rhinos, and is home to two of the world’s last remaining northern
                        white rhinos, brought in from the Czech Republic. Years of widespread poaching and civil war
                        have devastated the northern white rhino population, and are now considered to be extinct..</p>

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
        <h2 class="park-title">Mount Kenya Wildlife Conservancy</h2>
        <div class="d-flex">
            <div class="content-img destination ">
                <img class="img-thumbnail" src="images/mtkenyawildlife.jpg" alt="Mount Kenya Wildlife Conservancy ">

            </div>
            <div class="content ">
                <p class="content-body"> Just at the foot at Mount Kenya is another beautiful haven of wildlife, the
                    Mount Kenya Wildlife Conservancy. Set up with the key goal of rescuing, nurturing and rehabilitating
                    all wild creatures that need help, this conservancy’s location gives it a unique sense of appeal for
                    mountaineering lovers and highland life. No words can well explain the experience of waking up to
                    panoramic views of Mount Kenya. The nearby Mount Kenya Forest creates a cool resemblance of the
                    Swiss Alps that form the Alpine region of Switzerland.Mount Kenya Wildlife Conservancy also plays a
                    great role of conserving one of the most beautiful antelopes in Kenya, the mountain bongo, a greatly
                    endangered species..</p>
                <div id="viewmoremtkenya" class="collapse">
                    <p class="content-body"> The professional staff at the conservancy is also involved in the rescue
                        and rehabilitation of wild animals that have been injured. Lovers of wildlife and conservation
                        who visit the conservancy never resist an opportunity to contribute in one way or one another to
                        conservation effort. You could even get a chance to adopt a young animal, see it grow and
                        develop into the wild! Epic experiences in the wild can be created on helicopter or horse-back
                        safaris. Adventure and sport lovers also have the opportunity to go mountaineering and hiking on
                        neighboring Mount Kenya, golfing at the Mount Kenya Safari Club, play tennis, lawn bowling,
                        sport fishing, fly fishing and gliding in the clear mountain streams. May seem like a dream up
                        in the clouds, but the serenity of Mount Kenya Wildlife Conservancy will allow you achieve your
                        wildlife dream and so much more on the side.</p>

                </div>
                <a href="#viewmoremtkenya" data-toggle="collapse">
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
        <h2 class="park-title">Ol Pejeta Conservancy</h2>
        <div class="d-flex">
            <div class="content-img destination ">
                <img class="img-thumbnail" src="images/olpejetaimg.jpg" alt="Lake Nakuru image ">

            </div>
            <div class="content ">
                <p class="content-body"> Situated between the foothills of Mount Kenya and Aberdares is Kenya’s best
                    kept conservation havens, the Ol Pejeta Conservancy. The Ol Pejeta Conservancy is one of the only
                    wildlife protection areas that’s home to very high numbers of endangered species. Aside from the big
                    5, more than a thousand different mammals and bird species roam the wild. A safari into the O.P.C
                    will let you enjoy the company of rescued chimpanzees as you learn about the stories of torture they
                    went through in captivity in West and Central Africa. This is actually the only place in Kenya to
                    see chimpanzees and you can have a chance to adopt one of them!
                </p>
                <div id="viewmorepejeta" class="collapse">
                    <p class="content-body"> On a game drive, you can visit the largest black rhino sanctuary and learn
                        about the conservation efforts that are conducted to protect these endangered species. After the
                        single largest translocation process, with the Kenya Wildlife Services and neighboring Lewa
                        Conservancy, the O.P.C is home to 88 black rhinos. You could also make a donation to help more
                        conservation activities for these endangered species. Aside from black rhinos, O.P.C is also
                        home to a founder population of 11 southern white rhinos and 4 northern white rhinos in a
                        separate sanctuary.Visit this conservancy and get to appreciate as you explore Kenya’s
                        wilderness with the help of well trained professional guides.Staff at the O.P.C always target to
                        meet your personal needs. All tourists are treated as individuals. They give you a chance to set
                        your schedules, explore at your own pace and discover the wild in your own way..</p>

                </div>
                <a href="#viewmorepejeta" data-toggle="collapse">
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
