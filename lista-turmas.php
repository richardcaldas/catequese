<?php include_once("common/session.php");
include_once('common/connection.php');
?>


<!DOCTYPE html>
<html lang="en">
<?php include 'head.php';?>
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
        <div class="container" style="max-width: 1600px">
            <div class="row">
                <?php include 'menu.php';?>

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
                                <a class="btn u-btn-primary rounded-0 g-py-12 g-px-25" href="edit-turmas.php"><i class="fas fa-plus fa-lg"></i> Criar Turma</a>
                            </div>
                            <div class="table-responsive" >
                                <table id="tableClasses" class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Ações</th>
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
                                        <td>
                                            <a href="view-turma.php" data-toggle="tooltip" title="Visualizar informações da Turma"><i class="fas fa-lg fa-eye g-ml-5"></i></a>
                                            <a href="edit-turma.php" data-toggle="tooltip" title="Editar informações da Turma"><i class="fas fa-lg fa-pencil-alt g-ml-5"></i></a>
                                            <a href="remover-turma.php" data-toggle="tooltip" title="Remover Turma"><i class="fas fa-lg fa-times g-ml-5"></i></a>
                                        </td>
                                        <td>1</td>
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
                                        <td>
                                            <a href="view-turma.php" data-toggle="tooltip" title="Visualizar informações da Turma"><i class="fas fa-lg fa-eye g-ml-5"></i></a>
                                            <a href="edit-turma.php" data-toggle="tooltip" title="Editar informações da Turma"><i class="fas fa-lg fa-pencil-alt g-ml-5"></i></a>
                                            <a href="remover-turma.php" data-toggle="tooltip" title="Remover Turma"><i class="fas fa-lg fa-times g-ml-5"></i></a>
                                        </td>
                                        <td>2</td>
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

        $(document).ready( function () {


            setActiveMenu();

            $('#tableClasses').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    {extend: 'copy',  exportOptions: { columns: "thead th:not(.noExport)" }},
                    {extend: 'csv',  exportOptions: { columns: "thead th:not(.noExport)" }},
                    {extend: 'excel', title: 'Controller',  exportOptions: { columns: "thead th:not(.noExport)" }},
                    {extend: 'pdf', title: 'Controller',  exportOptions:{ columns: "thead th:not(.noExport)" }},
                    {extend: 'print', customize: function (win){
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');
                        $(win.document.body).find('table').addClass('compact').css('font-size', 'inherit');
                    }}, 'colvis'
                ],
                "order" : [ [ 1, 'asc' ] ],
                "columnDefs" : [ { "orderable" : false, "targets" : 0}],
                "lengthMenu": [[10, 20, 30, -1], [10, 20, 30, "All"]],
                "initComplete": function() {

                }

            });
        } );

    </script>

</body>

</html>
