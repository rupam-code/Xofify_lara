

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xofify - Your Purchase Destination</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="{{asset('items/style.css')}}">
</head>
<body>

<!-- Header -->
<!-- Header -->
<header>
   @include('navbar')
</header>

<!-- Hero Section -->
<section id="hero" class="hero">
    {{-- <h2>{{Auth::user()->name;}}</h2> --}}
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Carousel Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>

        <!-- Carousel Inner -->
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img src="{{asset('Banners/Banner 1.webp')}}" class="d-block w-100" alt="Slide 1">
                <div class="carousel-caption d-flex flex-column align-items-center">
                    <h1 class="fw-bold">Fast Delivery</h1>
                    <p>Enjoy a wide variety of Gadgets!</p>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item">
                <img src="{{asset('Banners/Banner 2.webp')}}" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-flex flex-column align-items-center">
                    <h1 class="fw-bold">Cash On Delivery </h1>
                    <p>Quality you can taste in every bite!</p>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="carousel-item">
                <img src="{{asset('Banners/Banner 3.webp')}}" class="d-block w-100" alt="Slide 3">
                <div class="carousel-caption d-flex flex-column align-items-center">
                    <h1 class="fw-bold">Fast Delivery</h1>
                    <p>Quick and reliable delivery service.</p>
                </div>
            </div>
            <!-- Slide 4 -->
            <div class="carousel-item">
                <img src="{{asset('Banners/Banner 4.webp')}}" class="d-block w-100" alt="Slide 4">
                <div class="carousel-caption d-flex flex-column align-items-center">
                    <h1 class="fw-bold">Fast Delivery</h1>
                    <p>Quick and reliable delivery service.</p>
                </div>
            </div>
        </div>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h3>Empowering Businesses with Innovative Strategies</h3>
                <p class="fst-italic">At Portronics, we deliver tailored solutions to help businesses thrive.</p>
                <ul>
                    <li><i class="bi bi-check-circle"></i> Customized strategies for success.</li>
                    <li><i class="bi bi-check-circle"></i> Expert team with years of experience.</li>
                    <li><i class="bi bi-check-circle"></i> Innovative approaches to maximize potential.</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <img src="{{asset('images/products/track.avif')}}" class="img-fluid" alt="About Us">
                <img src="{{asset('images/products/warrenty.avif')}}" class="img-fluid" alt="About Us">
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-5">
    <div class="container text-center">
        <h2 class="section-title text-white">Our Services</h2>
        <p class="text-white">Discover the range of services we offer to empower your business.</p>
        <div class="row">
            <div class="col-lg-4">
                <div class="service-item">
                    <i class="bi bi-activity text-primary"></i>
                    <h3>Creative Solutions</h3>
                    <p>Innovative strategies tailored to your needs.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-item">
                    <i class="bi bi-broadcast text-primary"></i>
                    <h3>Marketing</h3>
                    <p>Reach your audience effectively.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-item">
                    <i class="bi bi-easel text-primary"></i>
                    <h3>Design & Development</h3>
                    <p>Crafting visually appealing solutions.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="section-title">Our Features</h2>
        <p>Explore the unique features that set us apart.</p>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="{{asset('images/products/led.webp')}}" width="300px" class="img-fluid" alt="Features">
            </div>
            <div class="col-lg-6">
                <ul>
                    <li><i class="bi bi-check-circle"></i> Innovative Technology</li>
                    <li><i class="bi bi-check-circle"></i> User-Friendly Design</li>
                    <li><i class="bi bi-check-circle"></i> Affordable Pricing</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</main>

<!-- Footer -->
@include('footer')

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
