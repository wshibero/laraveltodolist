<!doctype html>
<html>
  <head>
    @include('includes.head')
    <link rel="stylesheet" href="{{ secure_asset('css/styles.css') }}"/>
  </head>
  <body>
    <header>
      @include('includes.header')
    </header>
    <main>
      @yield('content')
    </main>
    <footer>
      @include('includes.footer')
    </footer>
  </body>
</html>