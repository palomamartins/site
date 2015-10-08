<!doctype html>

<html>
<head>
    <title>Intrapix Brand Systems</title>
    <?php include 'resources/includes/head.inc.php'; ?>
</head>

<body>
    <?php include 'resources/includes/header.inc.php'; ?>

  <div class="content" id="ajax-content">


        <div class="text-intro">

          <h1>Portfólio</h1>
          <!-- <p>Please check my portfolio. All project is clean and simplicity modern style. You can buy this template.</p> -->

        </div>


  <!--Portfolio grid-->

  <ul class="portfolio-grid">

    
            <li class="grid-item" data-jkit="[show:delay=1500;speed=500;animation=fade;]">
                <img src="resources/img/portfolio/fronteiras-thumb.jpg">
                <a href="fronteiras.php">  
                    <div class="grid-hover">
                        <h1>Fronteiras da Medicina</h1>
                        <p>Responsive Website</p>
                    </div>
                </a>  
            </li>
            <li class="grid-item" data-jkit="[show:delay=1500;speed=500;animation=fade]">
                <img src="resources/img/portfolio/pesquisa-thumb.jpg">
                <a href="pesquisa.php">  
                    <div class="grid-hover">
                        <h1>Portal de Pesquisa IEP</h1>
                        <p>Responsive Website</p>
                    </div>
                </a>  
            </li>
            <li class="grid-item" data-jkit="[show:delay=1500;speed=500;animation=fade]">
                <img src="resources/img/portfolio/relatorio-thumb.jpg">
                <a href="relatorio.php">  
                    <div class="grid-hover">
                        <h1>Relatório Eletrônico IEP</h1>
                        <p>Responsive Website</p>
                    </div>
                </a>  
            </li>

  </ul>

  </div>



  <!--Home Sidebar-->

<div id="ajax-sidebar"></div>


  
  <footer id="ajax-footer">

    <div class="footer-margin">
      <div class="social-footer">
        <a href="resources/https://www.facebook.com/thomsooncom"><i class="fa fa-facebook"></i></a>
        <a href="resources/https://www.behance.net/TomaszMazurczak"><i class="fa fa-behance"></i></a>
      
      </div>     
      <div class="copyright">© Copyright 2015 Thomsoon.com. All Rights Reserved.</div>
    
    </div>


  </footer>


<!--Scripts-->

  <script src="resources/js/jquery.min.js"></script>
  <script src="resources/js/jquery.easing.min.js"></script>
  <script src="resources/js/modernizr.custom.42534.js" type="text/javascript"></script>
  <script src="resources/js/jquery.waitforimages.js" type="text/javascript"></script>
  <script src="resources/js/typed.js" type="text/javascript"></script>
  <script src="resources/js/masonry.pkgd.min.js" type="text/javascript"></script>  
  <script src="resources/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>    
  <script src="resources/js/jquery.jkit.1.2.16.min.js"></script>
 
  <script src="resources/js/script.js" type="text/javascript"></script>
  
  <script>
    $('#button, #buttons').on('click', function() {
      $( ".opacity-nav" ).fadeToggle( "slow", "linear" );
    // Animation complete.
    });
  </script>


</body>
</html>