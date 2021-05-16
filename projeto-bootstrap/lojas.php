<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/estilo.css" />
    <script src="./js/funcoes.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <title>Nossas lojas - Full Stack Eletro</title>
  </head>
  <body>
    <div class="container-fluid">
    <!-- Início do Menu -->
   <?php include_once('menu.html') ?>

    <!--FIM DO MENU -->
    <h2>Nossas lojas</h2>
    <hr />
      <main class="lojas row">
        <div class="loja col-3">
          <h3>Rio de Janeiro</h3>
          <p>Avenida Presidente Vargas, 5000</p>
          <p>10 &ordm; andar</p>
          <p>Centro</p>
          <p>(21) 3333-3333</p>
        </div>

        <div class="loja col-3">
          <h3>São Paulo</h3>
          <p>Avenida Paulista, 985</p>
          <p>3 &ordm; andar</p>
          <p>Jardins</p>
          <p>(11) 4444-4444</p>
        </div>

        <div class="loja col-3">
          <h3>Santa Catarina</h3>
          <p>Rua Major &Aacute; vila, 370</p>
          <p>Vila Mariana</p>
          <p>(47) 5555-5555</p>
          <br />
        </div>
    </main>
    <br /><br /><br /><br /><br />
    <br /><br /><br /><br /><br />
    <br /><br /><br /><br /><br />
    <br /><br /><br /><br /><br />

    <footer id="rodape">
      <p id="formas_pagamento">
        <b>Formas de pagamento</b>
      </p>
      <img
        width="420px"
        src="./imagens/formas-pagamento.jpeg"
        alt="Formas de pagamento"
      />
      <p>&copy; Recode Pro</p>
    </footer>
    </div>
  </body>
</html>
