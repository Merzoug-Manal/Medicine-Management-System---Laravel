<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('CSS/index.css') }}"> 

<style>



</style>

</head>

<body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <div  >
                <img src="{{ asset('/images/logo.png') }}" alt="logo" width="140" height="50" />
            </div>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a  class="nav-link active fs-3" style="color:#161D6F" aria-current="page" href="/medicines"> Medicines</a>
                    </li>
                </ul>
                 <!-- Search Form -->
    <form id="search" class="d-flex mt-2" role="search" action="{{ route('medicines.index') }}" method="GET">
        
        <input class="form-control me-2" style="width:400px; margin-left:90px" 
               name="search" 
               type="search" 
               placeholder="Search medicines by title..." 
               aria-label="Search" 
               value="{{ request()->query('search') }}">
        
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
            </div>
        </div>
    </nav>
    <div >
        @yield('content')
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>