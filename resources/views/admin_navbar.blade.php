<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="sidebar">
        <h3>Welcome Admin {{Auth::user()->name}} </h3>
        <a href="{{ url('/admin_pannel') }}"><i class="fa-solid fa-chart-line"></i> Dashboard</a>
        <a href="{{ url('/add_cartegory') }}"><i class="fa-solid fa-plus"></i>Add Category</a>
        <a href="{{url('/add_product')}}"><i class="fa-solid fa-tent-arrows-down"></i> Add Product</a>
        <a href="{{url('/select_product')}}"><i class="fa-solid fa-utensils"></i> Manage Product</a>
        <a href="{{url('/select_category')}}"><i class="fa-solid fa-layer-group"></i> Manage Category</a>
        <a href="{{url('/logout')}}"><i class="fa-solid fa-sign-out-alt"></i> Logout</a>
    </div>
</body>
</html>
