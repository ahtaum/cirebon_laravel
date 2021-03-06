<!doctype html>
<html lang="en">
  <head>
    
    @include('subs.header')

    <style>
        html, body {
            padding: 0;
            margin: 0;
            background: #191919;
            overflow-x: hidden;
        }

        #wrapper {
          min-height: 100%;
          position: relative;
        }
        #wrapper #content {
          padding-bottom: 100px;
        }
    </style>

    <title>@yield('title')</title>

  </head>
  <body>
    
    <div id="wrapper">
      @stack('styles')

      @include('subs.menu')

      @include('subs.banner')

      <div id="content">
        
        @yield('content')

      </div>

      @include('subs.footer')

      @include('subs.footerScript')
      @stack('scripts')
    </div>

  </body>
</html>