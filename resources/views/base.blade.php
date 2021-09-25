<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>Computer Sets</title>
    <
</head>
<body>
<div class="container">
   <style>
        body {
            background-color: skyblue;
            
        }
    </style>

    
    <nav class="navbar navbar-expand-lg navbar bg-light bg-black  p-md-3">
        <div class="container">
        
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link box text-white  " href="/">Home</a>
                    </li>
                   
                </ul>
                <form class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        @if(Auth::check())
                            <li class="nav-item">
                                <a class="nav-link box text-white" href="/dashboard">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link box text-white" href="/logout">Logout</a>
                            </li>
                        @else
                                    <li><a class=" nav-link box text-white " href="/login">Login</a></li>
                                    <li><a class=" nav-link box text-white" href="/register">Register</a></li>
                            </li>          
                        @endif
                    </ul>
                </form>
            </div>
        </div>
    </nav>

    @if (session ('Error'))
        <div class="alert alert-warning">
            <div class="container">
                {{session('Error')}}
            </div>
        </div>
    @endif
    @if (session ('Message'))
        <div class="alert alert-success">
            <div class="container">
                {{session('Message')}}
            </div>
        </div>
    @endif
    @if (session ('errors'))
        <div class="alert alert-warning">
            <div class="container">
                Please fix the following errors
                <ul>
                    @foreach (session('errors')->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    </div>

    
    
        @yield('content')
    </div>

    </style>
</div>
</body>
</html>