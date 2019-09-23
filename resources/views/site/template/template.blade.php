<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FutBowl Documentation</title>
    @stack('css')
</head>
<body>
    <div class="container-fluid" id="app">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">Futbowl</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="/">Home</a>
                </li>

                @foreach ($json as $item)
                    <menu-component :itemenu="{{$item}}"></menu-component>
                @endforeach

              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>


          @yield('content')

    </div>
    <script src="/js/app.js"></script>
    @stack('js')
</body>
</html>
