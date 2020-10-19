<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

{{-- <link rel="shortcut icon" href="icon-black.png" type="image/png"> --}}
<link rel="shortcut icon" href="icon-white.png" type="image/png">

<meta name="description" content="">
<meta name="keywords" content="">
{{-- <title>Yan Siegers {{ Str::title(' – '.$title) }}</title> --}}
<title>Yan Siegers {{ isset($title) ? Str::title(' – '.$title) : '' }}</title>

<!-- Styles -->
<link rel="stylesheet" href="build/tailwind.css">