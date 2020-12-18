<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- <link rel="shortcut icon" href="icon-black.png" type="image/png"> --}}
    <link rel="shortcut icon" href="/assets/icons/Icon - white.png" type="image/png">

    <meta name="description" content="">
    <meta name="keywords" content="">
    {{-- <title>Yan Siegers {{ Str::title(' – '.$title) }}</title> --}}
    <title>Yan Siegers {{ isset($title) ? Str::title(' – '.$title) : '' }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/build/tailwind.css">

    <style>
    </style>
</head>
