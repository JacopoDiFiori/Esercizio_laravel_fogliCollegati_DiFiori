<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap demo</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<!-- INIZIO NAVBAR -->
<nav class="navbar bg-dark border-bottom border-body  navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
<div class="container-fluid">
<a class="navbar-brand" href="/">AMADEUS</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
<li class="nav-item">
<a class="nav-link" aria-current="page" href="/">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{route('aboutUs')}}">Chi siamo</a>
</li>

<li class="nav-item">
<a class="nav-link" href="{{route('contacts')}}">Contatti</a>
</li>
</ul>
<form class="d-flex" role="search">
<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
<button class="btn btn-outline-success" type="submit">Search</button>
</form>
</div>
</div>
</nav>


<!-- FINE NAVBAR  -->


<div class="container-fluid bg-success">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1">I nostri contatti</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($contacts as $contact)
            <div class="col-12 col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="/img/foto no or.png" class="img-fluid" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$contact['name']}}</h5>
                        
                                {{-- Porta con te l'informazione chiamata  name che come valore ha $contact in chiave name --}}
                        <a href="{{route('contact.detail',['id'=>$contact['id']])}}" class="btn btn-primary">Dettaglio</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>