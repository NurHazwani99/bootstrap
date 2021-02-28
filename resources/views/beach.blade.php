@extends("layouts.master")
<?php
//dd(Request::segments());
?>

@section("content")


        <style>
            body {
                font-family: 'Nunito';
            }

            .carousel-inner img {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 80%;
            }

            ul.nav-pills {
                position: fixed;
            }

            div.col-8 div {
                height: 300px;
            }

            .breadcrumb {
                margin-bottom: 0;
                background-color: #f8fafc;
                height: 100px;
                text-align:center;
                line-height:50px;
            }

            .breadcrumb-item + .breadcrumb-item::before {
                content: ">";
            }

            .nav-link.active {
                background-color: #f8fafc;
                color: black !important;
            }

            .center {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 50%;
            }

            .contents {
                font-size: 1.10em;
                text-align:justify;
            }

            h1 {
                color: #0AA2C0;
            }
        </style>

    @component("components.breadcrumbs")
        @slot("second","Beach")
        @slot("second_url","/beach")
        @slot("third","Forest")
        @slot("third_url","/forest")
    @endcomponent

        <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="object-fit-cover" src="/img/1.jpg" width="1100" >
                <div class="carousel-caption">
                    <h3>Pellentesque nunc</h3>
                    <p>We had such a great time in LA!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="object-fit-cover" src="/img/2.jpg" width="1100" >
                <div class="carousel-caption">
                    <h3>Pellentesque nunc</h3>
                    <p>We had such a great time in LA!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="object-fit-cover" src="/img/3.jpg"  width="1100" >
                <div class="carousel-caption">
                    <h3>Pellentesque nunc</h3>
                    <p>We had such a great time in LA!</p>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
        </a>
        </div>

        <br><br><br>


        <div class="container">
        <div class="row">
            <nav class="col-sm-3 col-4" id="myScrollspy">
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                <a class="nav-link" href="#why">Why Beach?</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#things">Things to do</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#popular">Popular Spots in Malaysia</a>
                </li><li class="nav-item">
                <a class="nav-link" href="#gallery">Gallery</a>
                </li>
            </ul>
            </nav>
            <div class="col-sm-9 ">
            <div id="why" style="height:50px;">
            </div>
            <div class="">
                <h1>Why Beach?</h1>
                <br>
                <img src="/img/2.jpg" class="img-thumbnail center" alt="Chicago" width="700" height="500">
                <br><br>
                <p class="contents">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Commodo odio adipiscing mauris, aliquam dictumst ultrices ultricies. Risus laoreet vitae pretium amet malesuada id pretium. Nam viverra nunc at facilisis. Urna a odio facilisis ut aliquet vitae mi elementum dictum. Enim neque non odio nisl dolor urna scelerisque. Ac sed arcu neque massa tempor. Consectetur et, dolor id cursus dapibus convallis posuere vulputate nibh. In suspendisse ac, pellentesque pellentesque sed urna. Consequat porttitor molestie id nisl egestas scelerisque libero imperdiet. Arcu varius tortor, eu dolor nisl faucibus donec sapien et. Lacinia sed curabitur odio vitae sed sed quam tincidunt. Suspendisse posuere pellentesque augue nisl nam vel lectus. Odio eros, scelerisque nullam et. Tristique feugiat risus ullamcorper morbi sed. Odio id ultrices nibh feugiat aliquam. Quis sed elementum, porttitor etiam dui. Ornare vestibulum suscipit et metus dignissim augue vestibulum tristique. Nunc, purus dui dignissim mauris convallis sit pretium. Enim, sed gravida turpis in pellentesque. Vestibulum malesuada pellentesque libero, eget suscipit massa neque laoreet. Libero amet sit semper tempus. Ultrices rutrum amet gravida faucibus dolor, in ipsum leo. </p>
                <p class="contents">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Commodo odio adipiscing mauris, aliquam dictumst ultrices ultricies. Risus laoreet vitae pretium amet malesuada id pretium. Nam viverra nunc at facilisis. Urna a odio facilisis ut aliquet vitae mi elementum dictum. Enim neque non odio nisl dolor urna scelerisque. Ac sed arcu neque massa tempor. Consectetur et, dolor id cursus dapibus convallis posuere vulputate nibh. In suspendisse ac, pellentesque pellentesque sed urna. Consequat porttitor molestie id nisl egestas scelerisque libero imperdiet. Arcu varius tortor, eu dolor nisl faucibus donec sapien et. Lacinia sed curabitur odio vitae sed sed quam tincidunt. Suspendisse posuere pellentesque augue nisl nam vel lectus. Odio eros, scelerisque nullam et. Tristique feugiat risus ullamcorper morbi sed. Odio id ultrices nibh feugiat aliquam. Quis sed elementum, porttitor etiam dui. Ornare vestibulum suscipit et metus dignissim augue vestibulum tristique. Nunc, purus dui dignissim mauris convallis sit pretium. Enim, sed gravida turpis in pellentesque. Vestibulum malesuada pellentesque libero, eget suscipit massa neque laoreet. Libero amet sit semper tempus. Ultrices rutrum amet gravida faucibus dolor, in ipsum leo. </p>
            </div>
            <br><br>
            <div id="things" style="height:50px;">
            </div>
            <div class="">
                <h1>Things to do</h1>
                <br>
                <b>
                <ul class="a contents">
                    <li>Coffee - A brewed drink prepared from roasted coffee beans, which are the seeds of berries from the Coffea plant</li>
                    <li>Tea - An aromatic beverage commonly prepared by pouring hot or boiling water over cured leaves of the Camellia sinensis, an evergreen shrub (bush) native to Asia</li>
                    <li>Coca Cola - A carbonated soft drink produced by The Coca-Cola Company. The drink's name refers to two of its original ingredients, which were kola nuts (a source of caffeine) and coca leaves</li>
                    <li>Coffee - A brewed drink prepared from roasted coffee beans, which are the seeds of berries from the Coffea plant</li>
                    <li>Tea - An aromatic beverage commonly prepared by pouring hot or boiling water over cured leaves of the Camellia sinensis, an evergreen shrub (bush) native to Asia</li>
                    <li>Coca Cola - A carbonated soft drink produced by The Coca-Cola Company. The drink's name refers to two of its original ingredients, which were kola nuts (a source of caffeine) and coca leaves</li>
                </ul>
                </b>
            </div>
            <br><br>
            <div id="popular" style="height:50px;">
            </div>
            <div>
                <h1>Popular Spots in Malaysia</h1>
                <br>
                <b>
                <ul class="a contents">
                    <li>Coffee - A brewed drink prepared from roasted coffee beans, which are the seeds of berries from the Coffea plant</li>
                    <li>Tea - An aromatic beverage commonly prepared by pouring hot or boiling water over cured leaves of the Camellia sinensis, an evergreen shrub (bush) native to Asia</li>
                    <li>Coca Cola - A carbonated soft drink produced by The Coca-Cola Company. The drink's name refers to two of its original ingredients, which were kola nuts (a source of caffeine) and coca leaves</li>
                    <li>Coffee - A brewed drink prepared from roasted coffee beans, which are the seeds of berries from the Coffea plant</li>
                    <li>Tea - An aromatic beverage commonly prepared by pouring hot or boiling water over cured leaves of the Camellia sinensis, an evergreen shrub (bush) native to Asia</li>
                    <li>Coca Cola - A carbonated soft drink produced by The Coca-Cola Company. The drink's name refers to two of its original ingredients, which were kola nuts (a source of caffeine) and coca leaves</li>
                </ul>
                </b>
            </div>
            <br><br>
            <div id="gallery" style="height:50px;">
            </div>
            <div class="">
                <h1>Gallery</h1>
                <br>
                <section id="gallery">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 mb-4">
                            <div class="card">
                                <img src="/img/card1.jpg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Beach</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="card">
                                <img src="/img/card2.jpg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title center">Forest</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="card">
                                <img src="/img/card3.jpg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Hotspring</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-lg-4 mb-4 center">
                            <div class="card">
                                <img src="/img/card3.jpg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Hotspring</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4 center">
                            <div class="card">
                                <img src="/img/card3.jpg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Hotspring</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>
            </div>
            </div>
        </div>
        </div>
    @endsection
