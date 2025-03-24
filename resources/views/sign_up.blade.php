<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up | Xofify</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js">
    <link rel="stylesheet" href="{{asset('items/style.css')}}">
</head>
<body>
     <!-- Navigation Bar -->
    @include('navbar')

    <section class="vh-100">
        <div class="container py-5 h-100">
          <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                class="img-fluid" alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
              <form action="{{url('/ins_sign_up')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div data-mdb-input-init class="form-outline mb-4">
                    <select class="form-control form-control-lg"  name="role">
                        <option  value="Customer" >Customer</option>
                        <option  value="Admin" >Admin</option>
                    </select>
                  </div>

                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" id="form1Example13" name="name" class="form-control form-control-lg" />
                    <label class="form-label" for="form1Example13">Name</label>
                  </div>
                <!-- Email input -->
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="email" id="form1Example13" name="email" class="form-control form-control-lg" />
                  <label class="form-label" for="form1Example13">Email address</label>
                </div>

                <!-- Password input -->
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="password" id="form1Example23" name="password" class="form-control form-control-lg" />
                  <label class="form-label" for="form1Example23">Password</label>
                </div>

                <div class="d-flex justify-content-around align-items-center mb-4">
                  <!-- Checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                    <label class="form-check-label" for="form1Example3"> Remember me </label>
                  </div>
                </div>

                <!-- Submit button -->
                <input type="submit" name="sign_up" data-mdb-button-init data-mdb-ripple-init value="Sign Up" class="btn btn-primary btn-lg btn-block"></input>

                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                </div>

                <a data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!"
                  role="button">
                  <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
                </a>
                <a data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" style="background-color: #55acee" href="#!"
                  role="button">
                  <i class="fab fa-twitter me-2"></i>Continue with Twitter</a>

              </form>
            </div>
          </div>
        </div>
      </section>
  <!-- Section: Design Block -->
   <!-- Footer -->
   @include('footer')
</body>
</html>
