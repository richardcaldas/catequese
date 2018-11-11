<?php include_once("common/session.php");
include_once('common/connection.php');

$acao = "Criar";
$id = 0;
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $acao = "Editar";
    
    $sql =  "select * ";
    $sql .= "from turma t ";
    $sql .= "where t.ID = ".$_GET['id'];	

    $query = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($query);

}

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
                    <a class="u-link-v5 g-color-main g-color-primary--hover" href=""><?php echo $acao ?> Turma</a>
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
                            <a class="nav-link g-py-10 active" data-toggle="tab" href="#nav-1-1-default-hor-left-underline--1" role="tab"><?php echo $acao; ?> turma</a>
                        </li>


                    </ul>
                    <!-- End Nav tabs -->

                    <!-- Tab panes -->
                    <div id="nav-1-1-default-hor-left-underline" class="tab-content">

                        <div class="tab-pane fade show active" id="nav-1-1-default-hor-left-underline--1" role="tabpanel" data-parent="#nav-1-1-default-hor-left-underline">

                            <form method="post" action="<?php $_PHP_SELF ?>">
                                <input type="hidden" name="hidId" id="hidId" value="<?php echo $id; ?>">
                                <div class="col-lg-12">
                                    <label for="turmaAtiva">Turma ativa?</label>
                                    <div class="ml-5">
                                        <div class="pretty p-icon p-smooth" style="font-size: 25px;">
                                            <input type="checkbox" id="turmaAtiva" <?php echo $row["is_aberta"] ? "checked" : ""; ?>/>
                                            <div class="state p-success">
                                                <i class="icon fas  fa-3x fa-check"></i>
                                                <label></label>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label class="" for="inputNome">Nome</label>
                                        <input type="text" id="inputNome" name="inputNome" value="<?php echo $row['nome']; ?>" class="form-control form-control-md rounded-0" required/>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="form-group col-lg-4">
                                        <label class="" for="selectAno">Ano</label>
                                        <select id="selectAno" name="selectAno" class="form-control form-control-md rounded-0 ">
                                            <option value="<?php echo date("Y"); ?>" <?php if ($row['ano'] == date("Y")){ echo "selected"; } ?> ><?php echo date("Y"); ?></option>
                                            <option value="<?php echo date("Y") + 1; ?>" <?php if ($row['ano'] == date("Y") + 1) { echo "selected"; } ?>><?php echo date("Y") + 1; ?></option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <label class="" for="selectEtapa">Etapa</label>
                                        <select  id="selectEtapa" name="selectEtapa" class="form-control form-control-md rounded-0 ">
                                            <option value="Eucaristia" <?php if ($row['etapa'] == "Eucaristia"){ echo "selected"; } ?>>Eucaristia</option>
                                            <option value="Crisma" <?php if ($row['etapa'] == "Crisma"){ echo "selected"; } ?>>Crisma</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-4">
                                        <label class="" for="selectModulo">Modulo</label>
                                        <select  id="selectModulo" name="selectModulo" class="form-control form-control-md rounded-0 ">
                                            <option value="I" <?php if ($row['modulo'] == "I"){ echo "selected"; } ?>>I</option>
                                            <option value="II" <?php if ($row['modulo'] == "II"){ echo "selected"; } ?>>II</option>
                                            <option value="III" <?php if ($row['modulo'] == "III"){ echo "selected"; } ?>>III</option>
                                            <option value="PC" <?php if ($row['modulo'] == "PC"){ echo "selected"; } ?>>PC</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-4">
                                        <label class="" for="selectDiaSemana">Dia da Semana</label>
                                        <select id="selectDiaSemana" name="selectDiaSemana" class="form-control form-control-md rounded-0 ">
                                            <option value="1" <?php if ($row['dia_semana'] == "2"){ echo "selected"; } ?>>Segunda-feira</option>
                                            <option value="2" <?php if ($row['dia_semana'] == "3"){ echo "selected"; } ?>>Terça-feira</option>
                                            <option value="3" <?php if ($row['dia_semana'] == "4"){ echo "selected"; } ?>>Quarta-feira</option>
                                            <option value="4" <?php if ($row['dia_semana'] == "5"){ echo "selected"; } ?>>Quinta-feira</option>
                                            <option value="5" <?php if ($row['dia_semana'] == "6"){ echo "selected"; } ?>>Sexta-feira</option>
                                            <option value="6" <?php if ($row['dia_semana'] == "7"){ echo "selected"; } ?>>Sábado</option>
                                            <option value="6" <?php if ($row['dia_semana'] == "1"){ echo "selected"; } ?>>Domingo</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <label class="" for="selectTurno">Período</label>
                                        <select id="selectTurno" name="selectTurno" class="form-control form-control-md rounded-0 ">
                                            <option value="Manhã" <?php if ($row['turno'] == "Manhã"){ echo "selected"; } ?>>Manhã</option>
                                            <option value="Tarde" <?php if ($row['turno'] == "Tarde"){ echo "selected"; } ?>>Tarde</option>
                                            <option value="Noite" <?php if ($row['turno'] == "Noite"){ echo "selected"; } ?>>Noite</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-4">
                                        <label class="" for="selectHorario">Horario</label>
                                        <select id="selectHorario" name="selectHorario" class="form-control form-control-md rounded-0 ">
                                            <option value="08:30" <?php if ($row['horario'] == "08:30"){ echo "selected"; } ?>>08:30</option>
                                            <option value="09:00" <?php if ($row['horario'] == "09:00"){ echo "selected"; } ?>>09:00</option>
                                            <option value="10:00" <?php if ($row['horario'] == "10:00"){ echo "selected"; } ?>>10:00</option>
                                            <option value="15:00" <?php if ($row['horario'] == "15:00"){ echo "selected"; } ?>>15:00</option>
                                            <option value="18:00" <?php if ($row['horario'] == "18:00"){ echo "selected"; } ?>>18:00</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="row">

                                    <div class="form-group col-lg-4">
                                        <label class="" for="inputSala">Sala</label>
                                        <input type="text" id="inputSala" name="inputSala" value="<?php echo $row['sala']; ?>" class="form-control form-control-md rounded-0"/>
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <label class="" for="catequistas">Catequistas</label>
                                        <input type="text" id="catequistas" class="form-control form-control-md rounded-0"/>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="g-mb-20">
                                        <input type="submit" class="btn u-btn-primary rounded-0 g-py-12 g-px-25" value="Salvar"/>
                                    </div>
                                </div>
                            </form>
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

    <?php 
        
        date_default_timezone_set("America/Sao_Paulo");
        
        if (isset($_POST['inputNome'])){
            $id = $_POST['hidId'];
            $nome = strtoupper($_POST['inputNome']);
            $ano = $_POST['selectAno'];
            $etapa = $_POST['selectEtapa'];
            $modulo = $_POST['selectModulo'];
            $diaSemana = $_POST['selectDiaSemana'];
            $turno = $_POST['selectTurno'];
            $horario = $_POST['selectHorario'];
            $turmaAberta = $_POST('turmaAtiva');
            $sala = strtoupper(trim($_POST['inputSala']));
            if ($sala == ""){
                $sala = "null";
            }else{
                $sala = "'".$sala."'";
            }
            
            mysqli_query($connection, "BEGIN");

            if ($id == 0){
                $sql = "INSERT INTO turma (`ano`, `nome`, `etapa`, `modulo`, `dia_semana`, `turno`, `horario`, `sala`, `is_aberta`) ";
                $sql .= "VALUES ('".$ano."', '".$nome."', '".$etapa."', '".$modulo."', ".$diaSemana.", '".$turno."', '".$horario."', ".$sala.", ".$turmaAberta.");";
                $message = "Turma cadastrada com sucesso.";
            }else{
                $sql = "UPDATE turma SET nome = '".$nome."', ano = ".$ano.", etapa = '".$etapa."', modulo = '".$modulo."', ";
                $sql .= "dia_semana = ".$diaSemana.", turno = '".$turno."', horario = '".$horario."', sala = ".$sala."', is_aberta = '".$turmaAberta."'";
                $sql .= " WHERE id = ".$id;
                $message = "Turma atualizada com sucesso.";
            }

            echo $sql;
            
            
            $query = mysqli_query($connection, $sql);
            $error = mysqli_error($connection);
            
            $sweet = "swal({ ";
            $sweet .= "	title: 'Sucesso'," ;
            $sweet .= "	text: '".$message."',";
            $sweet .= "	type: 'success',";
            $sweet .= "	closeOnConfirm: true ";
            $sweet .= "}, ";
            $sweet .= "function(){ ";
            $sweet .= "	window.location.href = 'lista-turmas.php'; ";
            $sweet .= "});";
            
            
            if ($query){
                mysqli_query($connection, "COMMIT");	
                echo '<script type="text/javascript">'.$sweet.'</script>';
            }else{
                mysqli_query($connection, "ROLLBACK");
                $sweet = "swal('Ops!', 'Ocorreu algum erro. Favor entrar em contato com o suporte.', 'error')";
                echo '<script type="text/javascript">'.$sweet.'</script>';	
                
            }
            
                    
        }


    ?>






</body>

</html>
