<?php include_once("common/session.php");
include_once('common/connection.php');
include_once('functions/functions.php');

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


      if (isset($_GET["id"])){


?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmlstream.com/preview/unify-v2.6/unify-main/pages/page-invoice-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Sep 2018 22:37:44 GMT -->

<?php include 'head.php';?>
<head>
  <!-- Title -->
  <title>Visualização de Dados do Catequizando</title>
  <!-- Page Style -->
  <style type="text/css">
    @media print {
        * { -webkit-print-color-adjust: exact; }

        .u-header,
        .footer,
        footer,
        .breadcrumbs,
        .btn {
          display: none;
        }

        .row > [class*="col-"] {
          float: left;
        }

        .col-md-3,
        .col-md-6 {
          width: 33%;
        }

        .col-lg-2 {
          width: 24%;
        }

        .g-bg-primary {
          color: #000 !important;
        }

        .g-font-size-default {
          font-size: 11px !important;
        }

        .h4,
        .h5 {
          font-size: 14px !important;
        }

        .g-pa-15 {
          padding: 10px !important;
        }

        .py-4 {
          padding-top: 10px !important;
          padding-bottom: 10px !important;
        }

        .g-py-15 {
          padding-top: 5px !important;
          padding-bottom: 5px !important;
        }

        .g-pt-100 {
          padding-top: 30px !important;
        }

        .g-pb-30 {
          padding-bottom: 0 !important;
        }

        .g-mb-30,
        .g-mb-40 {
          margin-bottom: 20px !important;
        }

        .my-2 {
          margin-top: 0;
          margin-bottom: 0;
        }

        table tr th {
          font-size: 13px !important;
        }
      }
  </style>
</head>

<body>
  <main>

    <!-- Breadcrumb -->
    <section class="g-my-30">
        <div class="container">
            <ul class="u-list-inline">
                <li class="list-inline-item g-mr-7">
                    <a class="u-link-v5 g-color-main g-color-primary--hover" href="home.php">Home</a>
                    <i class="fa fa-angle-right g-ml-7"></i>
                </li>
                <li class="list-inline-item g-mr-7">
                    <a class="u-link-v5 g-color-main g-color-primary--hover" href="lista-alunos.php">Catequisando</a>
                    <i class="fa fa-angle-right g-ml-7"></i>
                </li>
                <li class="list-inline-item g-mr-7 g-color-primary">
                    Visualização
                </li>
            </ul>
        </div>
    </section>
    <!-- End Breadcrumb -->

    <!-- General Info -->
    <section class="container g-pb-30">
      <div class="row">
        <div class="col-md-12 g-mb-30">
          <h2 class="h4 g-font-weight-700 text-uppercase text-center">COMISSÃO DIOCESANA PARA ANIMAÇÃO BÍBLICO-CATEQUÉTICA</h2>
          <h5 class="text-uppercase text-center">DIOCESE DE SÃO JOSÉ DOS CAMPOS</h5>
        </div>

          <div class="col-md-8 g-mb-30">
              <h3 class="h5 g-color-black g-font-weight-600 text-uppercase">TURMA</h3>
              <ul class="list-unstyled g-font-size-default">
                  <li><span class="g-font-weight-700">Turma:</span> <?php echo $rowTurma['nome']; ?></li>
                  <li><span class="g-font-weight-700">Ano:</span> <?php echo $rowTurma['ano']; ?></li>
                  <li><span class="g-font-weight-700">Etapa:</span> <?php echo $rowTurma['etapa']; ?></li>
                  <li><span class="g-font-weight-700">Módulo</span> <?php echo $rowTurma['modulo']; ?></li>
                  <li><span class="g-font-weight-700">Dia:</span> <?php echo $rowTurma['dia_semana']; ?></li>
                  <li><span class="g-font-weight-700">Turno</span> <?php echo $rowTurma['turno']; ?></li>
                  <li><span class="g-font-weight-700">Horário</span> <?php echo $rowTurma['horario']; ?></li>
                  <li><span class="g-font-weight-700">Sala</span> <?php echo $rowTurma['sala']; ?></li>
              </ul>
          </div>

          <div class="col-lg-4 g-mb-30">
              <div class="row">
                  <button class="btn btn-md u-btn-darkgray g-font-size-default rounded-0 g-py-10 pull-right" type="button" onclick="javascript:window.print();">
                      <i class="g-pos-rel g-top-1 mr-2 icon-education-082 u-line-icon-pro"></i>
                      Imprimir
                  </button>
              </div>
              <div class="row g-mt-10">
                  <a class="btn btn-md u-btn-darkgray g-font-size-default rounded-0 g-py-10 pull-right" href="lista-alunos.php">
                      <i class="g-pos-rel g-top-1 mr-2 fas fa-arrow-left"></i>
                      Voltar
                  </a>
              </div>
          </div>

        <div class="col-md-6 g-mb-30">
          <h3 class="h5 g-color-black g-font-weight-600 text-uppercase">Dados do Catequisando</h3>
          <ul class="list-unstyled g-font-size-default">
            <li><span class="g-font-weight-700">Nome:</span> <?php echo $row['nome']; ?></li>
            <li><span class="g-font-weight-700">Data de Nascimento:</span> <?php echo $row['data_nascimento_formatted']; ?></li>
            <li><span class="g-font-weight-700">Endereço:</span> <?php echo $row['endereco']; ?></li>
            <li><span class="g-font-weight-700">Bairro:</span> <?php echo $row['bairro']; ?></li>
            <li><span class="g-font-weight-700">Cidade :</span> <?php echo $row['cidade']; ?></li>
            <li><span class="g-font-weight-700">Estado:</span> <?php echo $row['estado']; ?></li>
            <li><span class="g-font-weight-700">CEP:</span> <?php echo $row['cep']; ?></li>
            <li><span class="g-font-weight-700">Celular:</span> <?php echo $row['tel_celular']; ?></li>
            <li><span class="g-font-weight-700">Email do catequisando:</span> <?php echo $row['email']; ?></li>
          </ul>
        </div>

        <div class="col-md-6 g-mb-30">
          <h3 class="h5 g-color-black g-font-weight-600 text-uppercase"> <br></h3>
          <ul class="list-unstyled g-font-size-default">
            <li><span class="g-font-weight-700">Escola:</span> <?php echo $row['escola']; ?></li>
            <li><span class="g-font-weight-700">Série:</span> <?php echo $row['ano_curso']; ?></li>
            <li><span class="g-font-weight-700">Período:</span> <?php echo $row['periodo']; ?></li>
            <li><span class="g-font-weight-700">Foi Batizado em:</span> <?php echo $row['data_batismo_formatted']; ?></li>
            <li><span class="g-font-weight-700">Paróquia em que foi batizado:</span> <?php echo $row['paroquia_batismo']; ?></li>
            <li><span class="g-font-weight-700">Cidade/Estado:</span> <?php echo $row['cidade_paroquia']; ?> / <?php echo $row['estado_paroquia']; ?></li>
          </ul>
        </div>

        <div class="col-md-6 g-mb-30">
          <h3 class="h5 g-color-black g-font-weight-600 text-uppercase">dados da familia</h3>
          <h3 class="h6 g-color-black g-font-weight-600 text-uppercase"> Pai</h3>
          <ul class="list-unstyled g-font-size-default">
            <li><span class="g-font-weight-700">Nome:</span> <?php echo $rowPai['nome']; ?></li>
            <li><span class="g-font-weight-700">Celular:</span> <?php echo $rowPai['tel_celular']; ?></li>
            <li><span class="g-font-weight-700">Local de Trabalho:</span> <?php echo $rowPai['local_trabalho']; ?></li>
            <li><span class="g-font-weight-700">Profissão</span> <?php echo $rowPai['profissao']; ?></li>
            <li><span class="g-font-weight-700">Telefone Comercial:</span> <?php echo $rowPai['tel_comercial']; ?></li>
            <li><span class="g-font-weight-700">Católico?</span> <?php echo showBoolean($rowPai['is_catolico']); ?></li>
            <li><span class="g-font-weight-700">Praticante?</span> <?php echo showBoolean($rowPai['is_praticante']); ?></li>
            <li><span class="g-font-weight-700">Batizado?</span> <?php echo showBoolean($rowPai['is_batizado']); ?></li>
            <li><span class="g-font-weight-700">Crismado?</span> <?php echo showBoolean($rowPai['is_crismado']); ?></li>
            <li><span class="g-font-weight-700">Casado na Igreja?</span> <?php echo showBoolean($rowPai['is_casado_na_igreja']); ?></li>
            <li><span class="g-font-weight-700">Outro credo religioso? Qual?</span> <?php echo showBoolean($rowPai['is_outro_credo_religioso']); ?> <?php echo $rowPai['nome_credo_religioso']; ?></li>
            <li><span class="g-font-weight-700">São separados?</span> <?php echo showBoolean($rowPai['is_separado']); ?></li>
            <li><span class="g-font-weight-700">Estão em segunda união?</span> <?php echo showBoolean($rowPai['is_segunda_uniao']); ?></li>
            <li><span class="g-font-weight-700">São dizimistas?</span> <?php echo showBoolean($rowPai['is_dizimista']); ?></li>
            <li><span class="g-font-weight-700">Participa de Pastoral ou Movimento religioso nesta paróquia?</span> <?php echo showBoolean($rowPai['is_participante_movimento_paroquia']); ?></li>
            <li><span class="g-font-weight-700">Qual?</span> <?php echo $rowPai['qual_movimento']; ?></li>
            <li><span class="g-font-weight-700">Gostaria de Participar?</span> <?php echo showBoolean($rowPai['is_gostaria_participar']); ?></li>
          </ul>
        </div>

        <div class="col-md-6 g-mb-30">
          <h3 class="h5 g-color-black g-font-weight-600 text-uppercase"><br></h3>
          <h3 class="h6 g-color-black g-font-weight-600 text-uppercase"> Mãe</h3>
          <ul class="list-unstyled g-font-size-default">
          <li><span class="g-font-weight-700">Nome:</span> <?php echo $rowMae['nome']; ?></li>
            <li><span class="g-font-weight-700">Celular:</span> <?php echo $rowMae['tel_celular']; ?></li>
            <li><span class="g-font-weight-700">Local de Trabalho:</span> <?php echo $rowMae['local_trabalho']; ?></li>
            <li><span class="g-font-weight-700">Profissão</span> <?php echo $rowMae['profissao']; ?></li>
            <li><span class="g-font-weight-700">Telefone Comercial:</span> <?php echo $rowMae['tel_comercial']; ?></li>
            <li><span class="g-font-weight-700">Católico?</span> <?php echo showBoolean($rowMae['is_catolico']); ?></li>
            <li><span class="g-font-weight-700">Praticante?</span> <?php echo showBoolean($rowMae['is_praticante']); ?></li>
            <li><span class="g-font-weight-700">Batizado?</span> <?php echo showBoolean($rowMae['is_batizado']); ?></li>
            <li><span class="g-font-weight-700">Crismado?</span> <?php echo showBoolean($rowMae['is_crismado']); ?></li>
            <li><span class="g-font-weight-700">Casado na Igreja?</span> <?php echo showBoolean($rowMae['is_casado_na_igreja']); ?></li>
            <li><span class="g-font-weight-700">Outro credo religioso? Qual?</span> <?php echo showBoolean($rowMae['is_outro_credo_religioso']); ?> <?php echo $rowMae['nome_credo_religioso']; ?></li>
            <li><span class="g-font-weight-700">São separados?</span> <?php echo showBoolean($rowMae['is_separado']); ?></li>
            <li><span class="g-font-weight-700">Estão em segunda união?</span> <?php echo showBoolean($rowMae['is_segunda_uniao']); ?></li>
            <li><span class="g-font-weight-700">São dizimistas?</span> <?php echo showBoolean($rowMae['is_dizimista']); ?></li>
            <li><span class="g-font-weight-700">Participa de Pastoral ou Movimento religioso nesta paróquia?</span> <?php echo showBoolean($rowMae['is_participante_movimento_paroquia']); ?></li>
            <li><span class="g-font-weight-700">Qual?</span> <?php echo $rowMae['qual_movimento']; ?></li>
            <li><span class="g-font-weight-700">Gostaria de Participar?</span> <?php echo showBoolean($rowMae['is_gostaria_participar']); ?></li>
          </ul>
        </div>

      </div>

      
    </section>
    <!-- End General Info -->

    <!-- Table Striped Rows -->
    <section class="container g-pb-70">

      <!-- Total -->
      <div class="row justify-content-between">
        <div class="col-md-10 align-self-center g-hidden-sm-down g-mb-30">
          <ul class="list-unstyled mb-0">
              <li><h4><b>FAVOR IMPRIMIR A RE-INSCRIÇÃO E LEVAR A TAXA DE CONTRIBUIÇÃO DE R$ 40,00 PARA A COORDENAÇÃO EFETIVAR SUA MATRICULA</b></h4></li>
                <li class="my-1"><span class="g-font-weight-600">SÃO JOSÉ DOS CAMPOS, <?php setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
echo strftime('%d de %B de %Y', strtotime('today')); ?>	</span>
          </ul>
        </div>


      </div>
      <!-- End Total -->
    </section>
    <!-- End Table Striped Rows -->

    
    <?php include 'footer.html';?>

    
  </main>

  
  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
        
      });
      
  </script>

</body>


</html>
<?php }else{
		echo "Ocorreu um erro na pagina. Favor entrar em contrato com o suporte.";
	}
 ?>
