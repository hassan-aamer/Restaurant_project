

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>





<body>
    <div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">Resurant</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-link"  href="/">Home</a>
                <a class="nav-link" href="menu">Menu</a>
                <a class="nav-link" href="order">To order </a>
                </div>
            </div>
            </div>
        </nav>
    </div>

@yield('body')


    <section >
        <center>
            <div class="soshel">
                <br>
                <br>
                <h1>Follow us social for exclusive!</h1>
                <h4>Get exclusive deals , offers rewards!</h4>
                <div class="imag">
                    <img src="images/facebook.png" alt="" width="30px" height="30px">
                    <img src="images/twitter.png" alt=""  width="30px" height="30px">
                    <img src="images/instagram.png" alt=""  width="30px" height="30px">
                </div>
            </div>
        </center>
    </section>
</body>
</html>
