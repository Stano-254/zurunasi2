@extends('layouts.frontend.app')

@section('title','monuments and museums')

@section('content')
    <div class="top_content">


        <div id="homepageSlide" class="carousel slide carousel-fade" data-interval="3500" data-ride="carousel">
            <div class="carousel-inner " style="height:400px;">
                <ol class="carousel-indicators">
                    <li data-target="#homepageSlide" data-slide-to="0" class="active dot"></li>
                    <li data-target="#homepageSlide" data-slide-to="1" class="dot"></li>
                    <li data-target="#homepageSlide" data-slide-to="2" class="dot"></li>
                    <li data-target="#homepageSlide" data-slide-to="3" class="dot"></li>
                    <li data-target="#homepageSlide" data-slide-to="4" class="dot"></li>
                    <li data-target="#homepageSlide" data-slide-to="8" class="dot"></li>
                </ol>
                <div class="carousel-item active">
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
                    <img src="images/culture.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/conservancyimg8.jpg" class="d-block w-100" alt="...">
                </div>
            </div>

        </div>
    </div>
    <div class="banner pt-2 pl-4">
        <h1 class="display-4 ">Monuments and Museums </h1>
    </div>
    <div class="p-4" style="background: #f7f9fa">
        <div class="container jumbotron-fluid">
            <p class="disp_title">Museum visits are not about dusty artefacts. In Kenya,
                museums provide an educational insight of our culture, history and contemporary
                themes.</p>
        </div>
    </div>
    <div class="park-wrapper">
        <h2 class="park-title">Nairobi National Museum</h2>
        <div class="d-flex">
            <div class="content-img ">
                <img class="img-thumbnail" src="images/fortjesus.jpg" alt="Lake Nakuru image ">

            </div>
            <div class="content ">
                <p class="content-body"> Nairobi National Museum was initiated in 1910. The museum closed for
                    refurbishment in 2006 and re-opened in 2008 as a World Class Museum complete with shopping and
                    dining facilities. The museum presents Kenya’s History, Nature, Culture and Contemporary Art in its
                    entire splendor. Also within the grounds are the famous Snake Park, Botanical Gardens and Nature
                    Trail.Visit the National Museum and discover Kenya’s rich heritage. Our Heritage, Our Pride..</p>
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
        <h2 class="park-title">Karen Blixen Museum</h2>
        <div class="d-flex">
            <div class="content-img ">
                <img class="img-thumbnail" src="images/karenblixeni.jpg" alt="Lake Nakuru image ">

            </div>
            <div class="content ">
                <p class="content-body"> The museum belongs to a different time period in the history of Kenya; Karen
                    Blixen Museum is a colonial house, where Baroness Karen Blixen lived with her husband. The Museum is
                    famed for the “Out of Africa” film, an account of Karen Blixen’s life in Kenya, as per the
                    autobiographical book.The museum was built in 1912, and bought by the couple in 1917, and it became
                    the farm house for their 4,500 care farm, of which 600 acres was used for coffee farming. After the
                    couple’s marriage failed, they divorced and Karen was left in charge of the farm house, until her
                    return to Denmark in 1931.</p>
                <div id="viewmoreBlixen" class="collapse">
                    <p class="content-body">In 1964, the house was purchased by the Danish government and granted to the
                        Kenyan government as an independence gift. The then farmhouse was established as a museum in
                        1986 by the National Museums of Kenya.The museum continues to captivate visitors inspired by
                        Karen’s life story..</p>

                </div>
                <a href="#viewmoreBlixen" data-toggle="collapse">
                    <button class="btn btn-outline-secondary mapbtn">continue reading</button>
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
        <h2 class="park-title">Fort Jesus National Museum</h2>
        <div class="d-flex">
            <div class="content-img ">
                <img class="img-thumbnail" src="images/fortjesus.jpg" alt="Lake Nakuru image ">

            </div>
            <div class="content ">
                <p class="content-body"> Located in Mombasa, the Coastal region of Kenya, the Fort was built by the
                    Portuguese between 1593 and 1596, to guard the old port of Mombasa, and served as a place of safety
                    and security for the Portuguese living on the Coast.The Coastal region had interested parties, who
                    used to live in Mombasa, such as the Omani Arabs, who attacked the fort from 1696 to 1698. This was
                    a real struggle for Fort Jesus.ort Jesus also served as barracks for the Portuguese soldiers between
                    1837 and 1895. When it fell under the British rule in 1895, the fort was converted to a prison.</p>
                <div id="viewmoreFort" class="collapse">
                    <p class="content-body">On display at Fort Jesus is a collection of items preserved over the years
                        to dating back to the 14th and 19th century, that were used by the Portuguese and Omani Arabs.
                        Some of these items include an ancient Portuguese chair, Persian chest, drums, plates and
                        gourds.Outside the fort, are unique and neatly displayed canons (superior weapons in the olden
                        times) that were used to fight against enemies. Spend the day exploring the gun turrets,
                        battlements and houses within the walls.This is a perfect spot to interact with history..</p>

                </div>
                <a href="#viewmoreFort" data-toggle="collapse">
                    <button class="btn btn-outline-secondary mapbtn">continue reading</button>
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
        <h2 class="park-title">Gede Ruin's Museum</h2>
        <div class="d-flex">
            <div class="content-img ">
                <img class="img-thumbnail" src="images/gederuins.jpg" alt="Lake Nakuru image ">

            </div>
            <div class="content ">
                <p class="content-body"> Gede ruins are remains of a Swahili town. It traces its origin to the Twelfth
                    Century and was rebuilt with new town walls in the Fifteenth and Sixteenth Centuries. The museum has
                    numerous ruins, comprising mosques, a magnificent palace and houses all nestled within 45 acres of
                    forest.Gede’s eventual abandonment to nature is believed to be as a result of a number of
                    factors;The Wazimba (local tribe) raid along the the East African Coast in 1589.Removal of the
                    sheikh of Malindi in 1593.The falling water table outside the ‘Great Mosque’.The projected danger
                    from the Galla, a hostile nomadic group from Somalia.Gede is the fisrt intensively studied site on
                    the coast, and was declared a protected monument in 1929.Experience the mystical cultural life in
                    this old town amidst our natural heritage.</p>
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
        <h2 class="park-title">Lamu Museum</h2>
        <div class="d-flex">
            <div class="content-img ">
                <img class="img-thumbnail" src="images/lamumuseum.jpg" alt="Lake Nakuru image ">

            </div>
            <div class="content ">
                <p class="content-body"> Lamu Museums are located in the North Coast, a World Heritage Site and one of
                    the most beautiful & serene locations on the African continent. Museum attractions include the Lamu
                    Fort, Lamu Museum, German Post Office, Swahili House and the Takwa Ruins.The National Museums of
                    Kenya helps preserve and promote this rich cultural heritage in collaboration with partners in the
                    annual Lamu Cultural Festival.The pair of rusted old canons that point out to see are a reminder of
                    the days when it was necessary to guard the Island from envious neighbors and colonizers</p>
                <a href="#viewmore" data-toggle="collapse">
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
        <div id="viewmore" class="collapse mt-3">
            <div class="well">
                <h4>Lamu House</h4>
                <p class="content-body">Built on the seafront, Lamu House overlooks Manda Island and mangrove forests,
                    as you marvel at ancient dhows sailing past.With regards to architecture, Lamu House gives visitors
                    a glimpse into the Swahili traditional home setup; it is an example of 18th century Swahili
                    house.Lamu House depicts the lifestyle enjoyed by wealthy Swahili merchants in the olden days. Lamu
                    House was abandoned by a wealthy merchant, until it was eventually possessed and renovated by the
                    National Museums of Kenya.</p>

                <h4>Takwa ruins</h4>
                <p class="content-body">These are the remains of a town which thrived in the 15th and 16th century, but
                    was abandoned in the 18th century.The unique mosque with a large pillar is the most notable, and
                    symbolizes the burial of a Sheikh below the wall. Takwa was eventually abandoned due to the endless
                    fighting between the people of Takwa and Pate.A casual visit to Takwa ruins can be complemented by a
                    picnic or overnight camping </p>

                <h4>German Post Office </h4>
                <p class="content-body"> The German Post Office was established in 1888, and operated until 1891 after
                    the withdrawal of the German settlement in Witu (a German protectorate).The post office facilitated
                    communication within the German protectorates in the Coastal region</p>
            </div>
        </div>
    </div>


    <div class="park-wrapper">
        <h2 class="park-title">Koobi Fora Museum</h2>
        <div class="d-flex">
            <div class="content-img ">
                <img class="img-thumbnail" src="images/koobifora.jpg" alt="Lake Nakuru image ">

            </div>
            <div class="content ">
                <p class="content-body"> Situated along the Eastern shores of Lake Turkana is Koobi Fora Site and
                    Museum, a World Heritage Site also popularly known as the Cradle of Mankind. On site are mainly
                    extinct fossils like the crocodile, giraffe and tortoise at least four times larger than today’s.You
                    can also relax at the Koobi Fora camp overlooking the lake away from city life, enjoy spectacular
                    sunsets and teeming wildlife. Koobi Fora is a very important site for Hominid Fossils, famous
                    internationally since Richard Leakey’s discovery of ‘1470’ a 2 million year old skull of Homo
                    Habilis.As interest in visiting this area increases, there is promise of improved visitor facilities
                    and safari options in this area..</p>
                <a href="#demo" data-toggle="collapse">
                    <button class="btn btn-outline-secondary mapbtn">view map</button>
                </a>
                <div id="demo" class="collapse mt-3">
                    <p> map for the area here....</p>
                </div>
            </div>

        </div>

    </div

@endsection
