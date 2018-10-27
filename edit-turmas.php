<?php include_once("common/session.php");
include_once('common/connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'head.php';?>
<head>
    <!-- Title -->
    <title>Criação de Turma</title>

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
                    <a class="u-link-v5 g-color-main g-color-primary--hover" href="lista-turmas.php">Lista de Turmas</a>
                    <i class="fa fa-angle-right g-ml-7"></i>
                </li>
                <li class="list-inline-item g-mr-7 g-color-primary">
                    <a class="u-link-v5 g-color-main g-color-primary--hover" href="">Criação de Turma</a>
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
                            <a class="nav-link g-py-10 active" data-toggle="tab" href="#nav-1-1-default-hor-left-underline--1" role="tab">Criação de turmas</a>
                        </li>


                    </ul>
                    <!-- End Nav tabs -->

                    <!-- Tab panes -->
                    <div id="nav-1-1-default-hor-left-underline" class="tab-content">

                        <div class="tab-pane fade show active" id="nav-1-1-default-hor-left-underline--1" role="tabpanel" data-parent="#nav-1-1-default-hor-left-underline">


                            <div class="row">
                                <label class="u-check g-pl-15">
                                    <input class="g-hidden-xs-up " type="checkbox" checked="">
                                    <span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked rounded-0">Ativar Turma</span>
                                </label>
                            </div>

                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label class="" for="nome">Nome</label>
                                    <input type="text" id="nome" class="form-control form-control-md rounded-0"/>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label class="" for="numeroDaTurma">Número da Turma</label>
                                    <input type="number" min="1" max="2500" placeholder="Entre com o número da turma" id="numeroDaTurma" class="form-control form-control-md rounded-0"/>
                                </div>

                            </div>

                            <div class="row">
                                <div class="form-group col-lg-4">
                                    <label class="" for="ano">Ano</label>
                                    <input type="number" min="1900" max="2500" value="<?php echo date("Y"); ?>" id="ano" class="form-control form-control-md rounded-0"/>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label class="" for="etapa">Etapa</label>
                                    <input type="number"  min="1" max="3" id="etapa" class="form-control form-control-md rounded-0"/>
                                </div>

                                <div class="form-group col-lg-4">
                                    <label class="" for="modulo">Modulo</label>
                                    <input type="number"  min="1" max="3" id="modulo" class="form-control form-control-md rounded-0"/>
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-lg-4">
                                    <label class="" for="diaDaSemana">Dia da Semana</label>
                                    <select  id="diaDaSemana" class="form-control form-control-md rounded-0 ">
                                        <option value="2" >Segunda-feira</option>
                                        <option value="3">Terça-feira</option>
                                        <option value="4">Quarta-feira</option>
                                        <option value="5">Quinta-feira</option>
                                        <option value="6">Sexta-eira</option>
                                        <option value="7">Sábado</option>
                                        <option value="1">Domingo</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label class="" for="turno">Período</label>
                                    <select  id="turno" class="form-control form-control-md rounded-0 ">
                                        <option value="1" >Manhã</option>
                                        <option value="2">Tarde</option>
                                        <option value="3">Noite</option>
                                    </select>
                                </div>

                                <div class="form-group col-lg-4">
                                    <label class="" for="horario">Horario</label>
                                    <input type="datetime-local" id="horario" class="form-control form-control-md rounded-0"/>
                                </div>

                            </div>
                            <div class="row">

                                <div class="form-group col-lg-4">
                                    <label class="" for="sala">Sala</label>
                                    <input type="text" id="sala" class="form-control form-control-md rounded-0"/>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label class="" for="catequistas">Catequistas</label>
                                    <input type="text" id="catequistas" class="form-control form-control-md rounded-0"/>
                                </div>
                            </div>

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

</html>
