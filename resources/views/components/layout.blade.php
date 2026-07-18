@props([
    'title' => 'Idea'
])

<!doctype html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="/contact">Contact Us</a>
        <a href="/about">About Us</a>
    </nav>
    <main>
        {{ $slot }}
    </main>
</body>
</html>
