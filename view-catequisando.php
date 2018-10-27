<!DOCTYPE html>
<html lang="en">
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
            <li><span class="g-font-weight-700">Nome:</span> Alexandar</li>
            <li><span class="g-font-weight-700">Data de Nascimento:</span> 12/01/2018</li>
            <li><span class="g-font-weight-700">Endereço:</span> Avenida Fortaleza, 850</li>
            <li><span class="g-font-weight-700">Bairro:</span> Parque Industrial</li>
            <li><span class="g-font-weight-700">Cidade :</span> Sao Jose dos Campos</li>
            <li><span class="g-font-weight-700">Estado:</span> São Paulo</li>
            <li><span class="g-font-weight-700">CEP:</span> 12235-560</li>
            <li><span class="g-font-weight-700">Telefone:</span> (12) 1234-5678</li>
            <li><span class="g-font-weight-700">Celular:</span> (12) 9876-5432</li>
            <li><span class="g-font-weight-700">Email do catequisando:</span> aluno@aluno.com.br</li>
          </ul>
        </div>

        <div class="col-md-6 g-mb-30">
          <h3 class="h5 g-color-black g-font-weight-600 text-uppercase"> <br></h3>
          <ul class="list-unstyled g-font-size-default">
            <li><span class="g-font-weight-700">Escola:</span> NOME DA ESCOLA</li>
            <li><span class="g-font-weight-700">Série:</span> 2</li>
            <li><span class="g-font-weight-700">Período:</span> Tarde</li>
            <li><span class="g-font-weight-700">Foi Batizado em:</span> 01/01/2019</li>
            <li><span class="g-font-weight-700">Paróquia em que foi batizado:</span> Nome da paróquia</li>
            <li><span class="g-font-weight-700">Cidade/Estado:</span> São jose dos campos / SP</li>
            <li><span class="g-font-weight-700">É dizimista:</span> Sim</li>
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

        <div class="col-md-12 align-self-center g-mb-30">
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
    <!-- End Copyright Footer -->
    <a class="js-go-to u-go-to-v1" href="#!" data-type="fixed" data-position='{
     "bottom": 15,
     "right": 15
   }' data-offset-top="400" data-compensation="#js-header" data-show-effect="zoomIn">
      <i class="hs-icon hs-icon-arrow-top"></i>
    </a>
  </main>

</body>


</html>
