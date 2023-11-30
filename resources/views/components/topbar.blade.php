{{-- resources/views/components/topbar.blade.php --}}

<nav class="top-bar">
    <div class="container">
        <a href="{{ url('/') }}" class="brand">My Blog</a>
        <ul class="navigation">
            <!-- Authentication Links -->
            @auth
                <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                Welcome, {{ auth()->user()->name }}
            </a>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/admin/posts/create">New Post</a>
                <!-- Add more dropdown items here if needed -->
            </div>
        </li>
                
                <li>
                    <form action="/logout" method="post" class="logout-form">
                        @csrf
                        <button type="submit" class="logout-button">Logout</button>
                    </form>
                </li>
            @else
                <li><a href="/register" class="nav-link">Register</a></li>
                <li><a href="/login" class="nav-link">Login</a></li>
            @endauth
        </ul>
    </div>
</nav>

<!-- ... (保留原有的 HTML 结构) ... -->

<style>
    /* Top Bar Styles */
    .top-bar {
        background-color: #004d99; /* Dark blue background */
        padding: 1rem 0;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
    }

    .top-bar .container {
        width: 100%;
        max-width: 1200px; /* Adjust the max-width as needed */
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .top-bar .brand {
        color: white;
        text-decoration: none;
        font-weight: bold;
        font-size: 1.5rem;
        transition: color 0.3s ease;
    }

    .top-bar .brand:hover {
        color: #66b3ff; /* Light blue on hover */
    }

    .top-bar .navigation {
        list-style: none;
        display: flex;
        align-items: center;
        margin: 0;
        padding: 0;
    }

    .top-bar .navigation .nav-link,
    .top-bar .navigation .logout-button {
        color: white;
        text-decoration: none;
        padding: 0.5rem 1rem;
        transition: color 0.3s ease;
        background: none;
        border: none;
    }

    .top-bar .navigation .nav-link:hover,
    .top-bar .navigation .logout-button:hover {
        color: #66b3ff; /* Light blue on hover */
        cursor: pointer;
    }

    .logout-form {
        display: inline; /* Keep the form inline with the navigation items */
    }

    /* Dropdown Menu Styles */
    .nav-item {
        position: relative; /* 确保下拉菜单相对于此元素定位 */
    }

    .dropdown-menu {
        display: none; /* 默认隐藏 */
        position: absolute; /* 绝对定位 */
        background-color: #f9f9f9; /* 浅色背景 */
        min-width: 160px; /* 最小宽度 */
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); /* 阴影效果 */
        z-index: 1; /* 确保在其他元素上方 */
        left: 0; /* 新增：从左边开始 */
        top: 100%; /* 新增：从顶部开始 */
    }

    .dropdown-item {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-item:hover {
        background-color: #f1f1f1; /* 鼠标悬浮时的背景色 */
    }

    /* Hover 显示下拉菜单 */
    .nav-item:hover .dropdown-menu {
        display: block;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .top-bar .container {
            flex-direction: column;
            align-items: flex-start;
        }
        .top-bar .navigation {
            flex-direction: column;
            align-items: flex-start;
        }
        .top-bar .navigation li {
            padding: 0.5rem 0;
        }
        .top-bar .brand,
        .top-bar .navigation .nav-link,
        .top-bar .navigation .logout-button {
            padding: 0.5rem; /* Adjust padding for smaller screens */
        }
    }
</style>
