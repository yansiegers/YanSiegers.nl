<!DOCTYPE html>
<html lang="en">
<head>
  @include('includes.head')
</head>
<body class="bg-gray-500">

  {{-- <header class="container mx-auto px-5">
    @include('includes.header')
  </header> --}}

  {{-- @include('includes.header') --}}

  <main>
    @yield('content')
  </main>

  {{-- <footer class="container mx-auto px-5">
    @include('includes.footer')
  </footer> --}}

  {{-- @include('includes.footer') --}}

</body>
</html>
