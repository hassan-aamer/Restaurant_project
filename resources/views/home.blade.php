@extends('app')

@section('title')
Reserve
@endsection


@section('body')


    <section class="imag">
        <div class="image-with-text">
            <img src="images/home.jpg" class="img-fluid" alt="...">
            <div class="text-overlay">
                <h1 >Resurant</h1>
                <h4 >The best Ethnic Cusine is served here</h5>
                <h2>Join us and enjoy dinner in a friendly environment full of friendly people and beautiful Ethnic dishes.</h2>
                <a href="menu" class="button">OUR MENU</a>
            </div>
        </div>
    </section>

    <center class="today">
        <h2>Today,s best dishes</h2>
        <h4>Our chef is preparind fresh dishes every day, check what is in the menu tody</h4>
    </center>

    <section>

        <div class="card-container">
            <div class="card" style="width: 30rem;">
            <img src="images/mm.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <center>
                <p class="card-text">friendly pasta with Rice Noodles</p>
                <h4>$23.33</h4>
                </center>
            </div>
            </div>
            <div class="card" style="width: 30rem;">
            <img src="images/ss.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <center>
                <p class="card-text">Chicken sandwich</p>
                <h4>$15.22</h4>
                </center>
            </div>
            </div>
        </div>
    </section>

    @endsection
