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
            margin-right: 5px; /* Added for spacing between buttons */
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
                @foreach ($posts as $post)
                    <!-- Example row -->
                    <tr>
                        <td>
                            <a href="/posts/{{$post->slug}}">{{$post->title}}</a>
                        </td>
                        <td>Published</td>
                        <td>
                            <button class="mp-button mp-published">Published</button>
                            <a href="/admin/posts/{{$post->id}}/edit" class="mp-button mp-edit">Edit</a>
                            <form method="POST" action="/admin/posts/{{$post->id}}" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button class="mp-button mp-edit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <!-- Repeat rows for each post -->
                    <!-- ... -->
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
