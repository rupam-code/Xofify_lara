<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category - Admin Panel</title>
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
        <h3>Edit Old Category</h3>
        <form action="{{url('/update_cartegory')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="Category_ID" value="{{$std->cid}}">
            <div class="form-group mb-3">
                <label for="Category_Name">Category Name</label>
                <input type="Text" name="Category_Name" value="{{$std->category_name}}" id="Category_Name" class="form-control" placeholder="Category Name" required>
            </div>
            <div class="form-group mb-3">
                <label for="Category_Status">Category Status</label>
                <input name="Category_Status" id="Category_Status" value="{{$std->category_status}}" class="form-control" placeholder="Category Status" required></input>
            </div>
            <div class="form-group text-center">
            <input type="submit" name="Edit_category" value="Edit Category" class="btn btn-primary w-50">
            </div>
        </form>
    </div>
</body>
</html>
