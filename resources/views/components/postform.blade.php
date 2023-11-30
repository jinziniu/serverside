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
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background: #edf2f7;
            color: #333;
            margin: 0;
            padding: 0;
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
            text-align: left;
            width: 100%;
            max-width: 500px;
            margin: 2rem auto; /* Center the form on the page */
        }

        .form-layout h1 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .form-layout label {
            display: block;
            margin-bottom: .5rem;
            color: #4a5568;
            text-transform: uppercase;
            font-size: .75rem;
            font-weight: bold;
        }

        .form-layout input[type='text'],
        .form-layout input[type='file'],
        .form-layout textarea,
        .form-layout select,
        .form-layout button {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1.5rem;
            border: 1px solid #cbd5e0;
            border-radius: 0.375rem;
            box-sizing: border-box;
        }

        .form-layout button {
            background: #0056b3;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-layout button:hover {
            background-color: #003d82;
        }

        .form-layout .error {
            color: #e53e3e;
            font-size: .875rem;
            margin-top: .25rem;
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
