<!doctype html>

<html>
<head>
    <title>Intrapix Brand Systems</title>
    <?php include 'resources/includes/head.inc.php'; ?>
    <link rel="stylesheet" href="resources/css/home.css">
</head>

<body>
    <?php include 'resources/includes/header.inc.php'; ?>

    <div class="top-wrap">  
        <div class="content" id="ajax-content">
            <div class="text-intro" id="site-type">
                <h1>CRIAMOS NOVAS CONEXÕES</h1>
                <h1 class="typewrite"><span>&nbsp</span></h1>

                <p>A Intrapix é uma empresa de projetos e consultoria, inovando através de sistemas de identidade e tecnologia para marcas.</p>
                <p><strong>O digital é nosso meio, o mundo nosso alvo.</strong></p>
            </div>
        </div>
    </div>
    
    <div class="content" id="ajax-content">
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

    <!--Footer-->

    <footer>
        <?php include 'resources/includes/footer.inc.php'; ?>
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