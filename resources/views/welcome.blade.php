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



<!-- FINE NAVBAR -->


<!-- INIZIO CAROSELLO -->
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://thumbs.dreamstime.com/b/superficie-praticante-il-surfing-dell-acqua-onda-di-oceano-mare-124362369.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="data:image/jpeg;base64,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" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.ilfaroonline.it/photogallery_new/images/2021/01/amadeus-132980.660x368.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>