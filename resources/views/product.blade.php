<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xofify - Product</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="{{asset('items/style2.css')}}">


</head>

<body>
    <!-- Navbar -->
    @include('navbar')


    <section>
        <div class="container py-5">
            <div class="row">
               <!-- Product Card -->
               @foreach ($std as $s)


<div class="col-md-6 col-lg-4 mb-4">
    <form action="{{url('/add_to_cart')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <input type="hidden" name="uid" value="{{Auth::user()->id}}">
            <h2 class="category-header text-white text-center">{{$s->category_id}}</h2>
            <input type="hidden" name="category_id" value="{{$s->category_id}}">
            <img src="{{url('/product_img')}}/{{$s->product_image}}" class="card-img-top" alt="Product Image">
            <input type="hidden" name="pid" value="{{$s->pid}}">
            <input type="hidden" name="qty" value="1" min="1" class="form-control w-50 mx-auto mt-2">
            <input type="hidden" name="image" value="{{$s->product_image}}">

            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h1 class="small"><a href="#" class="text-light">{{$s->product_name}}</a></h1>
                    <input type="hidden" name="product_name" value="{{$s->product_name}}">
                    <p class="small text-danger"><s>₹100000</s></p>
                </div>
                <div class="d-flex justify-content-between mb-3">
                    <p class="mb-0 text-light">{{$s->product_description}}</p>
                    <h5 class="text-light mb-0">₹{{$s->product_price}}</h5>
                    <input type="hidden" name="product_price" value="{{$s->product_price}}">
                </div>
                <div class="d-flex justify-content-between">
                    <div class="text-warning">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="text-warning">
                        <a href="{{'/one_product'}}/{{$s->pid}}" class="btn btn-danger hover-scale">More</a>
                        <input type="submit" value="Add To Cart" class="btn btn-success hover-scale">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endforeach
            </div>
        </div>
    </section>
    <!-- Footer -->
    @include('footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
