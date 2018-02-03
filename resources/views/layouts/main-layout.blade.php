<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
    </head>
    <body>
      <div id="app">
        <header class="header">
          <a href="/" class="logo">Web-Development-Journal</a>
          <nav class="navigation">
            <ul>
              <li>
                  <a href="#">Гайды</a>
              </li>
              <li>
                  <a href="#">Курсы</a>
              </li>
              <li>
                  <a href="/tutorials/1">Туториалы</a>
              </li>
              <li>
                  <a href="#">Блог</a>
              </li>
              <li>
                  <a href="#">Extra</a>
              </li>
            </ul>
          </nav>
          <!-- <form class="" action="" method="post">
            <input type="text" name="search" value="">
          </form> -->
          <a href="#" class="auth">Вход</a>
          <burger-component></burger-component>
        </header>
        <main>
          @yield('content')
        </main>
        <footer>

        </footer>
      </div>
      <script src="{{asset('js/app.js')}}"></script>
    </body>
</html
