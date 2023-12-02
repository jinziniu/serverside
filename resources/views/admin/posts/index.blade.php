<x-topbar></x-topbar>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Posts</title>
    <style>
        /* Use a unique prefix 'mp-' for 'manage posts' to avoid conflicts */
        .mp-container {
            width: 80%;
            margin: 0 auto;
        }
        .mp-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .mp-table th, .mp-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        .mp-table th {
            background-color: #f2f2f2;
        }
        .mp-button {
            text-decoration: none;
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            color: white;
        }
        .mp-published {
            background-color: #4CAF50; /* Green */
        }
        .mp-edit {
            background-color: #2196F3; /* Blue */
        }
    </style>
</head>
<body>
    <div class="mp-container">
        <h1>Manage Posts</h1>
        <!-- Links or Navigation could go here -->
        <table class="mp-table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example row -->
                <tr>
                    <td>Post Title 1</td>
                    <td>Published</td>
                    <td>
                        <button class="mp-button mp-published">Published</button>
                        <button class="mp-button mp-edit">Edit</button>
                    </td>
                </tr>
                <!-- Repeat rows for each post -->
                <!-- ... -->
            </tbody>
        </table>
    </div>
</body>
</html>
