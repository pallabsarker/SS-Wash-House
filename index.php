<!DOCTYPE html>
<html>
<head>
    <title>WHMS</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

<style>
html {
  scroll-behavior: smooth;
}
</style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">SS Wash House</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="signin.php">Login</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="signup.php">Registration</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="adminlogin.php">Admin</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#Services">Services</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#About">About</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#Contact">Contact</a>
        </li>

      </ul>

      </form>
    </div>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="1.jpg" alt="Machineries" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Machineries</h3>
        <p>We have such great machineries!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="5.jpg" alt="Working" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Workers</h3>
        <p>We have qualified workers!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="3.jpg" alt="Maintainance" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Maintainance</h3>
        <p>We keep regular maintainance!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center" id="About">About Us</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <img src="7.jpg" class="img-fluid aboutimg">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <h2 class="display-4">This is SS Wash House</h2>
                <p class="py-3">Here we wash any type of clothes from garmnets, fashion House
                different types of enterprises etc. Our vision is to take valid 
                orders and deliver perfectly after washing the clothes properly. 
                Thank you. 
                </p>
                <a href="about.php" class="btn btn-success"> see more </a>
            </div>
        </div>
    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center" id="Services">Our Services</h2>
    </div>
    <div class="container-fluid">
    <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
        <img class="card-img-top" src="10.jpg" alt="Card image">
        <div class="card-body">
        <h4 class="card-title">Environment</h4>
        <p class="card-text"></p>
        <a href="#" class="btn btn-primary">See more</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
        <img class="card-img-top" src="9.jpg" alt="Card image">
        <div class="card-body">
        <h4 class="card-title">Upgraded Machineries</h4>
        <p class="card-text"></p>
        <a href="#" class="btn btn-primary">See more</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
        <img class="card-img-top" src="6.jpg" alt="Card image">
        <div class="card-body">
        <h4 class="card-title">Authentic Equipments</h4>
        <p class="card-text"></p>
        <a href="#" class="btn btn-primary">See more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center" id="Galary">Our Galary</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="1.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="2.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="3.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="4.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="5.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="6.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="7.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="8.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="9.jpg" class="img-fluid pb-4">
            </div>
        </div>
    </div>
    </section>

    <section class="my-5">
    <div class="py-5">
        <h2 class="text-center" id="Contact">Contact us</h2>
    </div>
    <div class="w-50 m-auto">
      <form action="comments.php" method="post">
        <div class="form-group">
          <label>Full Name</label>
          <input type="text" name="full_name" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Mobile No</label>
          <input type="text" name="mobile" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Comments</label>
          <textarea class="form-control" name="comment"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    </section>

    <footer>
      <p class="p-3 bg-dark text-white text-center">sswashhouse@gmail.com</p>
    </footer>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>