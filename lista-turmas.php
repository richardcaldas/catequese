<?php include_once("common/session.php");
include_once('common/connection.php');
?>


<!DOCTYPE html>
<html lang="en">
<?php include 'head.html';?>
<head>
    <!-- Title -->
    <title>Visualização de Turmas</title>

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
                    <a class="u-link-v5 g-color-main g-color-primary--hover" href="lista-turmas.php">Turmas</a>
                    <i class="fa fa-angle-right g-ml-7"></i>
                </li>
            </ul>
        </div>
    </section>
    <!-- End Breadcrumb -->

    <section class="g-mb-100">
        <div class="container" style="max-width: 1500px">
            <div class="row">
                <div class="col-lg-3">
                    <div class="list-group list-group-border-0 g-mb-40">

                        <a href="index.php" class="list-group-item list-group-item-action justify-content-between">
                            <span><i class="icon-home g-pos-rel g-top-1 g-mr-8"></i> Home</span>
                            <!--  <span class="u-label g-font-size-11 g-bg-gray-dark-v2 g-rounded-20 g-px-10">2</span>-->
                        </a>

                        <a href="rematricula.php" class="list-group-item list-group-item-action justify-content-between">
                            <span><i class="icon-notebook g-pos-rel g-top-1 g-mr-8"></i> Rematricula</span>
                        </a>

                        <a href="lista-turmas.php" class="list-group-item list-group-item-action justify-content-between active">
                            <span><i class="icon-notebook g-pos-rel g-top-1 g-mr-8"></i> Turmas</span>
                        </a>


                        <?php echo " <a href='functions/logout.php?token=".md5(session_id())."' 
                        class='list-group-item list-group-item-action justify-content-between'>
                        <span><i class='icon-notebook g-pos-rel g-top-1 g-mr-8'></i> Logout</span>
                        </a>"
                        ?>


                    </div>
                </div>

                <!-- Profle Content -->
                <div class="col-lg-9">
                    <!-- Nav tabs -->
                    <ul class="nav nav-justified u-nav-v1-1 u-nav-primary g-brd-bottom--md g-brd-bottom-2 g-brd-primary g-mb-20" role="tablist" data-target="nav-1-1-default-hor-left-underline" data-tabs-mobile-type="slide-up-down" data-btn-classes="btn btn-md btn-block rounded-0 u-btn-outline-primary g-mb-20">
                        <li class="nav-item">
                            <a class="nav-link g-py-10 active" data-toggle="tab" href="#nav-1-1-default-hor-left-underline--1" role="tab">Visualização de Turmas</a>
                        </li>


                    </ul>
                    <!-- End Nav tabs -->

                    <!-- Tab panes -->
                    <div id="nav-1-1-default-hor-left-underline" class="tab-content">

                        <div class="tab-pane fade show active" id="nav-1-1-default-hor-left-underline--1" role="tabpanel" data-parent="#nav-1-1-default-hor-left-underline">

                            <div class="g-mb-20">
                                <a class="btn u-btn-primary rounded-0 g-py-12 g-px-25" href="edit-turmas.php">Criar Turma</a>
                            </div>
                            <div class="table-responsive" >
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Número da Turma</th>
                                        <th>Ano</th>
                                        <th>Nome</th>
                                        <th>Etapa</th>
                                        <th>Módulo</th>
                                        <th>Dia da Semana</th>
                                        <th>Turno</th>
                                        <th>Horário</th>
                                        <th>Sala</th>
                                        <th>Status</th>
                                        <th>Catequistas</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td><a href="edit-turmas.php">1</a></td>
                                        <td>2018</td>
                                        <td>Turma 1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>Segunda-Feira</td>
                                        <td>Manhã</td>
                                        <td>10:00</td>
                                        <td>Sala 3</td>
                                        <td>Ativa</td>
                                        <td>João, Paulo, Mateus</td>
                                    </tr>
                                    <tr>
                                        <td><a href="edit-turmas.php">2</a></td>
                                        <td>2017</td>
                                        <td>Turma 2</td>
                                        <td>1</td>
                                        <td>4</td>
                                        <td>Segunda-Feira</td>
                                        <td>Tarde</td>
                                        <td>14:00</td>
                                        <td>Sala 2</td>
                                        <td>Ativa</td>
                                        <td>João, Paulo, Mateus</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>



                        </div>

                    </div>
                    <!-- End Tab panes -->
                </div>
                <!-- End Profle Content -->
            </div>
        </div>
    </section>

    <?php include 'footer.html';?>

    <script>

    </script>

</body>

</html>
