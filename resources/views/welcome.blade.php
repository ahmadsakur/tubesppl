<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/landing.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- fonts -->
    <link rel="stylesheet" href="https://egkoppel.github.io/product-sans/google-fonts.css">
    <!-- javascript -->
    <script src="{{asset('js/app.js')}}"></script>



    <title>KoKeRu</title>
</head>

<body>
    <!-- navbar -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="/"><img src="{{asset('img/kokeru.svg')}}" alt="logo-navbar"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            {{-- <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link" href="post.html">Our Service</a>
                    <a class="nav-link" href="#">Coverage</a>
                    <a class="nav-link" href="#">Testimonial</a>
                    <a class="nav-link" href="#">Contact Us</a>
                </div>
            </div> --}}
        </nav>
    </div>
    <!-- end of navbar -->
    <!-- hero -->
    <div class="container">
        <div class="row landing">
            <div class="col-lg-6 landing-teks">
                <h3 id="product-sans">Tingkatkan <span>produktivitas</span> kerja mu dengan suasana ruang yang
                    <span>bersih</span>.</h3>
                <a href="/login" class="btn border border-warning text-dark mt-2">Log In &rarr;</a>
            </div>
            <div class="col-lg-6">
                <img src="{{asset('img/hero.png')}}" alt="hero" class="img-fluid float-left">
            </div>
        </div>
    </div>
    <!-- end of landing -->
</body>

</html>