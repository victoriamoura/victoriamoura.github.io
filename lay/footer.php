<footer>
  <div class="layout">
    <div class="centro">
      <h2>Contato</h2>
      <p>skype: mouravictoria</p>
      <p>Vitória - ES / Brasil</p>
      <p>contato<strong>[arroba]</strong>victoriamoura.com</p>
      <nav>
        <ul>
         <li><a href="https://github.com/victoriamoura" target="_blank" title="Github"><i class="fa fa-github-square" aria-hidden="true"></i></a></li>
         <li><a href="https://facebook.com/toriamoura" target="_blank" title="Facebook"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
         <li><a href="https://instagram.com/wwwvictoriamouracom" target="_blank" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
         <li><a href="https://behance.com/mouravictoria" target="_blank" title="Behance"><i class="fa fa-behance-square" aria-hidden="true"></i></a></li>
         <li><a href="https://www.linkedin.com/in/victoriamoura/" target="_blank" title="Linkedin"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
         <li><a href="http://bit.ly/2z5DIGI" target="_blank" title="Whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
       </ul>
     </nav>  <!-- end of nav  --> 
     <p class="copy">Copyright © 2017 Victoria Moura </p>
   </div>  <!-- end of centro  --> 
 </div>  <!-- end of layout  --> 
</footer>  <!-- end of footer  --> 

<div class="modal-opcoes modal-box" id="modal-opcoes">
  <a class="fechar" title="Fechar"><i class="fa fa-times" aria-hidden="true"></i></a>
  <div class="bloco">
    <h2>Vamos conversar?</h2>
    <div class="ckeditor">
      <p>Escolha a forma de contato:</p>
    </div>
    <div class="opcoes">
      <a class="botao_opcao" title="Enviar Email" href="mailto:victoriamoura@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i> Enviar email</a>
      <a class="botao_opcao" title="Ligar Agora" href="tel:27992441990"><i class="fa fa-whatsapp" aria-hidden="true"></i> Ligar agora</a>
      <a class="botao_opcao" title="Chamar no Messenger" href="https://www.messenger.com/t/toriamoura" target="_blank"><i class="fa fa-commenting" aria-hidden="true"></i> Chamar no Messenger</a>
    </div>
  </div>   <!-- end of thanksnewsletter  --> 
</div>   <!-- end of thankyou  --> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/scroll.js"></script>
<script>
 <?php // Definindo URL para arquivo JS da página
 $urljs = "js/" . $arquivo . ".js";

  if (file_exists($urljs)) { // Caso o arquivo exista
      include $urljs; // ele será incluído nesta tag <script>
    }; 

    include "js/standard.js";
    ?>
  </script>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-105719261-1', 'auto');
    ga('send', 'pageview');

  </script>
</body>
</html>