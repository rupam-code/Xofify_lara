

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Products - Admin Panel</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 30px;
        }
        .table {
            border-radius: 10px;
            overflow: hidden;
        }
        .table-dark th {
            text-align: center;
        }
        .table td, .table th {
            vertical-align: middle;
            text-align: center;
        }
        .btn-edit {
            background-color: #ffc107;
            border: none;
            color: white;
            transition: 0.3s ease;
        }
        .btn-edit:hover {
            background-color: #e0a800;
        }
        .btn-delete {
            background-color: #dc3545;
            border: none;
            color: white;
            transition: 0.3s ease;
        }
        .btn-delete:hover {
            background-color: #c82333;
        }
        .header-btns {
            text-align: right;
        }
        .header-btns button {
            margin-right: 10px;
        }
    </style>
</head>
<body>


    <!-- Page Content -->
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Manage Products</h2>
            <div class="header-btns">
                <a href="{{url('/add_product')}}" class="btn btn-success"><i class="fa-solid fa-plus"></i> Add New Product</a>
            </div>
        </div>
        {{$n = 1}}
        <table class="table table-hover shadow-sm bg-white">
            <thead class="table-dark">
                <tr>
                    <th>Product Number</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Description</th>
                    <th>Product Category</th>
                    <th>Product Image</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
           @foreach ($std as $s)
               <tr>
                <td>{{$n++}}</td>
                <td>{{$s->product_name}}</td>
                <td>{{$s->product_price}}</td>
                <td>{{$s->product_description}}</td>
                <td>{{$s->category_id}}</td>
                <td><img src="{{url('/product_img')}}/{{$s->product_image}}" alt="Product Image" style="width: 100px;"></td>
                <td>
                    <a href="{{ url('/edit_product') }}/{{ $s->pid }}" class="btn btn-sm btn-warning"><i
                            class="fa-solid fa-pen"></i> Edit</a>
                    <a href="{{ url('/delete_product') }}/{{ $s->pid }}"
                        class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i> Delete</a>
                </td>


               </tr>
           @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
