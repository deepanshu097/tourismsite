<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Adventure Tour</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="container-fluid">
    <a class="navbar-brand " href="index.php">Adventure Tour</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#">Home</a>
        </li>
       
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Season
          </a>
          <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item " href="#rainy">Rainy</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#summer">summer</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#winter">Winter</a></li>
          </ul>
        </li>
         
      </ul>
  <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
    <li class="nav-item">
            <a class="nav-link" href="#contact">Contact us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#about" tabindex="-1" aria-disabled="true">About us</a>
          </li>
        </ul>     
    </div>
  </div>
</nav>

<!-- carousel images-->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block m-auto" src="images\summer\Dali-Monastery-darjeeling.jpeg" alt="First slide">
      <div class="carousel-caption">
      <h3>Dali Monatery Darjeeling</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block m-auto" src="images\rainy\rainy-darjeeling.jpg" alt="Second slide">
      <div class="carousel-caption">
      <h3>Rainy day in darjeeling </h3>
      </div>
    
    </div>
    <div class="carousel-item">
      <img class="d-block m-auto" src="images\winter\ride-thrill-rope.jpg" alt="Third slide">
      <div class="carousel-caption">
      <h3>Rope-ride manali thrill</h3>
      </div>
  
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

<!-- images season wise-->
<a id="winter">
<section class="my-4 "> 
<div class="py-4 text-center">
  <h3>Winter</h3>
</div>
<div class="container-fluid">
  <div class="row">
    <div class=" active col-lg-4 col-md-4 col-12">
      <img src="images\winter\ride-thrill-rope.jpg" class=" img-fluid pb-3 " alt="...">
    </div>
    <div class=" col-lg-4 col-md-4 col-12">
      <img src="images\winter\snow-fall-darjeeling.jpg" class=" img-fluid pb-3" alt="...">
    </div>
    <div class=" col-lg-4 col-md-4 col-12 ">
      <img src="images\winter\dharjeeling-winter.jpg" class="img-fluid pb-3 " alt="...">
    </div>
    </div>
  </div>
  </div>
  </div>
</section>
</a>

<a id="rainy">
<section class="my-4 " > 
<div class="py-4 text-center">
  <h3>Rainy</h3>
</div>
<div class="container-fluid">
  <div class="row">
    <div class=" col-lg-4 col-md-4 col-12 ">
      <img src="images\rainy\rainy-darjeeling-view.jpg" class="img-fluid pb-3 " alt="...">
    </div>
    <div class=" col-lg-4 col-md-4 col-12 ">
      <img src="images\rainy\rainy-darjeeling.jpg" class="img-fluid pb-3" alt="...">
    </div>
    <div class=" col-lg-4 col-md-4 col-12  py-0">
      <img src="images\rainy\rainy-kerela-2.jpg" class="img-fluid pb-3" alt="...">
    </div>
    </div>
    </div>
  </div>
  </div>
</section>
</a>

<a id="summer">
<section class="my-4 "> 
<div class="py-4 text-dark text-center">
  <h3>Summer</h3>
</div>
<div class="container-fluid">
  <div class="row">
    <div class=" col-lg-4 col-md-4 col-12">
      <img src="images\summer\darjeeling-himalayan -railway.jpg" class=" img-fluid pb-3" alt="...">
    </div>
    <div class=" col-lg-4 col-md-4 col-12">
      <img src="images\summer\tiger-hills-highest-railway-station.jpg" class="img-fluid pb-3 " alt="...">
    </div>
    <div class=" col-lg-4 col-md-4 col-12">
      <img src="images\summer\The-queen-of-hills-Darjeeling.jpg" class="img-fluid pb-3 " alt="...">
    </div>
    </div>
  </div>
  </div>
  </div>
</section>
</a>

<a id="contact">
<section class="my-4 ">
<div class=" m-auto border rounded p-4 form-bg col-lg-6 col-md-6 col-11  form">
  <div class="my-4 text-light text-center">
    <h3 >Contact us</h3>
  </div>
  <form method="post" action="contact.php">
  <div class="form-group d-flex">
    <label class="form-label text-light col-lg-2 col-md-10 col-4">Name</label>
    <input type=" text" name="name" class="form-control col-lg-10 col-md-10 col-8 " required>
</div>
<div class="form-group d-flex">
    <label class="form-label text-light col-lg-2 col-md-10 col-4">Email </label>
    <input type=" Email" name="email" class="form-control col-lg-10 col-md-10 col-8 " required>
</div>
<div class="form-group d-flex">
    <label class="form-label text-light col-lg-2 col-md-10 col-4">Phone no.</label>
    <input type=" text" name="phone" class="form-control  col-lg-10 col-md-10 col-8 " required>
</div>
<div class="form-group d-flex">
    <label class="form-label text-light col-lg-2 col-md-10 col-4 ">Message</label>
    <textarea type="text" name="message" class="form-control col-lg-10 col-md-10 col-8 " rows="5"></textarea>
</div>
<div class="form-group text-center my-3  ">
    <button type=" submit" class="form-control btn col-lg-2 col-md-2 col-4 text-center rounded-3"  >submit</button>
</div>
</form>
</div>
</section>
</a>

<a id="about" class=" my-4" >
<section class="footer text-light container-fluid footer-bg bg-dark my-4 col-md-12 col-lg-12 col-12">
  <div class="text-center p-4">
  <h4>About</h4>
  <p>This is Deepanshu Yadav</p>
  <h6>Web Developer</h6>
  </div>
</section>
</a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>	
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>