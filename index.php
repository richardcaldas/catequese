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

<!-- Header -->
    <header id="js-header" class="u-header u-header--static">
      <div class="u-header__section u-header__section--light g-bg-white g-transition-0_3 g-py-10">
        <nav class="js-mega-menu navbar navbar-expand-lg hs-menu-initialized hs-menu-horizontal">
          <div class="container">
            <!-- Responsive Toggle Button -->
            <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-minus-3 g-right-0" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
              <span class="hamburger hamburger--slider">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
              </span>
              </span>
            </button>
            <!-- End Responsive Toggle Button -->

            <!-- Navigation -->
            <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg g-mr-40--lg" id="navBar">
              <ul class="navbar-nav text-uppercase g-pos-rel g-font-weight-600">
                <!-- Intro -->
                <li class="nav-item  g-mx-10--lg g-mx-15--xl">
                  <a href="index.html" class="nav-link g-py-7 g-px-0">Intro</a>
                </li>
                <!-- End Intro -->

                <!-- Home -->
                <li class="hs-has-mega-menu nav-item active g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn" data-animation-out="fadeOut" data-max-width="100%" data-position="center">
                  <a id="mega-menu-home" class="nav-link g-py-7 g-px-0" href="#!" aria-haspopup="true" aria-expanded="false">Home
              <i class="hs-icon hs-icon-arrow-bottom g-font-size-11 g-ml-7"></i></a>

                  <!-- Mega Menu -->
                  <div class="w-100 hs-mega-menu u-shadow-v11 font-weight-normal g-brd-top g-brd-primary g-brd-top-2 g-bg-white g-mt-18 g-mt-8--lg--scrolling" aria-labelledby="mega-menu-home">
                    <div class="row align-items-stretch no-gutters">
                      <!-- Home (col) -->
                      <div class="col-lg-12">
                        <ul class="list-unstyled">
                          <li class="dropdown-item ">
                            <a href="home-default.html" class="nav-link">Default</a>
                          </li>
                          <li class="dropdown-item ">
                            <a href="home-incredible.html" class="nav-link">Incredible</a>
                          </li>
                          <li class="dropdown-item ">
                            <a href="home-studio.html" class="nav-link">Studio</a>
                          </li>
                          <li class="dropdown-item ">
                            <a href="home-allure.html" class="nav-link">Allure</a>
                          </li>
                          <li class="dropdown-item ">
                            <a href="home-inspire.html" class="nav-link">Inspire</a>
                          </li>
                          <li class="dropdown-item ">
                            <a href="home-portfolio.html" class="nav-link">Portfolio</a>
                          </li>
                          <li class="dropdown-item ">
                            <a href="home-creative.html" class="nav-link">Creative</a>
                          </li>
                          <li class="dropdown-item ">
                            <a href="home-projects.html" class="nav-link">Projects</a>
                          </li>
                        </ul>
                      </div>
                      <!-- End Home (col) -->
                    </div>
                  </div>
                  <!-- End Mega Menu -->
                </li>
                <!-- End Home -->
            </div>
            <!-- End Navigation -->

            <div class="d-inline-block g-hidden-md-down g-pos-rel g-valign-middle g-pl-30 g-pl-0--lg">
              <a class="btn u-btn-outline-primary g-font-size-13 text-uppercase g-py-10 g-px-15" href="login.php">Login</a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- End Header -->

    <!-- Promo Block -->
    <section class="g-flex-centered g-bg-pos-center g-bg-img-hero g-pos-rel g-z-index-1 g-overflow-hidden" style="background-image: url(assets/img-temp/1920x1080/img14.jpg);" data-calc-target="#js-header">
      <div class="g-pos-abs g-top-0 g-left-0" data-animation="fadeInDown" data-animation-delay="100" data-animation-duration="1500">
        <img class="img-fluid" src="assets/img-temp/1920x1080/img15.png" alt="Image Description">
      </div>
      <div class="g-pos-abs g-bottom-0 g-right-0" data-animation="fadeInUp" data-animation-delay="1800" data-animation-duration="1500">
        <img class="img-fluid" src="assets/img-temp/1920x1080/img16.png" alt="Image Description">
      </div>

      <div class="container text-center g-z-index-1">
        <div class="mb-4">
          <h1 class="h2 d-inline-block g-color-black g-font-weight-700 g-font-size-40 g-font-size-75--md text-uppercase g-line-height-1" data-animation="fadeInDown" data-animation-delay="1000" data-animation-duration="1500">Catequese</h1>
          <h2 class="h2 d-inline-block g-color-primary g-font-weight-700 g-font-size-40 g-font-size-75--md text-uppercase g-line-height-1" data-animation="fadeInDown" data-animation-delay="1200" data-animation-duration="1500">São</h2>
          <h2 class="h2 d-inline-block g-color-primary g-font-weight-700 g-font-size-40 g-font-size-75--md text-uppercase g-line-height-1" data-animation="fadeInDown" data-animation-delay="1400" data-animation-duration="1500">Dimas</h2>
        </div>

        <div class="mx-auto g-max-width-600 g-overflow-hidden">
          <p class="g-color-black g-font-size-18 g-font-size-24--md g-mb-40" data-animation="fadeInDown" data-animation-delay="1600" data-animation-duration="1500">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et justo sit amet nisl elementum laoreet euismod sed lorem.
          </p>
        </div>

        <div data-animation="fadeInDown" data-animation-delay="2000" data-animation-duration="1500">
          <a class="btn btn-lg u-btn-outline-black g-font-weight-600 g-font-size-13 text-uppercase g-rounded-50 mx-2 g-px-25 g-py-15" href="#!">Descubra</a>
          <a class="btn btn-lg u-btn-primary g-font-weight-600 g-font-size-13 text-uppercase g-rounded-50 mx-2 g-px-25 g-py-15" href="#!">Cadastre-se</a>
        </div>
      </div>
    </section>
    <!-- End Promo Block -->


    
    <!-- Our Services -->
    <section class="g-bg-secondary g-py-100">
      <div class="container">
        <header class="text-center g-width-80x--md mx-auto g-mb-70">
          <div class="u-heading-v6-2 text-center text-uppercase g-mb-20">
            <h6 class="g-font-size-12 g-font-weight-600">Catequese</h6>
            <h2 class="h3 u-heading-v6__title g-brd-primary g-color-gray-dark-v2 g-font-weight-600">O que é catequese?</h2>
          </div>
          <p class="lead">Os sete dons do Espírito Santo são também uma graça de Deus, contudo, não podemos fazer com que eles cresçam e se desenvolvam apenas pelo nosso esforço, necessitamos de uma ação direta do Espírito Santo para vivermos de acordo com a virtude e perfeição cristã. </p>
        </header>

        <!-- Icon Blocks -->
        <div class="row">
          <div class="col-lg-6 g-mb-30">
            <!-- Icon Blocks -->
            <div class="u-shadow-v21 g-bg-white rounded g-pa-30">
              <div class="media g-mb-15">
                <div class="d-flex mr-4">
                  <span class="g-color-gray-dark-v5 g-font-size-26">
                    <i class="fas fa-church fa-lg"></i>
                  </span>
                </div>
                <div class="media-body">
                  <h3 class="h5 g-color-black mb-20">Fortaleza</h3>
                  <div class="g-width-30 g-brd-bottom g-brd-primary g-my-15"></div>
                  <p class="g-color-gray-dark-v4 g-mb-0">Resistência, coragem e perseverança.</p>
                </div>
              </div>
            </div>
            <!-- End Icon Blocks -->
          </div>

          <div class="col-lg-6 g-mb-30">
            <!-- Icon Blocks -->
            <div class="u-shadow-v21 g-bg-white rounded g-pa-30">
              <div class="media g-mb-15">
                <div class="d-flex mr-4">
                  <span class="g-color-gray-dark-v5 g-font-size-26">
                    <i class="fas fa-cross fa-lg"></i>
                  </span>
                </div>
                <div class="media-body">
                  <h3 class="h5 g-color-black mb-20">Temor a Deus</h3>
                  <div class="g-width-30 g-brd-bottom g-brd-primary g-my-15"></div>
                  <p class="g-color-gray-dark-v4 g-mb-0">Parceria com Deus, respeito, prudência e humildade.</p>
                </div>
              </div>
            </div>
            <!-- End Icon Blocks -->
          </div>
        </div>
        <!-- End Icon Blocks -->

        <!-- Icon Blocks -->
        <div class="row">
          <div class="col-lg-6 g-mb-30">
            <!-- Icon Blocks -->
            <div class="u-shadow-v21 g-bg-white rounded g-pa-30">
              <div class="media g-mb-15">
                <div class="d-flex mr-4">
                  <span class="g-color-gray-dark-v5 g-font-size-26">
                    <i class="fab fa-react fa-lg"></i>
                  </span>
                </div>
                <div class="media-body">
                  <h3 class="h5 g-color-black mb-20">Ciência</h3>
                  <div class="g-width-30 g-brd-bottom g-brd-primary g-my-15"></div>
                  <p class="g-color-gray-dark-v4 g-mb-0">Conhecimento. Enxergar com os olhos de Deus e revelação dos pensamentos divinos.</p>
                </div>
              </div>
            </div>
            <!-- End Icon Blocks -->
          </div>

          <div class="col-lg-6 g-mb-30">
            <!-- Icon Blocks -->
            <div class="u-shadow-v21 g-bg-white rounded g-pa-30">
              <div class="media g-mb-15">
                <div class="d-flex mr-4">
                  <span class="g-color-gray-dark-v5 g-font-size-26">
                    <i class="fas fa-dove fa-lg"></i>
                  </span>
                </div>
                <div class="media-body">
                  <h3 class="h5 g-color-black mb-20">Sabedoria</h3>
                  <div class="g-width-30 g-brd-bottom g-brd-primary g-my-15"></div>
                  <p class="g-color-gray-dark-v4 g-mb-0">Verdadeiros valores da vida, saborear as coisas de Deus, saber o certo e o errado.</p>
                </div>
              </div>
            </div>
            <!-- End Icon Blocks -->
          </div>
        </div>
        <!-- End Icon Blocks -->


                <!-- Icon Blocks -->
        <div class="row">
          <div class="col-lg-6 g-mb-30">
            <!-- Icon Blocks -->
            <div class="u-shadow-v21 g-bg-white rounded g-pa-30">
              <div class="media g-mb-15">
                <div class="d-flex mr-4">
                  <span class="g-color-gray-dark-v5 g-font-size-26">
                    <i class="fas fa-hand-holding-heart fa-lg"></i>
                  </span>
                </div>
                <div class="media-body">
                  <h3 class="h5 g-color-black mb-20">Piedade</h3>
                  <div class="g-width-30 g-brd-bottom g-brd-primary g-my-15"></div>
                  <p class="g-color-gray-dark-v4 g-mb-0">Sentimento de sermos amados como filhos. Agir como Jesus.</p>
                </div>
              </div>
            </div>
            <!-- End Icon Blocks -->
          </div>

          <div class="col-lg-6 g-mb-30">
            <!-- Icon Blocks -->
            <div class="u-shadow-v21 g-bg-white rounded g-pa-30">
              <div class="media g-mb-15">
                <div class="d-flex mr-4">
                  <span class="g-color-gray-dark-v5 g-font-size-26">
                    <i class="fas fa-bible fa-lg"></i>
                  </span>
                </div>
                <div class="media-body">
                  <h3 class="h5 g-color-black mb-20">Conselho</h3>
                  <div class="g-width-30 g-brd-bottom g-brd-primary g-my-15"></div>
                  <p class="g-color-gray-dark-v4 g-mb-0">Distinção do caminho certo, saber orientar e animar a fé.</p>
                </div>
              </div>
            </div>
            <!-- End Icon Blocks -->
          </div>
        </div>
        <!-- End Icon Blocks -->

        <!-- Icon Blocks -->
        <div class="row">
          <div class="col-lg-6 g-mb-30">
            <!-- Icon Blocks -->
            <div class="u-shadow-v21 g-bg-white rounded g-pa-30">
              <div class="media g-mb-15">
                <div class="d-flex mr-4">
                  <span class="g-color-gray-dark-v5 g-font-size-26">
                    <i class="fas fa-brain fa-lg"></i>
                  </span>
                </div>
                <div class="media-body">
                  <h3 class="h5 g-color-black mb-20">Inteligência</h3>
                  <div class="g-width-30 g-brd-bottom g-brd-primary g-my-15"></div>
                  <p class="g-color-gray-dark-v4 g-mb-0">Compreensão, entendimento dos sinais da presença de Deus. Vontade e verdade de Deus.</p>
                </div>
              </div>
            </div>
            <!-- End Icon Blocks -->
          </div>
      </div>
    </section>
    <!-- End Our Services -->

   <?php include 'footer.html';?>

     <a class="js-go-to u-go-to-v1" href="#!" data-type="fixed" data-position='{"bottom": 15,"right": 15}' data-offset-top="400" data-compensation="#js-header" data-show-effect="zoomIn">
      <i class="hs-icon hs-icon-arrow-top"></i>
    </a>
  </main>

  <div class="u-outer-spaces-helper"></div>


  <!-- JS Global Compulsory -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
  <script src="assets/vendor/popper.min.js"></script>
  <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>


  <!-- JS Implementing Plugins -->
  <script src="assets/vendor/appear.js"></script>
  <script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
  <script src="assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
  <script src="assets/vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
  <script src="assets/vendor/dzsparallaxer/advancedscroller/plugin.js"></script>
  <script src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>
  <script src="assets/vendor/typedjs/typed.min.js"></script>
  <script src="assets/vendor/circles/circles.min.js"></script>

  <!-- JS Unify -->
  <script src="assets/js/hs.core.js"></script>
  <script src="assets/js/components/hs.header.js"></script>
  <script src="assets/js/helpers/hs.hamburgers.js"></script>
  <script src="assets/js/helpers/hs.height-calc.js"></script>
  <script src="assets/js/components/hs.tabs.js"></script>
  <script src="assets/js/components/hs.popup.js"></script>
  <script src="assets/js/components/text-animation/hs.text-slideshow.js"></script>
  <script src="assets/js/components/hs.rating.js"></script>
  <script src="assets/js/components/hs.onscroll-animation.js"></script>
  <script src="assets/js/components/hs.counter.js"></script>
  <script src="assets/js/components/hs.chart-pie.js"></script>
  <script src="assets/js/components/hs.go-to.js"></script>

  <!-- JS Customization -->
  <script src="assets/js/custom.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

        // initialization of header height offset
        $.HSCore.helpers.HSHeightCalc.init();

        // initialization of scroll animation
        $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');

        // initialization of counters
        var counters = $.HSCore.components.HSCounter.init('[class*="js-counter"]');

        // initialization of chart pies with rtl option
        var rtlItems = $.HSCore.components.HSChartPie.init('.js-pie-rtl', {
          rtl: true
        });

        // initialization of rating
        $.HSCore.components.HSRating.init($('.js-rating'), {
          spacing: 4
        });

        // initialization of popups with media
        $.HSCore.components.HSPopup.init('.js-fancybox-media', {
          helpers: {
            media: {},
            overlay: {
              css: {
                'background': 'rgba(255, 255, 255, .8)'
              }
            }
          }
        });

        // initialization of text animation (typing)
        $(".u-text-animation.u-text-animation--typing").typed({
          strings: [
            "awesome template",
            "perfect template",
            "just like a boss"
          ],
          typeSpeed: 60,
          loop: true,
          backDelay: 1500
        });

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');
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
      });

      $(window).on('resize', function () {
        setTimeout(function () {
          $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
      });
  </script>






  
</body>

</html>
