<?php include_once("common/session.php");
include_once('common/connection.php');

//todo fazer os placeholders das datas aparecerem corretamente (no projeto inteiro tem esse problema)

$sql = "select * from catequizando where id = ".$_GET["id"];

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
                    <a class="u-link-v5 g-color-main g-color-primary--hover" href="lista-alunos.php">Lista de Alunos</a>
                    <i class="fa fa-angle-right g-ml-7"></i>
                </li>
                <li class="list-inline-item g-mr-7 g-color-primary">
                    <a class="u-link-v5 g-color-main g-color-primary--hover" href="matricula.php">Matrícula</a>
                    <i class="fa fa-angle-right g-ml-7"></i>
                </li>
            </ul>
        </div>
    </section>
    <!-- End Breadcrumb -->

    <section class="g-mb-100">
        <div class="container" style="max-width: 1600px">
            <div class="row">
                <?php include 'menu.php';?>

                <!-- Profle Content -->
                <div class="col-lg-9">
                    <!-- Nav tabs -->
                    <ul class="nav nav-justified u-nav-v1-1 u-nav-primary g-brd-bottom--md g-brd-bottom-2 g-brd-primary g-mb-20" role="tablist" data-target="nav-1-1-default-hor-left-underline" data-tabs-mobile-type="slide-up-down" data-btn-classes="btn btn-md btn-block rounded-0 u-btn-outline-primary g-mb-20">
                        <li class="nav-item">
                            <a class="nav-link g-py-10 active" data-toggle="tab" href="#nav-1-1-default-hor-left-underline--1" role="tab">Matrícula</a>
                        </li>


                    </ul>
                    <!-- End Nav tabs -->

                    <!-- Tab panes -->
                    <div id="nav-1-1-default-hor-left-underline" class="tab-content">

                        <div class="tab-pane fade show active" id="nav-1-1-default-hor-left-underline--1" role="tabpanel" data-parent="#nav-1-1-default-hor-left-underline">
                            <form method="post" action="<?php $_PHP_SELF ?>">
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label class="" for="nome">Nome</label>
                                        <input required type="text" id="nome" name="nome" class="form-control form-control-md rounded-0" value="<?php echo $row["nome"]; ?>"/>
                                    </div>

                                    <div class="form-group col-lg-6">
                                        <label class="" for="dataNascimento">Data de Nascimento</label>
                                        <input required type="date" placeholder="dd/mm/aaaa" id="dataNascimento"  name="dataNascimento" class="form-control form-control-md rounded-0" value="<?php echo $row["data_nascimento"]; ?>"/>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="form-group col-lg-6">
                                        <label class="" for="celular">Celular</label>
                                        <input required type="text" id="celular" name="celular" class="form-control form-control-md rounded-0" value="<?php echo $row["tel_celular"]; ?>"/>
                                    </div>

                                    <div class="form-group col-lg-6">
                                        <label class="" for="email">Email</label>
                                        <input required type="text" id="email"  name="email" class="form-control form-control-md rounded-0" value="<?php echo $row["email"]; ?>"/>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label class="" for="cidadeNatal">Cidade Natal</label>
                                        <input required type="text" id="cidadeNatal" name="cidadeNatal" class="form-control form-control-md rounded-0" value="<?php echo $row["cidade_natal"]; ?>"/>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="" for="estadoNatal">Estado Natal</label>
                                        <input required type="text" id="estadoNatal" name="estadoNatal" class="form-control form-control-md rounded-0" value="<?php echo $row["estado_natal"]; ?>"/>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-lg-4">
                                        <label class="" for="endereco">Endereço</label>
                                        <input required type="text"  id="endereco" name="endereco" class="form-control form-control-md rounded-0" value="<?php echo $row["endereco"]; ?>"/>
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <label class="" for="bairro">Bairro</label>
                                        <input required type="text" id="bairro" name="bairro" class="form-control form-control-md rounded-0" value="<?php echo $row["bairro"]; ?>"/>
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <label class="" for="cep">Cep</label>
                                        <input required type="text" id="cep" name="cep" class="form-control form-control-md rounded-0" value="<?php echo $row["cep"]; ?>"/>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label class="" for="cidade">Cidade</label>
                                        <input required type="text" id="cidade" name="cidade" class="form-control form-control-md rounded-0" value="<?php echo $row["cidade"]; ?>"/>
                                    </div>

                                    <div class="form-group col-lg-6">
                                        <label class="" for="estado">Estado</label>
                                        <input required type="text" id="estado" name="estado" class="form-control form-control-md rounded-0" value="<?php echo $row["estado"]; ?>"/>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="form-group col-lg-4">
                                        <label class="" for="escola">Escola</label>
                                        <input required type="text" id="escola" name="escola" class="form-control form-control-md rounded-0" value="<?php echo $row["escola"]; ?>"/>
                                    </div>

                                    <div class="form-group col-lg-4">
                                        <label class="" for="anoCurso">Ano do Curso</label>
                                        <input required type="text" id="anoCurso" name="anoCurso" class="form-control form-control-md rounded-0" value="<?php echo $row["ano_curso"]; ?>"/>
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <label class="" for="periodo">Periodo do Curso</label>
                                        <input required type="text" id="periodo" name="periodo" class="form-control form-control-md rounded-0" value="<?php echo $row["periodo"]; ?>"/>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label class="" for="isBatizado">É batizado?</label>
                                        <input required type="text" id="isBatizado" name="isBatizado" class="form-control form-control-md rounded-0" value="<?php echo $row["is_batizado"]; ?>"/>
                                    </div>

                                    <div class="form-group col-lg-6">
                                        <label class="" for="dataBatismo">Data do Batismo</label>
                                        <input required type="date" placeholder="dd/mm/aaaa" id="dataBatismo" name="dataBatismo" class="form-control form-control-md rounded-0" value="<?php echo $row["data_batismo"]; ?>"/>
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="form-group col-lg-4">
                                        <label class="" for="paroquiaBatismo">Paróquia de Batismo</label>
                                        <input required type="text" id="paroquiaBatismo" name="paroquiaBatismo" class="form-control form-control-md rounded-0" value="<?php echo $row["paroquia_batismo"]; ?>"/>
                                    </div>

                                    <div class="form-group col-lg-4">
                                        <label class="" for="cidadeParoquia">Cidade da Paróquia de Batismo</label>
                                        <input required type="text" id="cidadeParoquia" name="cidadeParoquia" class="form-control form-control-md rounded-0" value="<?php echo $row["cidade_paroquia"]; ?>"/>
                                    </div>

                                    <div class="form-group col-lg-4">
                                        <label class="" for="estadoParoquia">Estado da Paróquia de Batismo</label>
                                        <input required type="text" id="estadoParoquia" name="estadoParoquia" class="form-control form-control-md rounded-0" value="<?php echo $row["estado_paroquia"]; ?>"/>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="form-group col-lg-4">
                                        <label class="" for="certidao">Certidão de Nascimento</label>
                                        <input required type="file" id="certidao" name="certidao" class="form-control-file form-control-md rounded-0" value="<?php echo $row["file_certidao_nascimento"];?>"/>
                                    </div>

                                    <div class="form-group col-lg-4">
                                        <label class="" for="dataConfissao">Data da Confissao</label>
                                        <input required type="date" id="dataConfissao" name="dataConfissao" class="form-control form-control-md rounded-0" value="<?php echo $row["sacramento_confissao"]; ?>"/>
                                    </div>

                                    <div class="form-group col-lg-4">
                                        <label class="" for="dataEucaristia">Data da Primeira Eucaristia</label>
                                        <input required type="date" id="dataEucaristia" name="dataEucaristia" class="form-control form-control-md rounded-0" value="<?php echo $row["sacramento_eucaristia"]; ?>"/>
                                    </div>
                                </div>

                                <div class="row" >
                                    <div class="form-group col-lg-6 offset-6" >
                                        <button type="submit" class="btn btn-lg u-btn-primary g-font-weight-600 g-font-size-13 text-uppercase g-rounded-50 mx-2 g-px-25 g-py-15 pull-right">Confirmar</button>
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

if (false && isset($_POST['nome'])){

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
