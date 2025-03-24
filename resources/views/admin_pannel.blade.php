<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pannel | Xofify</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

   <link rel="stylesheet" href="{{asset('items/admin_style.css')}}">
   </style>
</head>

<body>

    @include('admin_navbar')

    <div class="content">
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Total Users</h5>
                    </div>
                    <div class="card-body">
                        <h3 class="card-text">1,234</h3>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Total Revenue</h5>
                    </div>
                    <div class="card-body">
                        <h3 class="card-text">$12,345</h3>
                        <p class="card-text"><small class="text-muted">Last updated 5 mins ago</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Active Projects</h5>
                    </div>
                    <div class="card-body">
                        <h3 class="card-text">45</h3>
                        <p class="card-text"><small class="text-muted">Last updated 10 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table Section -->
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Recent Orders</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Customer</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#12345</td>
                                    <td>John Doe</td>
                                    <td>2023-10-01</td>
                                    <td>$120</td>
                                    <td><span class="badge bg-success">Completed</span></td>
                                </tr>
                                <tr>
                                    <td>#12346</td>
                                    <td>Jane Smith</td>
                                    <td>2023-10-02</td>
                                    <td>$250</td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>#12347</td>
                                    <td>Michael Johnson</td>
                                    <td>2023-10-03</td>
                                    <td>$80</td>
                                    <td><span class="badge bg-danger">Cancelled</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- Other sections for managing users and orders remain the same -->
    </div>
</body>

</html>
