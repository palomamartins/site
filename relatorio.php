<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Intrapix - Relatório Eletrônico IEP</title>
    <?php include 'resources/includes/head.inc.php'; ?>
</head>

<body>
    <?php include 'resources/includes/header.inc.php'; ?>

    <div class="content" id="ajax-content">
        <div class="text-intro">
            <div class="one-column">
                <h1>Relatório Eletrônico IEP</h1>
                <p>Responsive Website</p>
            </div>


            <div class="two-column">
                <p>O CLIENTE <br/>
                Hospital Moinhos de Vento
                </p><br>
                <p>O PROJETO <br/>
                Full corporate identity visual with various versions of the logo. The creative combination of letters of the company name: Bespoke Creative LTD. 
                </p>
                <br><br><br>
            </div>    
        </div>


        <img src="resources/img/full/relatorio.jpg" width="100%">


        <div class="prev-next">
            <div class="prev-button"><a class="ajax-link" href="single.html">Previous work</a></div>
            <div class="next-button"><a class="ajax-link" href="projects.html">Next work</a></div>
        </div>

    </div>

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