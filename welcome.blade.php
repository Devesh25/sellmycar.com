<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>sellmycar.com</title>
  </head>
  <body>
   
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/">Sellmycar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
     <!--  <li class="nav-item active">
        <a class="nav-link" href="/dealers">Dealers <span class="sr-only">(current)</span></a>
      </li> -->
      <li class="nav-item active">
        <a class="nav-link" href="/api/model_details">Models <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/api/dealers_list">Dealers List <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/api/marketPlaceView">Market Place <span class="sr-only">(current)</span></a>
      </li>
     
      
    </ul>
    <form class="form-inline my-2 my-lg-0" action="/api/model_details">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1>Welcome Dealers</h1>
      <p>Please Enter the Details Below</p>
      <hr>
      <div class="col-lg-6">
        <form class="form" method="post" action="/api/adddetails">
           <div>
            <label>Model Name</label>
            <input type="text" name="model_name" class="form-control">
          </div>
           <div>
            <label>Model Year</label>
            <input type="text" name="model_year" class="form-control">
          </div>
          <div>
            <label>ODOMETER Reading</label>
            <input type="text" name="km_on_odometer" class="form-control">
          </div>
          <div>
            <label>Major Scrathes</label>
            <input type="text" name="major_scrathes" class="form-control">
          </div>
          <div>
            <label>Original Paint</label>
            <input type="text" name="original_paint" class="form-control">
          </div>
          <div>
            <label>Number of accidents reported</label>
            <input type="text" name="number_of_accidents" class="form-control">
          </div>
          <div>
            <label>Number of previous buyers</label>
            <input type="text" name="number_of_previous_buyers" class="form-control">
          </div>
          <div>
            <label> Registration Place</label>
            <input type="text" name="registration_place" class="form-control">
          </div><br>
          <div>
            <input type="submit" name="submit" class="btn btn-primary">
            <input type="reset" name="reset" class="btn btn-danger">
          </div>

          
        </form>
        
      </div>
      
    </div>
  </div>
  
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>