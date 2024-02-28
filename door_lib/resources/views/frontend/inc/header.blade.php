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
    <header>
        <div class="logo">
            <h1>Electronic Library</h1>
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Browse</a></li>
                <li><a href="#">Search</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="#">Create Account</a></li>
            </ul>
        </nav>
        <div class="search-container">
            <input type="text" id="search-input" placeholder="Search...">
            <button id="search-btn">Search</button>
        </div>
    </header>
    <!-- Rest of the page content -->
</body>
</html>

  @endsection
