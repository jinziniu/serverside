<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link href="//unpkg.com/sanitize.css/sanitize.css" rel="stylesheet" />
    <style>
        /* General styles */
        body, html {
            font-family: 'Arial', sans-serif;
            background: #f4f4f4;
            color: #333;
            margin: 0;
        }

        /* Top Bar Styles */
        .top-bar {
            background-color: #004d99;
            padding: 0.5rem 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .top-bar a {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1rem;
            transition: color 0.3s ease;
        }

        .top-bar a:hover {
            color: #66b3ff;
        }

        /* Styles specific to form layout */
        .form-layout .form-container {
            background: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 400px;
            margin: 2rem auto; /* Center the form on the page */
        }

        .form-layout input[type='text'],
        .form-layout input[type='password'],
        .form-layout input[type='email'],
        .form-layout button[type='submit'] {
            width: calc(100% - 20px);
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-layout button[type='submit'] {
            background: #333;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-layout button[type='submit']:hover {
            background-color: #e8491d;
        }
    </style>
</head>
<body>
    <x-topbar></x-topbar>
    <div class="form-layout">
        <div class="form-container">
            <!-- Form content -->
            {{ $slot }}
        </div>
    </div>
</body>
</html>
