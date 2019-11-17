<?php
include "inc/header.php";
$arquivo = "inicial";
?>

<body class="<?php echo $arquivo ?>">
  <div class="overlay"></div>
  <?php include "lay/topo.php"; // chama topo do site ?>

  <div id="sobre" class="wrap_banner" style="background: url('img/bg_2.png') center no-repeat; background-size: cover;"></div>

  <section class="wrap_intro">
    <div class="layout">
        <div class="foto"><span>It's me!</span></div>
        <div class="coluna centro">
            <h1>Desenvolvedora Web <strong>Frontend</strong></h1><hr>
            <p>Olá, tudo bem?<br> Me chamo Victoria, tenho 25 anos, sou de Vila Velha - Espírito Santo, atuo na área de Tecnologia há 7 anos, sendo 6 com Desenvolvimento Web. Desenvolvedora Web Front End pela <a href="http://www.poligonodigital.com.br">Polígono Digital</a> (MEI), participante de 4 startups sociais além de atender a demandas pontuais de clientes e agências. Graduanda em Análise e Desenvolvimento de Sistemas e autodidata.</p>
            <nav>
                <ul>
                    <li><a href="https://github.com/victoriamoura" target="_blank" title="Github"><i class="fa fa-github-square" aria-hidden="true"></i></a></li>
                    <li><a href="https://facebook.com/toriamoura" target="_blank" title="Facebook"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                    <li><a href="https://instagram.com/codewithvic" target="_blank" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/victoriamoura/" target="_blank" title="Linkedin"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                    <li><a href="http://bit.ly/2z5DIGI" target="_blank" title="Whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                </ul>
            </nav>
            <a data-id="modal-opcoes" class="botao_1 modal-trigger"><i class="fa fa-comments" aria-hidden="true"></i> Vamos conversar?</a>
        </div>  <!-- end of coluna centro  --> 
    </div>  <!-- end of layout  --> 
</section>  <!-- end of wrap_intro  --> 


<div class="wrap_servicos" style="background: url('img/bg_4.jpg') center no-repeat; background-size: cover;" id="servicos">
    <div class="layout">
        <div class="coluna">
            <div class="bloco">
                <i class="fa fa-code" aria-hidden="true"></i>
                <h3>Recortes HTML/CSS</h3>
                <p>Recortar ou fatiar em HTML e CSS significa transformar o desenho do seu site em páginas próprias para internet.</p>
            </div> <!-- end of bloco  --> 
        </div>  <!-- end of coluna  --> 
        <div class="coluna">
            <div class="bloco">
                <i class="fa fa-desktop" aria-hidden="true"></i>
                <h3>Sites Responsivos</h3>
                <p>Desenvolvimento de sites que se adaptam nos principais tamanhos de tela do mercado, incluindo tablets e celulares (mobile).</p>
            </div> <!-- end of bloco  --> 
        </div>  <!-- end of coluna  --> 
        <div class="coluna">
            <div class="bloco">
                <i class="fa fa-cogs" aria-hidden="true"></i>
                <h3>Painel Wordpress</h3>
                <p>Opcão de aplicação e utilização do principal CMS do mercado mundial atualmente para a gestão do conteúdo geral do site.</p>
            </div> <!-- end of bloco  --> 
        </div>  <!-- end of coluna  --> 
        <div class="coluna">
            <div class="bloco">
                <i class="fa fa-search" aria-hidden="true"></i>
                <h3>SEO</h3>
                <p>Algumas técnicas são aplicadas no desenvolvimento para a elevação de visibilidade e do posicionamento do seu site no Google.</p>
            </div> <!-- end of bloco  --> 
        </div>  <!-- end of coluna  --> 
    </div>  <!-- end of layout  --> 
</div>  <!-- end of wrap_servicos  --> 


