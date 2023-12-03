<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page - My Blog</title>
   <x-topbar>   </x-topbar>
    <!-- Stylesheet -->
    <style>
        /* Your homepage specific styles */
        body, html {
            height: 100%;
            display: block;
            font-family: 'Helvetica Neue', sans-serif;
            background: #f4f4f4;
            color: #333;
            padding: 0;
            margin: 0;
            line-height: 1.6;
        }

        .home-container {
            width: 85%;
            margin: auto;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            border: 1px solid #ddd;
            background: white;
            border-radius: 4px;
        }

        /* Responsive design adjustments */
        @media screen and (max-width: 768px) {
            .home-container {
                width: 95%;
                padding: 10px;
            }
        }

        /* Footer Styling */
        footer {
            background-color: #f8f9fa;
            color: #555;
            text-align: center;
            padding: 10px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
            border-top: 1px solid #e7e7e7;
        }

        footer a {
            color: #007bff;
            text-decoration: none;
        }

        /* Hover effect for links */
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="home-container">
        <!-- Your main content goes here -->
        {{ $slot }}
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2023 My Blog. All rights reserved.</p>
    </footer>

    <!-- Your existing topbar and flash components -->
 
    <x-flash></x-flash>
</body>
</html>
