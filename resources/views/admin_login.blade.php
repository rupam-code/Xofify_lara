<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Admin Login | Xofify</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js">
    <link rel="stylesheet" href="{{asset('items/style.css')}}">
</head>
<body>
     <!-- Navigation Bar -->
     @include('navbar')
     
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <!-- Left Section -->
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                        <h2 class="mt-1 mb-5 pb-1">Welcome to Xofify Admin Login</h2>
                                    </div>

                                    <form action="{{ url('/admin_login_check') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <h5 class="mb-5 ">Sign in to access your personalized dashboard and explore more.</h5>
                                        @if(Session::has('Error'))
                                        <div class="alert alert-danger">
                                            {{ Session::get('Error') }}
                                        </div>
                                    @endif
                                    <div class="form-outline mb-4">
                                        <select class="form-control" name="role" id="">
                                            <option value="Admin">Admin</option>
                                        </select>


                                    </div>
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="email" id="form2Example11" class="form-control"
                                                placeholder="Enter your email address" name="email" />
                                            <label class="form-label" for="form2Example11">Email Address</label>
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="password" id="form2Example22" class="form-control"
                                                placeholder="Enter your password" name="pass" />
                                            <label class="form-label" for="form2Example22">Password</label>
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" >
                                               Admin Log In
                                            </button>

                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">New to Xofify?</p>
                                            <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-danger">
                                                Create an Account
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Right Section -->
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">Your Partner in Growth</h4>
                                    <p class="small mb-0">
                                        At Xofify, we strive to empower individuals and businesses by providing cutting-edge solutions
                                        that meet your needs. Join us to access exclusive tools, resources, and opportunities
                                        that help you achieve your goals effortlessly.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



  <!-- Section: Design Block -->
   <!-- Footer -->
   <footer>
    <p>&copy; 2025 Portronics. All rights reserved.</p>
</footer>
</body>
</html>
