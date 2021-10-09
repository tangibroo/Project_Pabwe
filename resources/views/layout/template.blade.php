<!DOCTYPE html>
<html>
    <head>
        <title>Project Pabwe @yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <style type="text/css">
        @yield('style')
    </style>
    <body>
        <header>
              <!-- Navbar -->
              <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top scrolling-navbar">
                <div class="container-fluid">
                  <button
                    class="navbar-toggler"
                    type="button"
                    data-mdb-toggle="collapse"
                    data-mdb-target="#navbarExample01"
                    aria-controls="navbarExample01"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                  >
                    <i class="fas fa-bars"></i>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarExample01">
                    <h2 style="color: #336699">FTI-Teknik Informatika</h2>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="http://localhost:8000/home" style="color: #336699">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown" style="color: #336699">Profile</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="http://localhost:8000/visimisi">Visi dan Misi</a></li>
                                    <li><a class="dropdown-item" href="http://localhost:8000/tujuan-sasaran">Tujuan dan Sasaran</a></li>
                                    <li><a class="dropdown-item" href="http://localhost:8000/struktur-organisasi">Struktur</a></li>
                                    <li><a class="dropdown-item" href="http://localhost:8000/capaian-pembelajaran">Capaian Pembelajaran Lulusan</a></li>
                                    <li><a class="dropdown-item" href="http://localhost:8000/profil-lulusan">Profil Lulusan</a></li>
                                </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost:8000/sitemaps" style="color: #336699">Sitemaps</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost:8000/news" style="color: #336699">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost:8000/contact" style="color: #336699">Contact</a>
                        </li>
                    </ul>
                  </div>
                </div>
              </nav>
              <!-- Navbar -->
        </header>

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="source/gundar1.jpg" height="480px" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="source/gundar2.jpg" height="480px" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="source/gundar3.png" height="480px" alt="Third slide">
        </div>
      </div>
        <div class="carousel-caption d-none d-md-block" style="text-align: center;">
            @yield('carousel')    
        </div>
  </div>

        <div class="container"> 
            @yield('content')  
        </div>
        <aside style="align">
            @yield('aside')
        </aside>


        <!-- Footer -->
        <footer class="bg-light">
          <!-- Grid container -->
              <div class="container p-4">
                <!-- Section: Text -->
                <section class="mb-4">
                  <h2 style="color:#336699;">
                    FTI-Teknik<br>Informatika<hr>
                    <p style="font-size: small;">© 2020 Copyright: <a href="#" style="color:#336699;">FTI-Teknik Informatika 2021</a></p>
                  </h2>
                </section>
                <!-- Section: Text -->
              </div>
          <!-- Grid container -->
        </footer>
        <!-- Footer -->

    </body>    
</html>    