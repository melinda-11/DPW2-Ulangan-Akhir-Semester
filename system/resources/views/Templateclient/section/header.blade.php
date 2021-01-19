 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/350ae57961.js" crossorigin="anonymous"></script>

    
    <title>BabyShop</title>
  </head>
  <body>
 <!--navbar-->
 
    <nav class="navbar navbar-expand-lg navbar-dark bg-succses">
      <a class="navbar-brand" href="#">BabyShop</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="{{ url("beranda") }}">Beranda <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url("login") }}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url("produk") }}">Produk</a>
          </li>
          
        </ul>
      </div>
    </nav>



<!--navbar search-->
<nav class="navbar  navbar-light bg-light ">
  <a class="navbar-brand"><h3>BabyShop</h3></a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Cari barang" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>

<!--coursel-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
    <div class="carousel-item active">
    
      <img src="{{url('public/img/gambar2.jpg')}}" class=".." alt="..." width="1500" height="500">
    </div>
    <div class="carousel-item">
      <img src="{{url('public/img/gambar3.jpg')}}"class=".." alt="..." width="1500" height="500">
    </div>
    <div class="carousel-item">
      <img src="{{url('public/img/gambar4.jpg')}}"class=".." alt="..." width="1500" height="500">
    </div>
  </div>

  
</div>
