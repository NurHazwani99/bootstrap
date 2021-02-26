@extends("layouts.master")

@section("content")

<nav class="container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item active">Contact Us</li>
    </ol>
</nav>
<div class="container card corner">

        <br>

        <b><h1 class="center">Any Enquiries? Contact Us!</h1></b>

        <form>

            <div class="form-group">
                <b><label for="name">Full Name</label><b>
                <input type="text" class="form-control" id="text" placeholder="Eg: Abu Bakar">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" width="48" id="email" placeholder="Eg: name@example.com">
            </div>
            <div>
                <label for="phone">Phone Number</label>
                <input type="number" class="form-control" id="phone" placeholder="Eg: 123466789">
            </div>
            <br>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Enquiries</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write any of your enquiries ..."></textarea>
            </div>

            <button type="submit" class="btn btn-info text-white center">Submit</button>
        </form>
        <br><br>

        </div>

@endsection

