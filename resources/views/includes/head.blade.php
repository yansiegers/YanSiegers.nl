<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

{{-- <link rel="shortcut icon" href="icon-black.png" type="image/png"> --}}
<link rel="shortcut icon" href="icon-white.png" type="image/png">

<meta name="description" content="">
<meta name="keywords" content="">
{{-- <title>Yan Siegers {{ Str::title(' – '.$title) }}</title> --}}
<title>Yan Siegers {{ isset($title) ? Str::title(' – '.$title) : '' }}</title>

<!-- Styles -->
<link rel="stylesheet" href="/build/tailwind.css">

<style>
  /* @keyframes comeforeward {
    from { 
      box-shadow: -10px 0px 0px 0px rgba(255, 0, 0, 0.75), 10px 0px 0px 0px rgba(0, 255, 255, 0.75); 
    }
    to {
      box-shadow: -15px 0px 0px 0px rgba(255, 0, 0, 0.75), 15px 0px 0px 0px rgba(0, 255, 255, 0.75);
    }
  }

  .yan-btn {
    font-family: Arial, Helvetica, sans-serif;
    box-shadow: -10px 0px 0px 0px rgba(255, 0, 0, 0.75), 10px 0px 0px 0px rgba(0, 255, 255, 0.75);
  }          
  .yan-btn:hover {
    animation-name: comeforeward;
    animation-duration: 0.5s;
    animation-fill-mode: forwards;
  }  */
</style>