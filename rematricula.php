<?php include_once("common/session.php");
include_once('common/connection.php');

$sql =  "select c.*, DATE_FORMAT(c.data_nascimento, '%d/%m/%Y') as data_nascimento_formatted, ";
$sql .= "DATE_FORMAT(c.data_batismo, '%d/%m/%Y') as data_batismo_formatted ";
$sql .= "from catequizando c ";
$sql .= "where c.ID = ".$_GET['id'];

$query = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($query);

if (isset($row['id_pai'])){
    $sqlPai =  "select c.* ";
    $sqlPai .= "from responsavel c ";
    $sqlPai .= "where c.ID = " .$row['id_pai'];

    $queryPai = mysqli_query($connection, $sqlPai);
    $rowPai = mysqli_fetch_assoc($queryPai);

}

if (isset($row['id_mae'])){
    $sqlMae =  "select c.* ";
    $sqlMae .= "from responsavel c ";
    $sqlMae .= "where c.ID = " .$row['id_mae'];

    $queryMae = mysqli_query($connection, $sqlMae);
    $rowMae = mysqli_fetch_assoc($queryMae);

}

$sqlTurma =  "select t.* ";
$sqlTurma .= "from catequizando_has_turma c ";
$sqlTurma .= "inner join turma t on t.id = c.turma_id ";
$sqlTurma .= "where c.ativo =1 and c.catequizando_id = ".$_GET['id'];

$queryTurma = mysqli_query($connection, $sqlTurma);
$rowTurma = mysqli_fetch_assoc($queryTurma);


$sqlResponsavel =  "SELECT catequizando.id as id, ";
$sqlResponsavel .= " catequizando.nome as nomeCatequizando, ";
$sqlResponsavel .=	" catequizando.data_nascimento as nascimentoCatequizando," ;
$sqlResponsavel .=	" responsavel.nome as nomeResponsavel," ;
$sqlResponsavel .=	" responsavel.email as emailResponsavel, ";
$sqlResponsavel .=	" responsavel.tel_celular as celularResponsavel, ";
$sqlResponsavel .=	" responsavel.tel_comercial as telefoneResponsavel";
$sqlResponsavel .=	" FROM catequizando" ;
$sqlResponsavel .=	" inner join responsavel on responsavel.id = catequizando.responsavel ";

if ($_SESSION["perfil"] == "RESP") {
    $sqlResponsavel .= "where catequizando.responsavel = ". $_SESSION["idResponsavel"];
}

$queryResponsavel = mysqli_query($connection, $sqlResponsavel);

$rowResponsavel = mysqli_fetch_assoc($queryResponsavel);

?>


