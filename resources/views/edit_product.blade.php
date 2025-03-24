<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category - Admin Panel</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Arial', sans-serif;
        }
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .form-container h3 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
            color: #343a40;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 20px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }
        .form-group label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h3>Edit Product</h3>
        <form action="{{url('/update_product')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
               <select name="Product_category" class="form-control" >
                <option value="">Select Category</option>
                @foreach($cat as $category)
                    <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                @endforeach
               </select>
            </div>
            <p><input type="hidden" name="id" value="{{$std->pid}}"></p>
            <div class="form-group mb-3">
                <label for="Product_Name">Product Name</label>
                <input type="Text" name="Product_Name" value="{{$std->product_name}}" id="Product_Name" class="form-control" placeholder="Product Name" required>
            </div>
            <div class="form-group mb-3">
                <label for="Product_Price">Product Price</label>
                <input type="Text" name="Product_Price" value="{{$std->product_price}}" id="Product_Price" class="form-control" placeholder="Product Price" required>
            </div>
            <div class="form-group mb-3">
                <label for="Product_Description">Product Description</label>
                <input type="Text" name="Product_Description" value="{{$std->product_description}}" id="Product_Description" class="form-control" placeholder="Product Description" required>
            </div>
            <div class="form-group mb-3">
                <label for="Product_Name">Product Image</label>
                <input type="file" name="Product_Image" id="Product_Image" class="form-control" placeholder="Product Image" required>
                <p><img src="{{url('/product_img')}}/{{$std->product_image}}" alt="Product Image" style="width: 100px;"></p>
            </div>
            <div class="form-group text-center">
            <input type="submit" name="Add_product" value="Add Product" class="btn btn-primary w-50">
            </div>
        </form>
    </div>
</body>
</html>
