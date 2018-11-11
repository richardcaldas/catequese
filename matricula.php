<?php include_once("common/session.php");
include_once('common/connection.php');


if (isset($_GET["id"])) {
    $sql = "select * from catequizando where id = " . $_GET["id"];

    $query = mysqli_query($connection, $sql);

    $row = mysqli_fetch_assoc($query);
}
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
                                        <input required type="text" id="dataNascimento"  name="dataNascimento" class="form-control form-control-md rounded-0" value="<?php echo DateTime::createFromFormat('Y-m-d h:i:s', $row["data_nascimento"])->format('d/m/Y'); ?>"/>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="form-group col-lg-6">
                                        <label class="" for="celular">Celular (DDD + Celular)</label>
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
                                        <select id="estadoNatal" name="estadoNatal" class="form-control form-control-md rounded-0" required">
                                            <option value="AC" <?php echo $row["estado_natal"] == "AC" ? "selected" : ""; ?>>Acre</option>
                                            <option value="AL" <?php echo $row["estado_natal"] == "AL" ? "selected" : ""; ?>>Alagoas</option>
                                            <option value="AP" <?php echo $row["estado_natal"] == "AP" ? "selected" : ""; ?>>Amapá</option>
                                            <option value="AM" <?php echo $row["estado_natal"] == "AM" ? "selected" : ""; ?>>Amazonas</option>
                                            <option value="BA" <?php echo $row["estado_natal"] == "BA" ? "selected" : ""; ?>>Bahia</option>
                                            <option value="CE" <?php echo $row["estado_natal"] == "CE" ? "selected" : ""; ?>>Ceará</option>
                                            <option value="DF" <?php echo $row["estado_natal"] == "DF" ? "selected" : ""; ?>>Distrito Federal</option>
                                            <option value="ES" <?php echo $row["estado_natal"] == "ES" ? "selected" : ""; ?>>Espírito Santo</option>
                                            <option value="GO" <?php echo $row["estado_natal"] == "GO" ? "selected" : ""; ?>>Goiás</option>
                                            <option value="MA" <?php echo $row["estado_natal"] == "MA" ? "selected" : ""; ?>>Maranhão</option>
                                            <option value="MT" <?php echo $row["estado_natal"] == "MT" ? "selected" : ""; ?>>Mato Grosso</option>
                                            <option value="MS" <?php echo $row["estado_natal"] == "MS" ? "selected" : ""; ?>>Mato Grosso do Sul</option>
                                            <option value="MG" <?php echo $row["estado_natal"] == "MG" ? "selected" : ""; ?>>Minas Gerais</option>
                                            <option value="PA" <?php echo $row["estado_natal"] == "PA" ? "selected" : ""; ?>>Pará</option>
                                            <option value="PB" <?php echo $row["estado_natal"] == "PB" ? "selected" : ""; ?>>Paraíba</option>
                                            <option value="PR" <?php echo $row["estado_natal"] == "PR" ? "selected" : ""; ?>>Paraná</option>
                                            <option value="PE" <?php echo $row["estado_natal"] == "PE" ? "selected" : ""; ?>>Pernambuco</option>
                                            <option value="PI" <?php echo $row["estado_natal"] == "PI" ? "selected" : ""; ?>>Piauí</option>
                                            <option value="RJ" <?php echo $row["estado_natal"] == "RJ" ? "selected" : ""; ?>>Rio de Janeiro</option>
                                            <option value="RN" <?php echo $row["estado_natal"] == "RN" ? "selected" : ""; ?>>Rio Grande do Norte</option>
                                            <option value="RS" <?php echo $row["estado_natal"] == "RS" ? "selected" : ""; ?>>Rio Grande do Sul</option>
                                            <option value="RO" <?php echo $row["estado_natal"] == "RO" ? "selected" : ""; ?>>Rondônia</option>
                                            <option value="RR" <?php echo $row["estado_natal"] == "RR" ? "selected" : ""; ?>>Roraima</option>
                                            <option value="SC" <?php echo $row["estado_natal"] == "SC" ? "selected" : ""; ?>>Santa Catarina</option>
                                            <option value="SP" <?php echo $row["estado_natal"] == "SP" ? "selected" : ""; ?>>São Paulo</option>
                                            <option value="SE" <?php echo $row["estado_natal"] == "SE" ? "selected" : ""; ?>>Sergipe</option>
                                            <option value="TO" <?php echo $row["estado_natal"] == "TO" ? "selected" : ""; ?>>Tocantins</option>
                                        </select>
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
                                        <select id="estado" name="estado" class="form-control form-control-md rounded-0" required>
                                            <option value="AC" <?php echo $row["estado"] == "AC" ? "selected" : ""; ?>>Acre</option>
                                            <option value="AL" <?php echo $row["estado"] == "AL" ? "selected" : ""; ?>>Alagoas</option>
                                            <option value="AP" <?php echo $row["estado"] == "AP" ? "selected" : ""; ?>>Amapá</option>
                                            <option value="AM" <?php echo $row["estado"] == "AM" ? "selected" : ""; ?>>Amazonas</option>
                                            <option value="BA" <?php echo $row["estado"] == "BA" ? "selected" : ""; ?>>Bahia</option>
                                            <option value="CE" <?php echo $row["estado"] == "CE" ? "selected" : ""; ?>>Ceará</option>
                                            <option value="DF" <?php echo $row["estado"] == "DF" ? "selected" : ""; ?>>Distrito Federal</option>
                                            <option value="ES" <?php echo $row["estado"] == "ES" ? "selected" : ""; ?>>Espírito Santo</option>
                                            <option value="GO" <?php echo $row["estado"] == "GO" ? "selected" : ""; ?>>Goiás</option>
                                            <option value="MA" <?php echo $row["estado"] == "MA" ? "selected" : ""; ?>>Maranhão</option>
                                            <option value="MT" <?php echo $row["estado"] == "MT" ? "selected" : ""; ?>>Mato Grosso</option>
                                            <option value="MS" <?php echo $row["estado"] == "MS" ? "selected" : ""; ?>>Mato Grosso do Sul</option>
                                            <option value="MG" <?php echo $row["estado"] == "MG" ? "selected" : ""; ?>>Minas Gerais</option>
                                            <option value="PA" <?php echo $row["estado"] == "PA" ? "selected" : ""; ?>>Pará</option>
                                            <option value="PB" <?php echo $row["estado"] == "PB" ? "selected" : ""; ?>>Paraíba</option>
                                            <option value="PR" <?php echo $row["estado"] == "PR" ? "selected" : ""; ?>>Paraná</option>
                                            <option value="PE" <?php echo $row["estado"] == "PE" ? "selected" : ""; ?>>Pernambuco</option>
                                            <option value="PI" <?php echo $row["estado"] == "PI" ? "selected" : ""; ?>>Piauí</option>
                                            <option value="RJ" <?php echo $row["estado"] == "RJ" ? "selected" : ""; ?>>Rio de Janeiro</option>
                                            <option value="RN" <?php echo $row["estado"] == "RN" ? "selected" : ""; ?>>Rio Grande do Norte</option>
                                            <option value="RS" <?php echo $row["estado"] == "RS" ? "selected" : ""; ?>>Rio Grande do Sul</option>
                                            <option value="RO" <?php echo $row["estado"] == "RO" ? "selected" : ""; ?>>Rondônia</option>
                                            <option value="RR" <?php echo $row["estado"] == "RR" ? "selected" : ""; ?>>Roraima</option>
                                            <option value="SC" <?php echo $row["estado"] == "SC" ? "selected" : ""; ?>>Santa Catarina</option>
                                            <option value="SP" <?php echo $row["estado"] == "SP" ? "selected" : ""; ?>>São Paulo</option>
                                            <option value="SE" <?php echo $row["estado"] == "SE" ? "selected" : ""; ?>>Sergipe</option>
                                            <option value="TO" <?php echo $row["estado"] == "TO" ? "selected" : ""; ?>>Tocantins</option>
                                        </select>

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
                                        <div class="row form-check">
                                            <label for="isBatizado">É batizado?</label>
                                        </div>
                                        <div class="row form-check" style=" vertical-align: middle; text-align: center;">
                                            <div class="pretty p-icon p-smooth" style="font-size: 25px;">
                                                <input type="checkbox" id="isBatizado" <?php echo $row["is_batizado"] ? "checked" : ""; ?>/>
                                                <div class="state p-success">
                                                    <i class="icon fas  fa-3x fa-check"></i>
                                                    <label></label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-group col-lg-6">
                                        <label class="" for="dataBatismo">Data do Batismo</label>
                                        <input required type="text" id="dataBatismo" name="dataBatismo" class="form-control form-control-md rounded-0" value="<?php echo DateTime::createFromFormat('Y-m-d h:i:s', $row["data_batismo"])->format('d/m/Y'); ?>"/>
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
                                        <select id="estadoParoquia" name="estadoParoquia" class="form-control form-control-md rounded-0" required >
                                            <option value="AC" <?php echo $row["estado_paroquia"] == "AC" ? "selected" : ""; ?>>Acre</option>
                                            <option value="AL" <?php echo $row["estado_paroquia"] == "AL" ? "selected" : ""; ?>>Alagoas</option>
                                            <option value="AP" <?php echo $row["estado_paroquia"] == "AP" ? "selected" : ""; ?>>Amapá</option>
                                            <option value="AM" <?php echo $row["estado_paroquia"] == "AM" ? "selected" : ""; ?>>Amazonas</option>
                                            <option value="BA" <?php echo $row["estado_paroquia"] == "BA" ? "selected" : ""; ?>>Bahia</option>
                                            <option value="CE" <?php echo $row["estado_paroquia"] == "CE" ? "selected" : ""; ?>>Ceará</option>
                                            <option value="DF" <?php echo $row["estado_paroquia"] == "DF" ? "selected" : ""; ?>>Distrito Federal</option>
                                            <option value="ES" <?php echo $row["estado_paroquia"] == "ES" ? "selected" : ""; ?>>Espírito Santo</option>
                                            <option value="GO" <?php echo $row["estado_paroquia"] == "GO" ? "selected" : ""; ?>>Goiás</option>
                                            <option value="MA" <?php echo $row["estado_paroquia"] == "MA" ? "selected" : ""; ?>>Maranhão</option>
                                            <option value="MT" <?php echo $row["estado_paroquia"] == "MT" ? "selected" : ""; ?>>Mato Grosso</option>
                                            <option value="MS" <?php echo $row["estado_paroquia"] == "MS" ? "selected" : ""; ?>>Mato Grosso do Sul</option>
                                            <option value="MG" <?php echo $row["estado_paroquia"] == "MG" ? "selected" : ""; ?>>Minas Gerais</option>
                                            <option value="PA" <?php echo $row["estado_paroquia"] == "PA" ? "selected" : ""; ?>>Pará</option>
                                            <option value="PB" <?php echo $row["estado_paroquia"] == "PB" ? "selected" : ""; ?>>Paraíba</option>
                                            <option value="PR" <?php echo $row["estado_paroquia"] == "PR" ? "selected" : ""; ?>>Paraná</option>
                                            <option value="PE" <?php echo $row["estado_paroquia"] == "PE" ? "selected" : ""; ?>>Pernambuco</option>
                                            <option value="PI" <?php echo $row["estado_paroquia"] == "PI" ? "selected" : ""; ?>>Piauí</option>
                                            <option value="RJ" <?php echo $row["estado_paroquia"] == "RJ" ? "selected" : ""; ?>>Rio de Janeiro</option>
                                            <option value="RN" <?php echo $row["estado_paroquia"] == "RN" ? "selected" : ""; ?>>Rio Grande do Norte</option>
                                            <option value="RS" <?php echo $row["estado_paroquia"] == "RS" ? "selected" : ""; ?>>Rio Grande do Sul</option>
                                            <option value="RO" <?php echo $row["estado_paroquia"] == "RO" ? "selected" : ""; ?>>Rondônia</option>
                                            <option value="RR" <?php echo $row["estado_paroquia"] == "RR" ? "selected" : ""; ?>>Roraima</option>
                                            <option value="SC" <?php echo $row["estado_paroquia"] == "SC" ? "selected" : ""; ?>>Santa Catarina</option>
                                            <option value="SP" <?php echo $row["estado_paroquia"] == "SP" ? "selected" : ""; ?>>São Paulo</option>
                                            <option value="SE" <?php echo $row["estado_paroquia"] == "SE" ? "selected" : ""; ?>>Sergipe</option>
                                            <option value="TO" <?php echo $row["estado_paroquia"] == "TO" ? "selected" : ""; ?>>Tocantins</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="row">
