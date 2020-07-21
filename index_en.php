<!DOCTYPE html>
<html lang="en">
<style>
  .maincolor {
    background-color: #007bff;
  }
</style>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YourSale</title>
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-light maincolor sticky-top">
    <a class="navbar-brand text-white" href="#"><img src="img/LogoPershop.png" width="30" height="30" alt="" loading="lazy"> YourSale</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars text-white "></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="php/functions.php">PHP</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="img/UK.png" alt="Brazil" width="30" height="30" alt="" loading="lazy">
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="index_pt-br.php"> <img src="img/brasil.png" alt="Português" width="30" height="30" alt="" loading="lazy"> Português</a>
       
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
   
        <div class="btn-group ">
          <button type="button" class="btn maincolor text-white dropdown-toggle" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user text-white"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-right">
            <button class="dropdown-item" type="button">Perfil</button>
            <button class="dropdown-item" type="button">Minha Lista</button>
            <button class="dropdown-item" type="button">Sair</button>
          </div>
        </div>
      </form>
    </div>
  </nav>
  <!-- /NAVBAR -->
  <div class="container-fluid">
    <div class="p-1">
      <div class="row">
        <div class="col-lg-12 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-1">
                  <!--  -->
                </div>
                <div class="col-10">
                  <div class="form-group">
                    <form>
                      <input type="text" class="form-control" placeholder="What are you looking for?" autocomplete="on" aria-label="Username">
                    </form>
                  </div>
                </div>
                <div class="col-1">
                  <!--  -->
                </div>
              </div>
              <div class="p-2"></div>
              <img src="https://picsum.photos/1300/500" class="img-fluid" alt="A random image">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <footer>
    <div class="maincolor">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <p class="text-white text-center">YourSale,a self learning project that anyone can enjoy!</p><br>
           <p class="text-white text-center"> Some icons made by <a class="text-white" href="https://www.flaticon.com/br/autores/freepik" title="Freepik">Freepik</a> from <a class="text-white" href="https://www.flaticon.com/br/" title="Flaticon">www.flaticon.com</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>
<script src="js/jquery.js"></script>
<script src="jquery-ui-1.12.1/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="fontawesome/js/all.min.js"></script>
<script>

</script>

</html>