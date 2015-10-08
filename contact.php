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

          <h1>Contato</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolor, temporibus, alias illum totam libero nisi ab.</p>

          <form method="post" class="contact-form" action="#"  data-jkit="[form:validateonly=true]">
          
          <div class="contact-one">
            <p>
              <label for="miniusername">Nome:</label><br />
              <input name="miniusername" id="miniusername"  type="text" data-jkit="[validate:required=true;min=2;max=10;error=Por favor, informe seu nome]">
            </p>
          </div>  
          
          <div class="contact-two">  
            <p>
              <label for="miniemail">E-mail:</label><br />
              <input name="miniemail" id="miniemail" type="email"  data-jkit="[validate:required=true;strength=50;error=Por favor, informe seu e-mail]">
            </p>
          </div>
          
          <div class="contact-three">  
            <p>
              <label for="miniphone">Telefone:</label><br />
              <input name="miniphone" id="miniphone" type="phone"  data-jkit="[validate:required=true;error=Por favor, informe seu telefone]">
            </p>
          </div>  
          
          <div class="contact-four">  
            <p>
              <label>Mensagem:</label><br />
              <textarea id="message" name="message"></textarea><br/><br/>
              
              <input class="button-submit" name="send" type="submit" value="ENVIAR" />
            </p>
          </div>            
            
            <p>
            </p>
          </form>
          
          
        </div>
        
	<br/><br/><br/><br/><br/><br/><br/><br/>      
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