<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VAPESHOP - About Us</title>
    <!-- Link to Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Link to the CSS file -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Menu</h2>
        <ul>
            <li><a href="{{ route('home') }}"><i class="fas fa-igloo"></i> Home</a></li>
            <li><a href="{{ route('about') }}"><i class="fas fa-info-circle"></i> About</a></li>
            <li><a href="{{ route('services') }}"><i class="fas fa-concierge-bell"></i> Services</a></li>
            <li><a href="{{ route('contact') }}"><i class="fas fa-envelope"></i> Contact</a></li>
        </ul>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <h1>About Us</h1>
            <p>Welcome to the about page!</p>
        </div>
     </div>
   

</body>
</html>
