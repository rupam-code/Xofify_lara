<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portronics</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('items/style.css')}}">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .hero-section {
            background: linear-gradient(45deg, #6c757d, #343a40);
            color: white;
            text-align: center;
            padding: 50px 20px;
        }
        .contact-section {
            padding: 40px 20px;
        }
        .contact-section h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 15px 0;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    @include('navbar')

    <!-- Hero Section -->
    <div class="hero-section">
        <h1>Welcome to Portronics</h1>
        <p>Your one-stop solution for all tech products and accessories</p>
    </div>

    <!-- Get in Touch Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <h2>Get in Touch</h2>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Your Message</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Write your message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </section>

    @include('footer')


    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
