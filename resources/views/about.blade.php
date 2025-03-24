<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xofify - Gadget Store</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('items/style2.css')}}">
</head>

<body>
    @include('navbar')


    <section class="py-5">
        <div class="container text-center">
            <h2 class="display-5 mb-4">Why Choose Us</h2>
            <p class="lead">Our commitment to excellence is evident in every project we undertake, ensuring that you receive nothing but the highest quality products and services.</p>
            <hr class="w-50 mx-auto">
        </div>

        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6">
                    <img class="img-fluid rounded border" loading="lazy" src="{{asset('Banners/about us.jpg')}}" alt="About Us">
                </div>
                <div class="col-lg-6">
                    <div class="accordion accordion-flush" id="accordionAbout6">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Low Price Guarantee
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionAbout6">
                                <div class="accordion-body">
                                    Our Low Price Guarantee isn't just a promise; it's a commitment to providing you with unbeatable value and peace of mind when you shop with us.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Life-Time Warranty
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionAbout6">
                                <div class="accordion-body">
                                    Discover unparalleled peace of mind with our business's lifetime warranty commitment.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Genuine Spare Parts
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionAbout6">
                                <div class="accordion-body">
                                    Our commitment to authenticity ensures that you receive parts manufactured to the highest standards.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('footer')


    <script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
