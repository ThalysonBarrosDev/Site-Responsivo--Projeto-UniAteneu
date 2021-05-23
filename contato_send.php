<?php

$nome  = $_POST(['nome']);
$email = $_POST(['email']);
$assunto = $_POST(['assunto']);
$mensagem = $_POST(['mensagem']);

?>

<!DOCTYPE html>
<html lang="PT-BR">

   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <title>BlogPix - Mensagem Enviada</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="icon" href="images/icone.png" type="image/gif" />
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <meta http-equiv="refresh" content="5; URL='http://localhost:8012/Projeto-Ateneu/'"/>
   </head>

   <body class="main-layout">

      <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="" /></div>
      </div>

      <header>
        <div class="container-fluid">
            <div class="row">
               <div class="col-lg-3 logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="index.html"><img src="images/logo.png" alt="#"></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li>
                                 <a href="index.html">Inicio</a>
                              </li>
                              <li>
                                 <a href="blog.html">Blog</a>
                              </li>
                              <li>
                                 <a href="fraudes.html">Fraudes</a>
                              </li>
                              <li>
                                 <a href="sobre.html">Sobre</a>
                              </li>
                              <li class="active">
                                 <a href="contato.php">Contato</a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
        </div>
      </header>

      <div class="contact-bg">
        <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="contactheading">
                     <h3>Agradecemos o seu contato!</h3>
                  </div>
               </div>
            </div>
        </div>
      </div>

      <section class="layout_padding">
        <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="full comment_form">
                    <h2>A sua mensagem foi enviada com sucesso.</h2>
                    <br>
                    <br>
                    <h2>Entraremos em contato com você em breve.</h2>
                    <br>
                  </div>
               </div>
            </div>
        </div>
      </section>
      
      <div class="cpy">
        <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <p>Copyright © 2021 - Desenvolvido por <a href="https://github.com/ThalysonBarrosDev/Site-Responsivo--Projeto-UniAteneu">Alunos UniAteneu</a></p>
               </div>
            </div>
        </div>
      </div>

      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="js/scripts.js"></script>

    </body>
</html>