<!--                                <div class="form-group col-lg-4">
                                        <label class="" for="certidao">Certidão de Nascimento</label>
                                        <input required type="file" id="certidao" name="certidao" class="form-control-file form-control-md rounded-0" value="<?php /*echo $row["file_certidao_nascimento"];*/?>"/>
                                    </div>-->

                                    <div class="form-group col-lg-6">
                                        <label class="" for="dataConfissao">Data da Confissão</label>
                                        <input required type="text" id="dataConfissao" name="dataConfissao" class="form-control form-control-md rounded-0" value="<?php echo DateTime::createFromFormat('Y-m-d h:i:s', $row["sacramento_confissao"])->format('d/m/Y'); ?>"/>
                                    </div>

                                    <div class="form-group col-lg-6">
                                        <label class="" for="dataEucaristia">Data da Primeira Eucaristia</label>
                                        <input required type="text" id="dataEucaristia" name="dataEucaristia" class="form-control form-control-md rounded-0" value="<?php echo DateTime::createFromFormat('Y-m-d h:i:s', $row["sacramento_eucaristia"])->format('d/m/Y'); ?>"/>
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

            $('#celular').mask('(00) 0 0000-0000');
            $('#cep').mask('00000 - 000');

            $('#dataNascimento').datepicker({
                format: 'dd/mm/yyyy',
                date: <?php echo "'".DateTime::createFromFormat('Y-m-d h:i:s', $row["data_nascimento"])->format('d/m/Y')."'"; ?>,
                language: 'pt-BR'
            });

            $('#dataBatismo').datepicker({
                format: 'dd/mm/yyyy',
                date: <?php echo "'".DateTime::createFromFormat('Y-m-d h:i:s', $row["data_batismo"])->format('d/m/Y')."'"; ?>,
                language: 'pt-BR'
            });

            $('#dataConfissao').datepicker({
                format: 'dd/mm/yyyy',
                date: <?php echo "'".DateTime::createFromFormat('Y-m-d h:i:s', $row["sacramento_confissao"])->format('d/m/Y')."'"; ?>,
                language: 'pt-BR'
            });

            $('#dataEucaristia').datepicker({
                format: 'dd/mm/yyyy',
                date: <?php echo "'".DateTime::createFromFormat('Y-m-d h:i:s', $row["sacramento_eucaristia"])->format('d/m/Y')."'"; ?>,
                language: 'pt-BR'
            });

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