<!DOCTYPE html>
<html lang="en">
<?php include 'head.php';?>
<head>
    <!-- Title -->
    <title>Confirmação de dados da Reinscrição</title>

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
                    <a class="u-link-v5 g-color-main g-color-primary--hover" href="rematricula.php?id=<?php echo $_GET['id']?>">Reinscrição</a>
                    <i class="fa fa-angle-right g-ml-7"></i>
                </li>
            </ul>
        </div>
    </section>
    <!-- End Breadcrumb -->

    <section class="g-mb-100">
        <div class="container" style="max-width: 1600px">
            <div class="row">
                <?php /*include 'menu.php';*/?>

                <!-- Profle Content -->
                <div class="col-lg-9 offset-3">
                    <!-- Nav tabs -->
                    <ul class="nav nav-justified u-nav-v1-1 u-nav-primary g-brd-bottom--md g-brd-bottom-2 g-brd-primary g-mb-20" role="tablist" data-target="nav-1-1-default-hor-left-underline" data-tabs-mobile-type="slide-up-down" data-btn-classes="btn btn-md btn-block rounded-0 u-btn-outline-primary g-mb-20">
                        <li class="nav-item">
                            <a class="nav-link g-py-10 active" data-toggle="tab" role="tab">Confirmação de dados da Reinscrição</a>
                        </li>
                    </ul>
                    <!-- End Nav tabs -->

                    <!-- Tab panes -->
                    <div id="nav-1-1-default-hor-left-underline" class="tab-content">
                        <!-- Edit Profile -->
                        <div class="tab-pane fade show active" id="nav-1-1-default-hor-left-underline--1" role="tabpanel" data-parent="#nav-1-1-default-hor-left-underline">
                            <h2 class="h4 g-font-weight-300">Exibindo os dados de matrícula do aluno: <strong><?php echo $row["nome"] ?></strong></h2>
                            <p>Por favor verifique se os dados abaixo estão corretos.</p>
                                <form method="post" action="<?php $_PHP_SELF?>">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label class="d-block d-md-inline-block g-color-gray-dark-v2 g-pr-10" for="nome"><b>Nome</b></label>
                                            <input id="nome" name="nome" class="form-control form-control-md rounded-0" value="<?php echo $row["nome"] ?>">
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="d-block d-md-inline-block g-color-gray-dark-v2 g-pr-10" for="turma"><b>Turma</b></label>
                                            <input id="turma" name="turma" class="form-control form-control-md rounded-0" value="<?php echo $rowTurma["nome"] ?>">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 mt-2 mb-2">
                                            <label class="d-block d-md-inline-block g-color-gray-dark-v2 g-pr-10" for="horario"><b>Horario</b></label>
                                            <input id="horario" name="horario" class="form-control form-control-md rounded-0" value="<?php
                                            switch ($rowTurma["dia_semana"]){
                                                case 1:
                                                    echo "Domingo"." - ".$rowTurma["horario"];
                                                    break;
                                                case 2:
                                                    echo "Segunda"." - ".$rowTurma["horario"];
                                                    break;
                                                case 3:
                                                    echo "Terça"." - ".$rowTurma["horario"];
                                                    break;
                                                case 4:
                                                    echo "Quarta"." - ".$rowTurma["horario"];
                                                    break;
                                                case 5:
                                                    echo "Quinta"." - ".$rowTurma["horario"];
                                                    break;
                                                case 6:
                                                    echo "Sexta"." - ".$rowTurma["horario"];
                                                    break;
                                                case 7:
                                                    echo "Sábado"." - ".$rowTurma["horario"];
                                                    break;
                                                default:
                                                    echo "Horario Inválido";
                                                    break;
                                            }
                                            ?>"></input>
                                        </div>
                                        <div class="col-lg-6 mt-2 mb-2">
                                            <label class="d-block d-md-inline-block g-color-gray-dark-v2 g-pr-10" for="nascimento"><b>Data de Nascimento</b></label>
                                            <input id="nascimento" name="nascimento" class="form-control form-control-md rounded-0" value="<?php echo $row["data_nascimento_formatted"] ?>"></input>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 mt-2 mb-2">
                                            <label class="d-block d-md-inline-block g-color-gray-dark-v2 g-pr-10" for="nomePai"><b>Nome do Pai</b></label>
                                            <input id="nomePai" name="nomePai" class="form-control form-control-md rounded-0" value="<?php echo $rowPai["nome"] ?>"></input>
                                        </div>
                                        <div class="col-lg-6 mt-2 mb-2">
                                            <label class="d-block d-md-inline-block g-color-gray-dark-v2 g-pr-10" for="nomeMae"><b>Nome da Mãe</b></label>
                                            <input id="nomeMae" name="nomeMae" class="form-control form-control-md rounded-0" value="<?php echo $rowMae["nome"] ?>"></input>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 mt-2 mb-2">
                                            <label class="d-block d-md-inline-block g-color-gray-dark-v2 g-pr-10" for="email"><b>Email do Responsável</b></label>
                                            <input id="email" name="email" class="form-control form-control-md rounded-0" value="<?php echo $rowResponsavel["emailResponsavel"] ?>"></input>
                                        </div>
                                        <div class="col-lg-6 mt-2 mb-2">
                                            <label class="d-block d-md-inline-block g-color-gray-dark-v2 g-pr-10" for="telefone"><b>Telefone do Responsável</b></label>
                                            <input id="telefone" name="telefone" class="form-control form-control-md rounded-0" value="<?php echo $rowResponsavel["telefoneResponsavel"] ?>"></input>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 mt-2 mb-2">
                                            <label class="d-block d-md-inline-block g-color-gray-dark-v2 g-pr-10" for="celular"><b>Telefone Celular do Responsável</b></label>
                                            <input id="celular" name="celular"  class="form-control form-control-md rounded-0" value="<?php echo $rowResponsavel["celularResponsavel"] ?>"></input>
                                        </div>
                                        <div class="col-lg-6 mt-2 mb-2">
                                            <label class="d-block d-md-inline-block g-color-gray-dark-v2 g-pr-10" for="endereco"><b>Endereço</b></label>
                                            <input id="endereco" name="endereco" class="form-control form-control-md rounded-0" value="<?php echo $row["endereco"] ?>"></input>
                                        </div>
                                    </div>

                                    <div class="text-sm-right">
                                        <button type="submit" class="btn btn-lg u-btn-primary g-font-weight-600 g-font-size-13 text-uppercase g-rounded-50 mx-2 g-px-25 g-py-15 pull-right">Confirmar Matricula</button>
                                    </div>

                            </div>
                        </form>
                        <!-- End Edit Profile -->
                    </div>
                    <!-- End Tab panes -->
                </div>
                <!-- End Profle Content -->
            </div>
        </div>
    </section>

    <?php include 'footer.html';?>

    <script>
        $(document).on('ready', function () {
            setActiveMenu();
        });
    </script>

</body>

<?php
include_once('functions/functions.php');
require_once('common/connection.php');

date_default_timezone_set("America/Sao_Paulo");


// todo arrumar o submit do form

if (false &&  isset($_POST['nome'])){

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
    $sweet .= "	window.location.href = 'view-catequizando.php?id=".$row["id"]."''; ";
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
