<?php include_once("common/session.php");
include_once('common/connection.php');

      $sql =  "select c.*";
      $sql .= "from catequizando c ";
      $sql .= "left join responsavel p on p.id = c.id_pai ";
      $sql .= "left join responsavel m on m.id = c.id_mae ";
      $sql .= "where c.ID = ".$_GET['id'];	
      
      $query = mysqli_query($connection, $sql);
      $row = mysqli_fetch_assoc($query);

      if (isset($_GET["id"])){


?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmlstream.com/preview/unify-v2.6/unify-main/pages/page-invoice-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Sep 2018 22:37:44 GMT -->

<?php include 'head.php';?>
<head>
  <!-- Title -->
  <title>Visualização de Turmas</title>
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

        <div class="col-md-6 g-mb-30">
          <h3 class="h5 g-color-black g-font-weight-600 text-uppercase">Dados do Catequisando</h3>
          <ul class="list-unstyled g-font-size-default">
            <li><span class="g-font-weight-700">Nome:</span> <?php echo $row['nome']; ?></li>
            <li><span class="g-font-weight-700">Data de Nascimento:</span> <?php echo $row['data_nascimento']; ?></li>
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
            <li><span class="g-font-weight-700">Foi Batizado em:</span> <?php echo $row['data_batismo']; ?></li>
            <li><span class="g-font-weight-700">Paróquia em que foi batizado:</span> <?php echo $row['paroquia_batismo']; ?></li>
            <li><span class="g-font-weight-700">Cidade/Estado:</span> <?php echo $row['cidade_paroquia']; ?> / <?php echo $row['estado_paroquia']; ?></li>
          </ul>
        </div>

        <div class="col-md-6 g-mb-30">
          <h3 class="h5 g-color-black g-font-weight-600 text-uppercase">dados da familia</h3>
          <h3 class="h6 g-color-black g-font-weight-600 text-uppercase"> Pai</h3>
          <ul class="list-unstyled g-font-size-default">
            <li><span class="g-font-weight-700">Nome:</span> Antonio carlos nunces caldas</li>
            <li><span class="g-font-weight-700">Celular:</span> (12) 1111-2222</li>
            <li><span class="g-font-weight-700">Local de Trabalho:</span> Antonio carlos nunces caldas</li>
            <li><span class="g-font-weight-700">Profissão</span> 2</li>
            <li><span class="g-font-weight-700">Telefone Comercial:</span> (12) 2222-2222</li>
            <li><span class="g-font-weight-700">Católico?</span> 01/01/2019</li>
            <li><span class="g-font-weight-700">Praticante?</span> Nome da paróquia</li>
            <li><span class="g-font-weight-700">Batizado?</span> São jose dos campos / SP</li>
            <li><span class="g-font-weight-700">Crismado?</span> Sim</li>
            <li><span class="g-font-weight-700">Casado na Igreja?</span> Sim</li>
            <li><span class="g-font-weight-700">Outro credo religioso? Qual?</span> Sim, dsdsdsd</li>
            <li><span class="g-font-weight-700">São separados?</span> Não</li>
            <li><span class="g-font-weight-700">Estão em segunda união?</span> Não</li>
            <li><span class="g-font-weight-700">São dizimistas?</span> Não</li>
            <li><span class="g-font-weight-700">Participa de Pastoral ou Movimento religioso nesta paróquia?</span> Não</li>
            <li><span class="g-font-weight-700">Qual?</span> Não</li>
            <li><span class="g-font-weight-700">Gostaria de Participar?</span> Não</li>
          </ul>
        </div>

        <div class="col-md-6 g-mb-30">
          <h3 class="h5 g-color-black g-font-weight-600 text-uppercase"><br></h3>
          <h3 class="h6 g-color-black g-font-weight-600 text-uppercase"> Mãe</h3>
          <ul class="list-unstyled g-font-size-default">
            <li><span class="g-font-weight-700">Nome:</span> Antonio carlos nunces caldas</li>
            <li><span class="g-font-weight-700">Celular:</span> (12) 1111-2222</li>
            <li><span class="g-font-weight-700">Local de Trabalho:</span> Antonio carlos nunces caldas</li>
            <li><span class="g-font-weight-700">Profissão</span> 2</li>
            <li><span class="g-font-weight-700">Telefone Comercial:</span> (12) 2222-2222</li>
            <li><span class="g-font-weight-700">Católico?</span> 01/01/2019</li>
            <li><span class="g-font-weight-700">Praticante?</span> Nome da paróquia</li>
            <li><span class="g-font-weight-700">Batizado?</span> São jose dos campos / SP</li>
            <li><span class="g-font-weight-700">Crismado?</span> Sim</li>
            <li><span class="g-font-weight-700">Casado na Igreja?</span> Sim</li>
            <li><span class="g-font-weight-700">Outro credo religioso? Qual?</span> Sim, dsdsdsd</li>
            <li><span class="g-font-weight-700">São separados?</span> Não</li>
            <li><span class="g-font-weight-700">Estão em segunda união?</span> Não</li>
            <li><span class="g-font-weight-700">São dizimistas?</span> Não</li>
            <li><span class="g-font-weight-700">Participa de Pastoral ou Movimento religioso nesta paróquia?</span> Não</li>
            <li><span class="g-font-weight-700">Qual?</span> Não</li>
            <li><span class="g-font-weight-700">Gostaria de Participar?</span> Não</li>
          </ul>
        </div>

      </div>

      
    </section>
    <!-- End General Info -->

    <!-- Table Striped Rows -->
    <section class="container g-pb-70">

      <!-- Total -->
      <div class="row justify-content-between">
        <div class="col-md-4 align-self-center g-hidden-sm-down g-mb-30">
          <ul class="list-unstyled mb-0">
            <li class="my-1"><span class="g-font-weight-600">SÃO JOSÉ DOS CAMPOS, <?php setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
echo strftime('%d de %B de %Y', strtotime('today')); ?>	</span>
          </ul>
        </div>

        <div class="col-md-7 col-lg-4 align-self-center g-mb-30">
          <div class="text-right">
            <button class="btn btn-md u-btn-darkgray g-font-size-default rounded-0 g-py-10 pull-right" type="button" onclick="javascript:window.print();">
              <i class="g-pos-rel g-top-1 mr-2 icon-education-082 u-line-icon-pro"></i>
              Imprimir
            </button>
          </div>
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
		echo "Ocorreu um erro na pagina. Favor em contrato com o suporte.";
	}
 ?>
