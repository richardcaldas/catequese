<?php include_once("common/start_session.php"); ?>
<?php 
  require_once('common/connection.php');
  
  if(isset ($_SESSION["idResponsavel"])){
    header('location:rematricula.php'); 
  }
  
  $logged=false;
  if(isset($_POST["email"])){
    $url = "rematricula.php";
    if (!empty($_POST["path"])) {
      $url = $_POST["path"];
    }

    // Monta uma consulta SQL (query) para procurar um usuário
    //$sql = "SELECT u.id, u.cpf, perfil, c.id as `idCliente`, c.nome as `nomeCliente`, c.email as `mailCliente` FROM `user` u left join clientes c on c.CPF = u.cpf where u.cpf = '".$_POST["cpf"]."' and password = '".$_POST["password"]."'";
    //$query = mysqli_query($connection, $sql);
    
    //if (mysqli_num_rows($query) > 0){
      //$result = mysqli_fetch_assoc($query);
      $logged=true;
      $_SESSION["idResponsavel"] = "1"; //$result["id"];
      //if ($result["nomeCliente"] != null){
      // $_SESSION['nomeUserLogged'] = $result["nomeCliente"];   
      //}else{
      //  $_SESSION['nomeUserLogged'] = $result["cpf"]; 
      //}
      $_SESSION["profileLogged"] = "Admin";//$result["perfil"]; 
      $_SESSION["nomeResponsavel"] = "Victor";//$result["mailCliente"]; 
      header('location:'.$url); 
    //}
     
    
  } 
  
  
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'head.html';?>
<head>
  <!-- Title -->
  <title>Catequese São Dimas - Login Page </title>
</head>

<body>
  <main>
    <!-- Login -->
    <section class="g-height-100vh d-flex align-items-center g-bg-size-cover g-bg-pos-top-center" style="background-image: url(assets/home.jpg);">
      <div class="container g-py-100 g-pos-rel g-z-index-1">
        <div class="row justify-content-center">
          <div class="col-sm-8 col-lg-5">
            <div class="g-bg-white rounded g-py-40 g-px-30">
              <header class="text-center mb-4">
                <h2 class="h2 g-color-black g-font-weight-600">Catequese São Dimas</h2>
                <h2 class="h2 g-color-black g-font-weight-600">Login</h2>
              </header>

              <!-- Form -->
              <form class="g-py-15" method="post" action="<?php $_PHP_SELF ?>">
                <div class="mb-4">
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15" type="email" placeholder="Email" name="email">
                </div>

                <div class="g-mb-35">
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15 mb-3" type="password" placeholder="Senha">
                  <div class="row justify-content-between">
                    <div class="col align-self-center text-right">
                      <a class="g-font-size-12" href="#!">Esqueceu sua senha?</a>
                    </div>
                  </div>
                </div>

                <div class="mb-4">
                  <button class="btn btn-md btn-block u-btn-primary rounded g-py-13" type="submit">Entrar</button>
                </div>
              </form>
              <footer class="text-center">
                <p class="g-color-gray-dark-v5 g-font-size-13 mb-0">Ainda não é membro? <a class="g-font-weight-600" href="cadastro.html">Cadastre-se</a>
                </p>
              </footer>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

</body>

</html>
