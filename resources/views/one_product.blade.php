<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #1f1f1f, #343a40);
            color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }
        .navbar {
            background: linear-gradient(45deg, #6c757d, #343a40);
        }

        .navbar .nav-link {
            color: #ffffff;
            font-weight: 500;
            transition: color 0.3s;
        }

        .navbar .nav-link:hover {
            color: #f8d30a;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            font-weight: bold;
            transition: transform 0.3s, background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .product-img {
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.7);
        }

        .price {
            color: #ffc107;
            font-weight: bold;
        }

        .description h3 {
            border-bottom: 2px solid #ffc107;
            display: inline-block;
            padding-bottom: 5px;
        }

        input[type="number"] {
            background-color: #333;
            color: #f8f9fa;
            border: 1px solid #555;
        }

        input[type="number"]:focus {
            background-color: #444;
            color: #f8f9fa;
            border-color: #ffc107;
            box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.25);
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    @include('navbar')

    <!-- Main Content -->
    <main class="container my-5">
        <form action="{{url('/add_to_cart')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row align-items-center">
                <div class="col-md-6 text-center">
                    <img src="{{url('/product_img')}}/{{$s->product_image}}" width="600px" class="img-fluid product-img" alt="{{$s->product_name}}">
                </div>
                <div class="col-md-6">

                   
                    <input type="hidden" name="uid" value="{{Auth::user()->id}}">
                    <input type="hidden" name="pid" value="{{$s->pid}}">
                    <input type="hidden" name="category_id" value="{{$s->category_id}}">
                    <input type="hidden" name="image" value="{{$s->product_image}}">
                    <input type="hidden" name="product_name" value="{{$s->product_name}}">
                    <input type="hidden" name="product_price" value="{{$s->product_price}}">

                    <h1 class="display-5">{{$s->product_name}}</h1>
                    <p class="text-white mb-2">{{$s->category_id}}</p>
                    <h3 class="price">₹{{$s->product_price}}</h3>

                    <p class="mt-4">{{$s->product_description}}</p>
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" name="qty" class="form-control w-25" value="1" min="1">
                    </div>
                    <input type="submit" class="btn btn-success btn-lg hover-scale" value="Add to Cart">
                </div>
            </div>
        </form>
        <div class="mt-5 description">
            <h3>Description</h3>
            <p>{{$s->product_description}}</p>
        </div>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @include('footer')


</body>
</html>
