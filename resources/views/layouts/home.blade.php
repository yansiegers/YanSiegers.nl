<!DOCTYPE html>
<html lang="en">
<head>
  @include('includes.head')
</head>
<body>

  {{-- <header class="container mx-auto px-5">
    @include('includes.header')
  </header> --}}

  <main>
    @yield('content')
  </main>

  {{-- <footer class="container mx-auto px-5">
    @include('includes.footer')
  </footer> --}}

</body>
</html>
