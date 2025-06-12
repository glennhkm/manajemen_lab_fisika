<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lab Geofisika</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="w-full h-screen plus-jakarta-sans flex flex-col">
    <x-navbar/>
    {{ $slot }}
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
