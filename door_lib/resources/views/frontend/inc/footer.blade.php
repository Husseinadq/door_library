@extends('frontend.layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/assets/css/custom.css">
    <script src="public/assets/js/custom.js" defer></script>
    <title>Electronic Library</title>
</head>
<body>
    <!-- Rest of the page content -->
    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h3>About Us</h3>
                <p>We are an electronic library dedicated to providing access to books and resources for everyone. Our mission is to promote literacy and education by making knowledge accessible to all.</p>
            </div>
            <div class="footer-section">
                <h3>Contact Us</h3>
                <p>Email: info@electroniclibrary.com</p>
                <p>Phone: (123) 456-7890</p>
                <p>Address: 1234 Main St, Anytown, USA</p>
            </div>
            <div class="footer-section">
                <h3>Follow Us</h3>
                <ul class="social-links">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="copyright-notice">
            <p>&copy; 2023 Electronic Library. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
@endsection

