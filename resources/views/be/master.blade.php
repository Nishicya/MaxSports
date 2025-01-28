<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max Sports</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="{{asset('/css/styles.css')}}" rel="stylesheet">
</head>
<body>
    <!-- Header Section -->
    @yield('navbar')
    <!-- Header Section End -->

    @if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
    @endif

    @if(Session::has('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail') }}
        </div>
    @endif

    <!-- Hero Section -->
    <div class="hero" aria-label="Hero section">
            <div class="hero-overlay">
                <div class="hero-content">
                    <p>MAU FITNESS TAPI GAMAU KELUAR RUMAH?</p>
                    <h1>SEWA DI MAX SPORTS AJA</h1>
                    <button>RENT NOW</button>
                </div>
            </div>
        </div>
        <!-- Hero Section End -->

        <!-- Product Section -->
    <div class="itemsell">
            <div class="container mt-5">
            <h2 class="text-center mb-4">Ingin sewa apa hari ini?</h2>
            <div class="row row-cols-1 row-cols-md-5 g-4">
                <div class="col">
                    <div class="card">
                        <img src="{{asset('/img/treadmill.png')}}" class="card-img-top" alt="Treadmill">
                        <div class="card-body bg-secondary">
                            <h5 class="card-title text-light">Treadmill</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{asset('/img/fitnessbike.png')}}" class="card-img-top" alt="Fitness Bike">
                        <div class="card-body bg-secondary">
                            <h5 class="card-title text-light">Exercise Bike</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{asset('/img/crosstrainer.png')}}" class="card-img-top" alt="Cross Trainer">
                        <div class="card-body bg-secondary">
                            <h5 class="card-title text-light">Cross Trainer</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{asset('/img/homegym.png')}}" class="card-img-top" alt="Home Gym">
                        <div class="card-body bg-secondary">
                            <h5 class="card-title text-light">Multi Gym</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{asset('/img/accessories.png')}}" class="card-img-top" alt="Accessories">
                        <div class="card-body bg-secondary">
                            <h5 class="card-title text-light">Accessories</h5>
                        </div>
                    </div>
                </div>
            </div>
            <button class="see-more-btn">SEE MORE</button>
        </div>
        <!-- Product Section End -->
        
        <!-- Contact Section -->
        </div>
        <div class="contact" aria-label="Contact form">
            <h2>Feel free to contact us!</h2>
            <form>
                <input type="text" name="name" placeholder="Your Name">
                <input type="email" name="email" placeholder="youremail@gmail.com">
                <textarea name="message" placeholder="Text Here..."></textarea>
                <button type="submit">SUBMIT</button>
            </form>
        </div>
        <!-- Contact Section End -->

        <!-- Footer Section -->
        @yield('footer')
        <!-- Footer Section End -->