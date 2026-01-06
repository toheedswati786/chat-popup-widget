<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - My Website</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/chat-widget.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Welcome to Our Website</h1>
            <nav>
                <a href="index.php">Home</a>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <section class="hero">
                <h2>Your Trusted Service Provider</h2>
                <p>We offer professional services tailored to your needs. Get in touch with us today to learn more about how we can help you achieve your goals.</p>
            </section>

            <section class="features">
                <div class="feature-card">
                    <h3>Quality Service</h3>
                    <p>We provide top-notch services with attention to detail and customer satisfaction.</p>
                </div>
                <div class="feature-card">
                    <h3>Expert Team</h3>
                    <p>Our experienced professionals are ready to assist you with any inquiries.</p>
                </div>
                <div class="feature-card">
                    <h3>24/7 Support</h3>
                    <p>We're here to help you around the clock with dedicated customer support.</p>
                </div>
            </section>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2025 My Website. All rights reserved.</p>
        </div>
    </footer>

    <?php include 'includes/chat-widget.php'; ?>

    <script src="assets/js/chat-widget.js"></script>
</body>
</html>