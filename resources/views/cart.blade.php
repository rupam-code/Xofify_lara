<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xofify | Cart</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{asset('items/admin_style.css')}}">
</head>

<body>
    <header>
        @include('navbar')
    </header>

    <section class="h-100 gradient-custom">
        <div class="container py-5">
            <div class="row justify-content-center">
                <!-- Cart Items -->
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-header py-3">Cart - {{ count($std) }} items</div>
                        <div class="card-body">
                            @foreach ($std as $s)
                                <div class="row mb-4">
                                    <div class="col-lg-3">
                                        <img src="{{ url('/product_img') }}/{{ $s->image }}"
                                            class="img-fluid rounded" alt="Product Image">
                                    </div>
                                    <div class="col-lg-5">
                                        <p><strong>{{ $s->category_name }}</strong></p>
                                        <p>{{ $s->cart_name }}</p>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="d-flex align-items-center">
                                            <!-- Update Cart Form -->
                                            <form action="{{ route('cart.update', $s->cart_id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <input type="number" name="qty" min="1"
                                                    class="form-control text-center w-50"
                                                    value="{{ $s->qty }}">
                                                <button type="submit"
                                                    class="btn mt-2 btn-primary btn-sm">Update</button>
                                            </form>
                                        </div>
                                        <p class="price mt-2">₹{{ $s->cart_price * $s->qty }}</p>

                                        <!-- Delete Cart Form -->
                                        <form action="{{ route('cart.delete', $s->cart_id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                                        </form>
                                    </div>
                                </div>
                                <hr>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Summary -->
                <div class="col-md-4">
                    <div class="card summary-card">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Summary</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between">
                                    Products <span>₹{{ number_format($std->sum('cart_price'), 2) }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    Shipping <span>Free</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <strong>Total</strong>
                                    <span><strong>₹{{ number_format($std->sum('cart_price'), 2) }}</strong></span>
                                </li>
                            </ul>
                            <!-- Button to trigger modal -->
                            <button type="button" class="btn btn-primary btn-block mt-3 w-100" data-bs-toggle="modal"
                                data-bs-target="#checkoutModal">
                                Proceed to Checkout
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Checkout Modal -->
    <div class="modal fade" id="checkoutModal" tabindex="-1" aria-labelledby="checkoutModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="checkoutModalLabel">Thank You!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <p>Thank you for shopping with us!</p>
                    <p>Your order has been placed successfully.</p>
                    <p>We hope to see you again soon.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="{{ url('/') }}" class="btn btn-primary">Continue Shopping</a>
                </div>
            </div>
        </div>
    </div>

    @include('footer')


</body>

</html>
