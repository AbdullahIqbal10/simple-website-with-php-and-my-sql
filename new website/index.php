<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Red Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>
<body>

<!--NavBar-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Red Store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!--Carousel-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 custom-carousel-image" src="images/brooke-lark-HlNcigvUi4Q-unsplash.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 custom-carousel-image" src="images/lily-banse--YHSwy6uqvk-unsplash.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 custom-carousel-image" src="images/rachel-park-hrlvr2ZlUNk-unsplash.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!--About Us-->
<section class = "my-5">
  <div class = "py-5">
    <h2 class = "text-center">
About Us
    </h2>
  </div>
  <div class = "container fluid">
  <div class = "row">
    <div class = "col-lg-6 col-md-6 col-12">
<img src="images/davide-cantelli-jpkfc5_d-DI-unsplash.jpg" class = "img-fluid aboutimg">
    </div>
    <div class = "col-lg-6 col-md-6 col-12">
<h2 class = "display-4">Yummy Food</h2>
<p class = "py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio fuga voluptas in ad quis laudantium perspiciatis dolorem nemo error, dignissimos aperiam et eveniet quod dolor suscipit amet consequuntur nulla molestiae.</p>
<a href="about.php" class = "btn btn-success"> Check More </a>   
</div>
  </div>
  </div>
</section>


<!--Services-->
<section class = "my-5">
<div class = "py-5">
  <h2 class = "text-center">Our Services</h2>
</div>
</section>


<div class="container mt-5">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="images/anna-pelzer-IGfIGP5ONV0-unsplash.jpg" class="card-img-top" alt="Image 1">
          <div class="card-body">
            <h5 class="card-title">Card 1</h5>
            <p class="card-text">This is a small description for Card 1.</p>
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="images/anna-pelzer-IGfIGP5ONV0-unsplash.jpg" class="card-img-top" alt="Image 2">
          <div class="card-body">
            <h5 class="card-title">Card 2</h5>
            <p class="card-text">This is a small description for Card 2.</p>
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="images/anna-pelzer-IGfIGP5ONV0-unsplash.jpg" class="card-img-top" alt="Image 3">
          <div class="card-body">
            <h5 class="card-title">Card 3</h5>
            <p class="card-text">This is a small description for Card 3.</p>
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </div>



<!--Contact us-->
<div class="container mt-5">
<section class = "my-5">
<div class = "py-5">
  <h2 class = "text-center">Contact Us</h2>
</div>
</section>

    <form action = "userinfo.php" method = "post">
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="user" name="user" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="mb-3">
        <label for="mobile" class="form-label">Mobile Number</label>
        <input type="tel" class="form-control" id="mobile" name="mobile" required>
      </div>
      <div class="mb-3">
        <label for="comments" class="form-label">Comments</label>
        <textarea class="form-control" id="comment" name="comment" rows="5" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>


<!--Footer-->
<div class="container mt-5">
    <!-- Your content here -->
  </div>

  <footer class="bg-dark text-light text-center py-3">
    <div class="container">
      <p>&copy; 2023 Your Company. All rights reserved.</p>
    </div>
  </footer>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>