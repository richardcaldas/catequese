<?php include_once("common/start_session.php"); ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'head.php';?>
<head>
  <!-- Title -->
  <title>Catequese São Dimas</title>

</head>

<body>
  <main>

    <!-- Breadcrumb -->
    <section class="g-my-30">
      <div class="container">
        <ul class="u-list-inline">
          <li class="list-inline-item g-mr-7 g-color-primary">
            <a class="u-link-v5 g-color-main g-color-primary--hover" href="#!">Home</a>
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
              
              <a href="default.php" class="list-group-item list-group-item-action justify-content-between active">
                <span><i class="icon-home g-pos-rel g-top-1 g-mr-8"></i> Home</span>
              </a>
                            
              <a href="rematricula.php" class="list-group-item list-group-item-action justify-content-between ">
                <span><i class="icon-notebook g-pos-rel g-top-1 g-mr-8"></i> Rematricula</span>
              </a>

              <a href="turmas.php" class="list-group-item list-group-item-action justify-content-between ">
                <span><i class="icon-notebook g-pos-rel g-top-1 g-mr-8"></i> Turmas</span>
              </a>


              <a href='functions/logout.php?token=".md5(session_id())."' class="list-group-item list-group-item-action justify-content-between ">
                <span><i class="icon-notebook g-pos-rel g-top-1 g-mr-8"></i> Logout</span>
              </a>
              
            </div>
          </div>


          <div class="col-lg-9">

              <div id="objective" class="u-shadow-v19 g-bg-white rounded g-pa-20">
                <h2 class="h3 g-color-black mb-3">Objetivo</h2>
                <div class="d-inline-block g-width-50 g-height-2 g-bg-black mb-3"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris a hendrerit purus, non pretium dolor. Nam nec porta neque, nec faucibus ante. Aenean quis justo a nisi aliquam gravida quis at neque. Vivamus accumsan ut massa sit amet pulvinar. Vestibulum congue arcu eget turpis vestibulum, a varius justo commodo. Donec et nulla ac mi tincidunt rutrum. Suspendisse vehicula ullamcorper tempor.</p>
              </div>
                            
              <div id="mission" class="u-shadow-v19 g-bg-white rounded g-pa-20">
                <h2 class="h3 g-color-black mb-3">Missão</h2>
                <div class="d-inline-block g-width-50 g-height-2 g-bg-black mb-3"></div>
                <p>Quisque lectus lectus, hendrerit sit amet luctus vel, scelerisque eu orci. Nunc eget semper erat, eget dapibus massa. Morbi et commodo velit. Nunc libero orci, tristique luctus condimentum vel, dictum eget lectus. Nulla tortor tortor, iaculis et ex vel, vehicula pulvinar eros. Vestibulum eget odio ut augue viverra euismod. Nulla sed justo in orci egestas lobortis ut ut nibh. Morbi rhoncus et ligula id lacinia. Quisque iaculis placerat diam nec volutpat.</p>
              </div>
              
              <div id="vision" class="u-shadow-v19 g-bg-white rounded g-pa-20 ">
                <h3 class="g-color-black mb-3">Visão</h3>
                <div class="d-inline-block g-width-50 g-height-2 g-bg-black mb-3"></div>
                <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec condimentum suscipit fermentum. Aenean pretium euismod augue nec ornare. Quisque rutrum rhoncus ultrices. Duis efficitur tincidunt arcu vitae elementum. Nunc feugiat id elit eget laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
              </div>

            
          </div>
          <!-- End Profle Content -->
        </div>
      </div>
    </section>

    <!-- Footer -->
    <div id="contacts-section" class="g-bg-black-opacity-0_9 g-color-white-opacity-0_8 g-py-60">
      <div class="container">
        <div class="row">
          <!-- Footer Content -->
          <div class="col-lg-6 col-md-6 g-mb-40 g-mb-0--lg">
            <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20">
              <h2 class="u-heading-v2__title h6 text-uppercase mb-0">Sobre nós</h2>
            </div>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi viverra vitae nunc sit amet egestas. Ut accumsan sodales scelerisque. Etiam nunc ipsum, sollicitudin id arcu vitae, vulputate fermentum nisl. Ut facilisis nibh ac lorem pretium varius. Maecenas pulvinar ligula eu elementum imperdiet. Integer at porta ante. Suspendisse aliquam lobortis ligula, eget congue ligula mattis sit amet. Aenean nec urna a nunc vehicula euismod quis pellentesque justo. Donec sollicitudin interdum eleifend. Suspendisse fringilla vehicula nunc, in auctor dui commodo ac. Sed sed fringilla turpis. Proin tempor sapien arcu, eget iaculis metus condimentum et. </p>
          </div>
          <!-- End Footer Content -->

          <!-- Footer Content -->
          <div class="col-lg-3 col-md-6 g-mb-40 g-mb-0--lg">
            <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20">
              <h2 class="u-heading-v2__title h6 text-uppercase mb-0">Últimas notícias</h2>
            </div>

            <article>
              <h3 class="h6 g-mb-2">
            <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">Festa de São Dimas</a>
          </h3>
              <div class="small g-color-white-opacity-0_6">Jun 12, 2018</div>
            </article>

            <hr class="g-brd-white-opacity-0_1 g-my-10">

            <article>
              <h3 class="h6 g-mb-2">
            <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">Missa do Natal</a>
          </h3>
              <div class="small g-color-white-opacity-0_6">Dez 25, 2017</div>
            </article>

            <hr class="g-brd-white-opacity-0_1 g-my-10">
          </div>
          <!-- End Footer Content -->

          <!-- Footer Content -->
          <div class="col-lg-3 col-md-6">
            <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20">
              <h2 class="u-heading-v2__title h6 text-uppercase mb-0">Contato</h2>
            </div>

            <address class="g-bg-no-repeat g-font-size-12 mb-0" style="background-image: url(assets/img/maps/map2.png);">
          <!-- Location -->
          <div class="d-flex g-mb-20">
            <div class="g-mr-10">
              <span class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-color-white-opacity-0_6">
                <i class="fa fa-map-marker"></i>
              </span>
            </div>
            <p class="mb-0"> Pça. Monsenhor Ascânio Brandão, 01 <br> Jardim São Dimas <br> São José dos Campos - SP <br> CEP: 12245-440</p>
          </div>
          <!-- End Location -->

          <!-- Phone -->
          <div class="d-flex g-mb-20">
            <div class="g-mr-10">
              <span class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-color-white-opacity-0_6">
                <i class="fa fa-phone"></i>
              </span>
            </div>
            <p class="mb-0">(12) 3322-0543</p>
          </div>
          <!-- End Phone -->

          <!-- Email and Website -->
          <div class="d-flex g-mb-20">
            <div class="g-mr-10">
              <span class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-color-white-opacity-0_6">
                <i class="fa fa-globe"></i>
              </span>
            </div>
            <p class="mb-0">
              <a class="g-color-white-opacity-0_8 g-color-white--hover" href="mailto:saodimas@diocesesjc.org.br">saodimas@diocesesjc.org.br</a>
              <br>
              <a class="g-color-white-opacity-0_8 g-color-white--hover" href="http://www.catedralsaodimas.org.br/">http://www.catedralsaodimas.org.br/</a>
            </p>
          </div>
          <!-- End Email and Website -->
        </address>
          </div>
          <!-- End Footer Content -->
        </div>
      </div>
    </div>

  <script>
    $(document).on('ready', function () {
        $.HSCore.helpers.HSFocusState.init();
        $.HSCore.helpers.HSNotEmptyState.init();

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

        // initialization of input masking
        $.HSCore.components.HSMaskedInput.init('[data-mask]');

        // initialization of custom select
        $.HSCore.components.HSSelect.init('.js-custom-select');

        // initialization of HSScrollBar component
        $.HSCore.components.HSScrollBar.init( $('.js-scrollbar') );
      });

      $(window).on('load', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of HSMegaMenu component
        $('.js-mega-menu').HSMegaMenu({
          event: 'hover',
          pageContainer: $('.container'),
          breakpoint: 991
        });

        // initialization of horizontal progress bars
        setTimeout(function () { // important in this case
          var horizontalProgressBars = $.HSCore.components.HSProgressBar.init('.js-hr-progress-bar', {
            direction: 'horizontal',
            indicatorSelector: '.js-hr-progress-bar-indicator'
          });
        }, 1);
      });

      $(window).on('resize', function () {
        setTimeout(function () {
          $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
      });
  </script>

</body>

</html>