<section class="wrap_portfolio" id="portfolio">
    <div class="layout">
        <h2>Últimos Trabalhos</h2><hr>
        <div class="galeria_trabalhos">
            <div class="item" style="background: url('img/portfolio/bg-inocoopes.png') center no-repeat; background-size: cover;">
                <div class="info">
                    <h3>Inocoopes</h3><hr>
                    <a href="http://www.inocoopes.com.br/" class="botao_confira" target="_blank" title="Site Inocoopes">Confira <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="item" style="background: url('img/portfolio/bg-mmurad.png') center no-repeat; background-size: cover;">
                <div class="info">
                    <h3>MMurad FGV</h3><hr>
                    <a href="http://www.mmurad.com.br/" class="botao_confira" target="_blank" title="Site MMurad FGV">Confira <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="item" style="background: url('img/portfolio/bg-examepelobem.png') center no-repeat; background-size: cover;">
                <div class="info">
                    <h3>Exame pelo bem</h3><hr>
                    <a href="http://www.examepelobem.com.br/" class="botao_confira" target="_blank" title="Site Exame pelo bem">Confira <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <?php /*
            <div class="item" style="background: url('img/portfolio/bg-rts.png') center no-repeat; background-size: cover;">
                <div class="info">
                    <h3>RTS Amazonas</h3><hr>
                    <a href="http://www.rts-amazonas.com.br/" class="botao_confira" target="_blank" title="Site EPS Facilities">Confira <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            */ ?>
            <div class="item" style="background: url('img/portfolio/bg-rpl.png') center no-repeat; background-size: cover;">
                <div class="info">
                    <h3>RPL Segurança</h3><hr>
                    <a href="http://www.rplseguranca.com.br/" class="botao_confira" target="_blank" title="Site EPS Facilities">Confira <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="item" style="background: url('img/portfolio/bg-sanoo.png') center no-repeat; background-size: cover;">
                <div class="info">
                    <h3>Sanoo</h3><hr>
                    <a href="http://www.sanoo.com.br/" class="botao_confira" target="_blank" title="Site Sanoo">Confira <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="item" style="background: url('img/portfolio/bg-fregonassi.png') center no-repeat; background-size: cover;">
                <div class="info">
                    <h3>F.Fregonassi</h3><hr>
                    <a href="http://www.ffregonassi.com.br/" class="botao_confira" target="_blank" title="Site FFregonassi">Confira <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="item" style="background: url('img/portfolio/bg-epsfacilities.png') center no-repeat; background-size: cover;">
                <div class="info">
                    <h3>EPS Facilities</h3><hr>
                    <a href="http://www.epsfacilities.com/" class="botao_confira" target="_blank" title="Site EPS Facilities">Confira <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="item" style="background: url('img/portfolio/bg-openport.png') center no-repeat; background-size: cover;">
                <div class="info">
                    <h3>Open Port</h3><hr>
                    <a href="http://www.openport.com.br/" class="botao_confira" target="_blank" title="Site Openport">Confira <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="item" style="background: url('img/portfolio/bg-pretti.png') center no-repeat; background-size: cover;">
                <div class="info">
                    <h3>Laboratório Pretti</h3><hr>
                    <a href="http://www.laboratoriopretti.com.br/" class="botao_confira" target="_blank" title="Site Laboratório Pretti">Confira <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="item" style="background: url('img/portfolio/bg-certcloud.png') center no-repeat; background-size: cover;">
                <div class="info">
                    <h3>Certcloud</h3><hr>
                    <a href="http://www.certcloud.com.br/" class="botao_confira" target="_blank" title="Site Openport">Confira <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="item" style="background: url('img/portfolio/bg-vetran.png') center no-repeat; background-size: cover;">
                <div class="info">
                    <h3>Vetran Rent Car</h3><hr>
                    <a href="http://www.vetran.com.br/" class="botao_confira" target="_blank" title="Site Vetran Rent Car">Confira <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="item" style="background: url('img/portfolio/bg-bpd.png') center no-repeat; background-size: cover;">
                <div class="info">
                    <h3>BPD Impressão de Dados</h3><hr>
                    <a href="http://www.bpd.com.br/" class="botao_confira" target="_blank" title="Site Vetran Rent Car">Confira <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>  <!-- end of wrap_portfolio  --> 

<div class="wrap_techs" id="contato">
    <div class="layout">
        <div class="coluna">
            <div class="owl-carousel">
                <div class="item"> <img src="img/logos/html5.png" title="HTML 5" alt="HTML 5"> </div>
                <div class="item"> <img src="img/logos/css3.png" title="CSS 3" alt="CSS 3"> </div>
                <div class="item"> <img src="img/logos/sass.png" title="SASS" alt="SASS"> </div>
                <div class="item"> <img src="img/logos/jquery.png" title="JQuery" alt="JQuery"> </div>
                <div class="item"> <img src="img/logos/javascript.png" title="Javascript" alt="Javascript"> </div>
                <div class="item"> <img src="img/logos/wordpress.png" title="Wordpress" alt="Wordpress"> </div>
                <div class="item"> <img src="img/logos/sublime.png" title="Sublime" alt="Sublime"> </div>
                <div class="item"> <img src="img/logos/photoshop.png" title="Photoshop" alt="Photoshop"> </div>
                <div class="item"> <img src="img/logos/github.png" title="Github" alt="Github"> </div>
            </div>
        </div>
    </div>
</div>  <!-- end of wrap_techs  -->


<?php include "lay/footer.php"; ?>