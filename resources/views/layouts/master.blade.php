<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cartas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
    @vite(['resources/css/app.css','resources/js/app.js'])

    <script src=" https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.all.min.js "></script>
    <nav class="navbar bg-dark border-bottom border-body " data-bs-theme="dark" >
        <nav class="navbar navbar-expand-lg bg-body-tertiary"  >
            <div class="container-fluid"  >
        
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown" >
                <ul class="navbar-nav " >
              
                  <li class="nav-item">
                    <a class="nav-link" href="/">Início </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Consultar 
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{ route('carta.index') }}">Por parte do nome</a></li>
                      <li><a class="dropdown-item" href="#">Por prateleira</a></li>
                      <li><a class="dropdown-item" href="#">Por estante</a></li>
                      <li><a class="dropdown-item" href="#">Por pasta</a></li>
                      <li><a class="dropdown-item" href="#">Por data</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
      </nav>
      
</head>

<body>
    <div class="container">
   @yield('content')
    </div>
    <script src="{{ asset('/js/custom.js') }}"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 
  </body>
</html>