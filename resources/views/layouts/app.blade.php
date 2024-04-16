<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>Book Reviews</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio"></script>

    {{--    Styles  --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="container mx-auto mt-10 mb-10 max-w-3xl">
@yield('content')
</body>
</html>
