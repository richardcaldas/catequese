<?php include_once("common/session.php");
include_once('common/connection.php');
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
                    <a class="u-link-v5 g-color-main g-color-primary--hover" href="rematricula.php">Reinscrição</a>
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
                            <a class="nav-link g-py-10 active" data-toggle="tab" role="tab">Confirmação de dados da Reinscrição</a>
                        </li>
                    </ul>
                    <!-- End Nav tabs -->

                    <!-- Tab panes -->
                    <div id="nav-1-1-default-hor-left-underline" class="tab-content">
                        <!-- Edit Profile -->
                        <div class="tab-pane fade show active" id="nav-1-1-default-hor-left-underline--1" role="tabpanel" data-parent="#nav-1-1-default-hor-left-underline">
                            <h2 class="h4 g-font-weight-300">Exibindo os dados de matrícula do aluno: <strong>John Doe Filho</strong></h2>
                            <p>Por favor verifique se os dados abaixo estão corretos.</p>

                            <ul class="list-unstyled g-mb-30">
                                <!-- Name -->
                                <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                                    <div class="g-pr-10">
                                        <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Nome</strong>
                                        <span class="align-top">John Doe Filho</span>
                                    </div>
                                    <span>
                                        <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                                    </span>
                                </li>
                                <!-- End Name -->
                                <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                                    <div class="g-pr-10">
                                        <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Turma</strong>
                                        <span class="align-top">Turma 03</span>
                                    </div>
                                    <span>
                                        <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                                    </span>
                                </li>
                                <!-- End Address -->
                                <!-- Address -->
                                <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                                    <div class="g-pr-10">
                                        <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Horário</strong>
                                        <span class="align-top">Sábado (10h - 12h)</span>
                                    </div>
                                    <span>
                                        <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                                    </span>
                                </li>
                                <!-- Your ID -->
                                <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                                    <div class="g-pr-10">
                                        <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">RG</strong>
                                        <span class="align-top">12.345.678-9</span>
                                    </div>
                                    <span>
                                        <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                                    </span>
                                </li>
                                <!-- End Your ID -->

                                <!-- Company Name -->
                                <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                                    <div class="g-pr-10">
                                        <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Nome do Pai</strong>
                                        <span class="align-top">John Doe Pai</span>
                                    </div>
                                    <span>
                                        <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                                    </span>
                                </li>
                                <!-- End Company Name -->

                                <!-- Position -->
                                <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                                    <div class="g-pr-10">
                                        <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Nome da Mãe</strong>
                                        <span class="align-top">Joahna Doe</span>
                                    </div>
                                    <span>
                                        <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                                    </span>
                                </li>
                                <!-- End Position -->

                                <!-- Primary Email Address -->
                                <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                                    <div class="g-pr-10">
                                        <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Email do Responsável</strong>
                                        <span class="align-top">john.doe@uol.com.br</span>
                                    </div>
                                    <span>
                                        <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                                    </span>
                                </li>
                                <!-- End Primary Email Address -->

                                <!-- Phone Number -->
                                <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                                    <div class="g-pr-10">
                                        <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Telefone Residencial</strong>
                                        <span class="align-top">(+55) 12 3456 7890</span>
                                    </div>
                                    <span>
                                        <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                                    </span>
                                </li>
                                <!-- End Phone Number -->

                                <!-- Office Number -->
                                <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                                    <div class="g-pr-10">
                                        <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Telefone Celular</strong>
                                        <span class="align-top">(+55) 12 99456 7891</span>
                                    </div>
                                    <span>
                                        <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                                    </span>
                                </li>
                                <!-- End Office Number -->

                                <!-- Address -->
                                <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                                    <div class="g-pr-10">
                                        <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Endereço</strong>
                                        <span class="align-top">Avenida Cidade Jardim, 600, Jardim Satélite, São José dos Campos - SP</span>
                                    </div>
                                    <span>
                                        <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                                    </span>
                                </li>
                                <!-- End Address -->
                                <!-- Address -->

                                <!-- End Address -->
                            </ul>

                            <div class="text-sm-right">
                                <a class="btn u-btn-primary rounded-0 g-py-12 g-px-25" href="view-catequizando.php?id=1">Confirmar Matrícula</a>
                            </div>
                        </div>
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

</html>
