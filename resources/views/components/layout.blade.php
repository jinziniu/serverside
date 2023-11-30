<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page - My Blog</title>
    <x-topbar>   </x-topbar>

   
    
    <style>
        /* 您的主页专用样式 */
        body, html {
            height: 100%;
            display: block; /* 改为block布局，适合主页 */
            font-family: 'Arial', sans-serif;
            background: #f4f4f4;
            color: #333;
            padding: 0;
            margin: 0;
        }
        .home-container {
            width: 85%;
            margin: auto;
            padding-top: 20px;
        }
  
    </style>
</head>
<body>
    <div class="home-container">
    
        {{ $slot }}
    </div>

</body>
</html>
   
   
<x-flash>

</x-flash>