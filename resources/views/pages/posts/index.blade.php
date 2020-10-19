<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Posts</title>

      <!-- Fonts -->
      {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}

      <!-- Styles -->
      <link rel="stylesheet" href="build/tailwind.css">
  </head>
  <body>
    <h1 class="underline">Posts</h1>
    <ul class="list-disc list-inside">
      
      @foreach ($posts as $post)
      <li>
        <a href="{{ action('App\Http\Controllers\PostController@show', [$post->id]) }}">
          {{ $post->title }}
        </a>
      </li>
      @endforeach
    </ul>
  </body>
</html>
