<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>
    
    {{-- prepend - style --}}
    @stack('prepend-style')

    {{-- Style --}}
    @include('includes.style')

    {{-- Stack ini digunakan apabila ada style tambahan --}}
    @stack('addon-style')

  </head>
  <body>
    {{-- Navbar --}}
    @include('includes.navbar-alternate')

    {{-- Content Main --}}
    @yield('content')

    {{-- prepend script --}}
    @stack('prepend-style')

    {{-- Script --}}
    @include('includes.script')

    {{-- Stack ini digunakan apabila ada script / js tambahan --}}
    @stack('addon-script')
  </body>
</html>
