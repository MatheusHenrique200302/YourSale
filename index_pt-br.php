<!DOCTYPE html>
<html lang="en">
<style>
  .maincolor {
    background-color: #007bff;
  }

  footer.page-footer {
    bottom: 0;
    color: #fff
  }

  footer.page-footer .container-fluid {
    width: auto
  }

  footer.page-footer .footer-copyright {
    overflow: hidden;
    color: rgba(255, 255, 255, 0.6);
    background-color: rgba(0, 0, 0, 0.2)
  }

  footer.page-footer a {
    color: #fff
  }

  .menu.sub-menu {
    position: absolute;
    width: 940px;
    height: 38px;
    overflow: hidden;
    -webkit-transition: height 0.3s cubic-bezier(0.2, 0.9, 0.2, 0.9);
    -moz-transition: height 0.3s cubic-bezier(0.2, 0.9, 0.2, 0.9);
    transition: height 0.3s cubic-bezier(0.2, 0.9, 0.2, 0.9);
    -webkit-transition-delay: 0.3s;
    -moz-transition-delay: 0.3s;
    transition-delay: 0.3s;
    z-index: 12;

  }
</style>
<?php
include 'php/conexao.php';
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YourSale</title>
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
  <main></main>
  <!-- NAVBAR -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light maincolor sticky-top">
      <a class="navbar-brand text-white" href="#"><img src="img/LogoPershop.png" width="30" height="30" alt=""
          loading="lazy"> YourSale</a>
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
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="img/brasil.png" alt="Brazil" width="30" height="30" alt="" loading="lazy">
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="index_en.php"> <img src="img/UK.png" alt="English" width="30" height="30"
                  alt="" loading="lazy"> English</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Perfil</a>
              <a class="dropdown-item" href="#">Minha Lista</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Sair</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- /NAVBAR -->
  <div class="container-fluid">
    <div class="pt-1">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card">
            <div class="card-body">
              <form class="form-group">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="O que está procurando?"
                    aria-label="Recipient's username" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-outline-dark" type="button" id="button-addon2"><i
                        class="fas fa-search"></i></button>
                  </div>
                </div>
              </form>
              <!-- Produtos -->
              <div class="pt-2"></div>
              <div class="container-fluid">
                <div class="row">
                 <?php
                 if(!isset($_GET['valor'])){
                  $_GET['valor'] = 0;
                }
                $valor = $_GET['valor'];
                 $sqlline = "SELECT * FROM tbl_produto LIMIT ".$valor.", 12";
                $sql = $pdo->prepare($sqlline);
                $sql->execute();
              
                foreach($sql as $result){
                  extract($result);
                  $nome = $prod_nome;
                  $preco = $prod_preco;
                  $path = $prod_path;
                  ?>
                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card" style="width: 18rem;">
                      <img src="<?=$path;?>" class="img-fluid" alt="...">
                      <div class="card-body">
                        <h5 class="card-title"><?=$nome;?></h5>
                        <p class="card-text"><?=$preco;?></p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div>
              <?php  }?>
                  
                </div>
              </div>
              
              <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                  <li class="page-item "><a class="page-link  text-dark" href="#"><i class="fas fa-backward"></i></a></li>
                  <li class="page-item"><a class="page-link  text-dark" href="#">1</a></li>
                  <li class="page-item"><a class="page-link  text-dark" href="#">2</a></li>
                  <li class="page-item"><a class="page-link  text-dark" href="#">3</a></li>
                  <li class="page-item"><a class="page-link  text-dark" href="#"><i class="fas fa-forward"></i></a></li>
                </ul>
              </nav>
              <!-- /Produtos -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <footer class="page-footer">
    <div class="maincolor">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <p class="text-white text-center">YourSale,um projeto de auto aprendizagem que todos podem apreciar!</p>
            <p class="text-white text-center"> Alguns ícones foram feitos por <a class="text-white"
                href="https://www.flaticon.com/br/autores/freepik" title="Freepik">Freepik</a> Pela <a
                class="text-white" href="https://www.flaticon.com/br/" title="Flaticon">www.flaticon.com</a></p>
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