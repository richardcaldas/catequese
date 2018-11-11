<?php include_once("common/session.php");
include_once('common/connection.php');

//TODO check com email

$sql =  "SELECT * FROM user ";

$query = mysqli_query($connection, $sql);

$row = mysqli_fetch_assoc($query);


?>

<!DOCTYPE html>
<html lang="en">
<?php include 'head.php';?>
<head>
    <!-- Title -->
    <title>Matrícula</title>

</head>

<body>
<main>

    <!-- Breadcrumb -->
    <section class="g-my-30">
        <div class="container">
            <ul class="u-list-inline">
                <li class="list-inline-item g-mr-7">
                    <a class="u-link-v5 g-color-main g-color-primary--hover" href="index.php">Home</a>
                    <i class="fa fa-angle-right g-ml-7"></i>
                </li>
                <li class="list-inline-item g-mr-7 g-color-primary">
                    <a class="u-link-v5 g-color-main g-color-primary--hover">Correção dos dados</a>
                    <i class="fa fa-angle-right g-ml-7"></i>
                </li>
            </ul>
        </div>
    </section>
    <!-- End Breadcrumb -->

    <section class="g-mb-100">
        <div class="container" style="max-width: 1600px">
            <div class="row">
                <?php //include 'menu.php';?>
                <!-- Profle Content -->
                <div class="col-lg-9 offset-3">
                    <!-- Nav tabs -->
                    <ul class="nav nav-justified u-nav-v1-1 u-nav-primary g-brd-bottom--md g-brd-bottom-2 g-brd-primary g-mb-20" role="tablist" data-target="nav-1-1-default-hor-left-underline" data-tabs-mobile-type="slide-up-down" data-btn-classes="btn btn-md btn-block rounded-0 u-btn-outline-primary g-mb-20">
                        <li class="nav-item">
                            <a class="nav-link g-py-10 active" data-toggle="tab" href="#nav-1-1-default-hor-left-underline--1" role="tab">Confirmação dos Dados</a>
                        </li>
                    </ul>
                    <!-- End Nav tabs -->

                    <!-- Tab panes -->
                    <div id="nav-1-1-default-hor-left-underline" class="tab-content">

                        <div class="tab-pane fade show active" id="nav-1-1-default-hor-left-underline--1" role="tabpanel" data-parent="#nav-1-1-default-hor-left-underline">
                            <form method="post" action="<?php $_PHP_SELF ?>">
                                <div class="row">
                                    <div class="form-group col-lg-4">
                                        <label class="" for="nome">Nome</label>
                                        <input required type="text" id="nome" name="nome" class="form-control form-control-md rounded-0" value="<?php echo $row["nome"]?>"/>
                                    </div>

                                    <div class="form-group col-lg-4">
                                        <label class="" for="email">Email</label>
                                        <input required type="email" placeholder="" readonly id="email" name="email" class="form-control form-control-md rounded-0" value="<?php echo $row["email"]?>"/>
                                    </div>

                                    <div class="form-group col-lg-4">
                                        <label class="" for="cpf">CPF</label>
                                        <input required type="text" placeholder="" id="cpf" name="cpf" class="form-control form-control-md rounded-0" value="<?php echo $row["cpf"]?>"/>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label class="" for="senha">Senha</label>
                                        <input required type="password" id="senha" name="senha" class="form-control form-control-md rounded-0" onchange="validatePassword()"/>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="" for="confSenha">Confirmação de Senha</label>
                                        <input required type="password" id="confSenha" name="confSenha" class="form-control form-control-md rounded-0" onkeyup="validatePassword()"/>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-lg-6 offset-6" style="margin-top: 50px; margin-bottom: 50px">
                                        <button type="submit" class="btn btn-lg u-btn-primary g-font-weight-600 g-font-size-13 text-uppercase g-rounded-50 mx-2 g-px-25 g-py-15 pull-right">Continuar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- End Tab panes -->
            </div>
            <!-- End Profle Content -->
        </div>

    </section>

    <?php include 'footer.html';?>

    <script>
        function validatePassword(){
            if(document.getElementById('confSenha').value !== document.getElementById('senha').value) {
                document.getElementById('confSenha').setCustomValidity("As senhas devem ser iguais");
            } else {
                document.getElementById('confSenha').setCustomValidity('');
            }
        }


        $(document).on('ready', function () {
            setActiveMenu();
            $('#cpf').mask('000.000.000-00', {reverse: true});
        });

    </script>

</body>

<?php
include_once('functions/functions.php');
require_once('common/connection.php');

date_default_timezone_set("America/Sao_Paulo");

if (isset($_POST['cpf'])){

    $cpf = getOnlyNumber($_POST['cpf']);
    $name = strtoupper(trim($_POST['nome']));
    $mail = trim($_POST['email']);
    $password = trim($_POST['senha']);

    mysqli_query($connection, "BEGIN");

    $sql = "update user set ";
    $sql .= " email = '".$mail."', nome = '".$name."', cpf = '".$cpf."', password = '".$password."', perfil = 'RESP' ";
    $sql .= " where id = ".$row["id"];
    $queryUser = mysqli_query($connection, $sql);
    $error .= mysqli_error($connection);

    $sweet = "swal({ ";
    $sweet .= "	title: 'Sucesso'," ;
    $sweet .= "	type: 'success',";
    $sweet .= "	closeOnConfirm: true ";
    $sweet .= "}, ";
    $sweet .= "function(){ ";
    $sweet .= "	window.location.href = 'lista-alunos.php'; ";
    $sweet .= "});";

    if ($queryUser != ''){
        mysqli_query($connection, "COMMIT");
        echo '<script type="text/javascript">'.$sweet.'</script>';
    }else{
        mysqli_query($connection, "ROLLBACK");
        if (strpos($error, 'CPF_UNIQUE') !== false){
            $sweet = "swal('Ops!', 'Este CPF já consta em nossa base de dados!', 'error')";
            echo '<script type="text/javascript">'.$sweet.'</script>';
        }else{
            $sweet = "swal('".$sql."', 'error')";
            echo '<script type="text/javascript">'.$sweet.'</script>';
        }
    }
}

?>


</html>
