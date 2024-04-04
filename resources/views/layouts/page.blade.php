<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pages</title>
    <style>
        nav {
            padding: 10px;
            text-align: center;
            background-color: purple;
        }

        nav a {
            text-decoration: none;
            color: white;
        }
    </style>
    @vite(['resources/css/style.css'])
</head>
<body>
    @yield('start')
    <nav>
        <a href="">Home</a>
        <a href="">About</a>
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>