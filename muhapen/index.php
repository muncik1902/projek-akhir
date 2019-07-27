<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->

    <!-- My Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <style>
      /* navbar */

      .navbar {
        position: relative;
        z-index: 1;
      }

      .navbar-brand {
        font-family: viga;
        font-size: 32px;
      }

      /* UTILITY */
      .tombol {
        text-transform: uppercase;
        border-radius: 40px;
      }

      /* Jumbotron */

      .jumbotron {
        background-image: url(img/backjumbo.jpg);
        background-size: cover;
        height: 540px;
        text-align: center;
        position: relative;
      }

      .jumbotron .container {
        position: relative;
        z-index: 1;
      }

      .jumbotron::after {
        content: '';
        display: block;
        width: 100%;
        height: 80%;
        background-image: linear-gradient(to top, rgba(0,0,0,1), rgba(0,0,0,0));
        position: absolute;
        bottom: 0;

      }

      .jumbotron .display-4 {
        color : white;
        margin-top: 150px;
        font-weight: 200;
        font-size: 40px;
        text-shadow: 2px 2px 2px rgba(0,0,0,0.7);
        margin-bottom: 30px;
      }

      .jumbotron .display-4 span {
        font-weight: 500;
      }


            /* DEKSTOP VERSION */
            @media (min-width : 992px) {

.navbar-brand, .nav-link {
  color: white !important;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);
}

.nav-link {
  text-transform: uppercase;
  margin-right: 20px;
}
.nav-link:hover::after {
  content: '';
  display: block;
  border-bottom: 3px solid #0b63dc;
  width: 50%;
  margin: auto;
  padding-bottom: 5px;
  margin-bottom: -8px;
}

.jumbotron {
  margin-top: -75px;
  height: 640px;
}

.jumbotron .display-4 {
  font-size: 62px;
}
}
   
    </style>

    <title>Welcome People</title>
  </head>
  <body>
    
    <!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
      <a class="navbar-brand" href="#"> <b>Donquixote</b></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#">Pricing</a>
          <a class="nav-item nav-link" href="#">Features</a>
          <a class="nav-item nav-link" href="#">About</a>
          <a class="nav-item btn btn-primary tombol" href="#">Join Us</a>
        </div>
      </div>
  </div>
</nav>
    <!-- end navbar -->

    <!-- Jumbotron -->
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Get your <span>style</span> and <br> <span>comfort</span> with us</h1>
          <a href="" class="btn btn-primary tombol">Our Product</a>
        </div>
      </div>

    <!-- End Jumbotron -->

    <!-- Container -->
    <div class="container">
    <!-- info panel -->
      <div class="row justify-content-center">
        <div class="col-lg-10 info-panel">
          <div class="row">
            <div class="col-lg">
              <img src="" alt="">
            </div>
          </div>
        </div>
      </div>  
      <!-- end info panel -->
    </div>
    <!-- End Container -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>