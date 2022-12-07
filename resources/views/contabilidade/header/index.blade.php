<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <title>@yield('titulo','laravel')</title>
</head>
<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('img/logo.png')}}" alt="logo"  style="width: 60px"/></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{route('empresa.index')}}">Empresa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('instituicao.index')}}">instituição</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('contato.index')}}">Contatos</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link" href="{{route('site.index')}}">Site</a>
              </li>  
           

               
              <li class="nav-item dropdown usuario">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">{{auth()->user()->name}}</a>
                <ul class="dropdown-menu">
                  <li>

                    <li><a href="{{route("user.edit",[auth()->user()->id])}}" class="dropdown-item">Registro</a></li>
                   

                  <form  action="{{ route('logout') }}" method="POST" >
                    @csrf
                    <button class="dropdown-item" >Logout</button></li>
                </form>

                
               
                </ul>
              </li>
 


          


            </ul>
          </div>
        </div>
      </nav>


      <main class="main">
        @yield('content')
      </main>

      
    
</body>
</html>