@extends("layouts.master")

@section("content")

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


<section id="gallery">
<div class="container">
    <div class="row">

        <div class="col-6 col-md-4 mb-4">
            <div class="card">
                <img src="/img/card1.jpg" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Beach</h5>
                    <p class="card-text">Pellentesque nunc in pharetra lorem magna mauris sapien. Tempus, non ac at tristique pulvinar quam phasellus. Donec eget vel tempus nisi, non varius amet, sit mattis. Leo, tempus in et vel lorem odio. </p>
                    <a href="{{ url('beach') }}" class="btn btn-outline-success btn-sm">Read More</a>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 mb-4">
            <div class="card">
                <img src="/img/card2.jpg" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Forest</h5>
                    <p class="card-text">Dolor et, pellentesque adipiscing malesuada praesent quis. Sem quis interdum et non. Lacus consectetur in euismod senectus tempor at dolor egestas. Sit iaculis cras iaculis laciniavel lorem odio.</p>
                    <a href="{{ url('forest') }}" class="btn btn-outline-success btn-sm">Read More</a>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 mb-4">
            <div class="card">
                <img src="/img/card3.jpg" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Hotspring</h5>
                    <p class="card-text">Ullamcorper sed sit nisl, integer amet. Leo, placerat venenatis eu, egestas enim. Gravida non nibh scelerisque sit. Sed metus nec elit, duis. Semper nunc viverra elit blandit. Volutpat nec et tellus viverra.</p>
                    <a href="{{ url('hotspring') }}" class="btn btn-outline-success btn-sm">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<br><br><br>

</div>
</div>

@endsection
