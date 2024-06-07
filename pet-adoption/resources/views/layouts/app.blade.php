<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Adoption Platform</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 1em 0;
            text-align: center;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        nav ul li {
            margin: 0.5em 1em;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
        }
        .content {
            padding: 2em;
            text-align: center;
        }
        .pet-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .pet {
            border: 1px solid #ccc;
            border-radius: 10px;
            margin: 1em;
            padding: 1em;
            width: 200px;
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        form label {
            margin: 0.5em 0;
        }
        form input, form textarea {
            margin: 0.5em 0;
            padding: 0.5em;
            width: 80%;
            max-width: 400px;
        }
        form button {
            background-color: #4CAF50;
            color: white;
            padding: 0.5em 2em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        form button:hover {
            background-color: #45a049;
        }
        footer {
            background-color: #f1f1f1;
            text-align: center;
            padding: 1em 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Pet Adoption Platform</h1>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/pets">Available Pets</a></li>
                <li><a href="/contact">Contact Us</a></li>
                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @endif
                @else
                    <li>
                        <a href="#" role="button">
                            {{ Auth::user()->name }}
                        </a>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </nav>
    </header>
    <div class="content">
        @yield('content')
    </div>
    <footer>
        <p>&copy; 2024 Pet Adoption Platform. All rights reserved.</p>
    </footer>
</body>
</html>