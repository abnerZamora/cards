<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
    
        <title>Autolote</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        

        <!-- Styles -->
      
    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
              aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                  <a class="navbar-brand" href="/">Home<span class="sr-only">(current )</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/vehiculos">Vehiculos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="/marcas">Marcas</a>
                </li>
              </ul>
             
            </div>
          </nav>
        
          <div class="container-fluid mt-3">
            @yield('resultado')
          </div>
    </body>
</html>
