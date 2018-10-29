<?php include_once("common/session.php");
include_once('common/connection.php');

$sql =  "SELECT catequizando.id as id, ";
$sql .= " catequizando.nome as nomeCatequizando, ";
$sql .=	" catequizando.data_nascimento as nascimentoCatequizando," ;
$sql .=	" responsavel.nome as nomeResponsavel," ;
$sql .=	" responsavel.email as emailResponsavel, ";
$sql .=	" responsavel.tel_celular as telefoneResponsavel";
$sql .=	" FROM catequizando" ;
$sql .=	" inner join responsavel on responsavel.id = catequizando.responsavel;";

$query = mysqli_query($connection, $sql);

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
                    <a class="u-link-v5 g-color-main g-color-primary--hover" href="lista-alunos.php">Alunos</a>
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
                            <a class="nav-link g-py-10 active" data-toggle="tab" href="#nav-1-1-default-hor-left-underline--1" role="tab">Visualização do Alunos</a>
                        </li>


                    </ul>
                    <!-- End Nav tabs -->

                    <!-- Tab panes -->
                    <div id="nav-1-1-default-hor-left-underline" class="tab-content">

                        <div class="tab-pane fade show active" id="nav-1-1-default-hor-left-underline--1" role="tabpanel" data-parent="#nav-1-1-default-hor-left-underline">

                            <div class="g-mb-20">
                                <a class="btn u-btn-primary rounded-0 g-py-12 g-px-25" href="matricula.php"> <i class="fas fa-lg fa-plus"></i> Matricular Catequizando </a>
                            </div>
                            <div class="table-responsive" >
                                <table id="tableClasses" class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Ações</th>
                                        <th>Nome</th>
                                        <th>Data de Nascimento</th>
                                        <th>Responsável</th>
                                        <th>Telefone Celular</th>
                                        <th>Email</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php
                                        while($row = mysqli_fetch_assoc($query)) {
                                    ?>
                                        <tr>
                                            <td>
                                                <a href="view-catequizando.php?id=<?php echo $row["id"];?>" data-toggle="tooltip" title="Visualizar informações do Aluno"><i class="fas fa-lg fa-eye g-ml-5"></i></a>
                                                <a href="edit-aluno.php?id=<?php echo $row["id"];?>" data-toggle="tooltip" title="Editar informações do Aluno"><i class="fas fa-lg fa-pencil-alt g-ml-5"></i></a>
                                                <a href="rematricula.php?id=<?php echo $row["id"];?>" data-toggle="tooltip" title="Rematricular Aluno"><i class="fas fa-lg fa-sync-alt g-ml-5"></i></a>
                                                <a href="remover-aluno.php?id=<?php echo $row["id"];?>" data-toggle="tooltip" title="Desmatricular Aluno"><i class="fas fa-lg fa-times g-ml-5"></i></a>
                                            </td>
                                            <td><?php echo $row["nomeCatequizando"];?></td>
                                            <td><?php echo $row["nascimentoCatequizando"];?></td>
                                            <td><?php echo $row["nomeResponsavel"];?></td>
                                            <td><?php echo $row["telefoneResponsavel"];?></td>
                                            <td><?php echo $row["emailResponsavel"];?></td>
                                        </tr>
                                    <?php } ?>
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
