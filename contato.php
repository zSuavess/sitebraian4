<?php

  if(isset($_POST['submit'])) 
  {
  //    print_r($_POST['nome']);
  //    print_r ('<br>');
  //    print_r($_POST['email']);
  //    print_r ('<br>');
  //    print_r($_POST['genero']);
  //    print_r ('<br>');
  //    print_r($_POST['data_nascimento']);
  //    print_r ('<br>');
  //    print_r($_POST['mensagem']);
  
  include_once('config.php');
  
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $mensagem = $_POST['mensagem'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,sexo,data_nasc,mensagem) 
    VALUES ('$nome','$email','$sexo','$data_nasc','$mensagem')");
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/main.css" />

    <style>
      body{
          
          background-image: linear-gradient(to right, rgb(236, 236, 236), rgb(236, 236, 236));
      }
      .box{
          color: rgb(0, 0, 0);
          position: absolute;
          top: 40%;
          left: 50%;
          transform: translate(-50%,-50%);
          background-color: rgb(212, 212, 212);
          padding: 15px;
          border-radius: 15px;
          width: 45%;
          height: 10%;
          
      }

      legend{
          border: 1px solid rgb(190, 9, 9);
          padding: 10px;
          text-align: center;
          background-color: rgb(248, 76, 76);
          border-radius: 8px;
      }
      .inputBox{
          position: relative;
      }
      .inputUser{
          background: none;
          border: none;
          border-bottom: 1px solid rgb(0, 0, 0);
          outline: none;
          color: rgb(0, 0, 0);
          font-size: 15px;
          width: 100%;
          letter-spacing: 2px;
      }
      .labelInput{
          position: absolute;
          top: 0px;
          left: 0px;
          pointer-events: none;
          transition: .5s;
      }
      .inputUser:focus ~ .labelInput,
      .inputUser:valid ~ .labelInput{
          top: -20px;
          font-size: 12px;
          color: rgb(248, 76, 76);
      }
      #data_nascimento{
          border: none;
          padding: 8px;
          border-radius: 10px;
          outline: none;
          font-size: 15px;
      }
      #submit{
          background-image: linear-gradient(to right,rgb(248, 76, 76), rgb(255, 41, 41));
          width: 100%;
          border: none;
          padding: 15px;
          color: rgb(0, 0, 0);
          font-size: 17px;
          cursor: pointer;
          border-radius: 10px;
      }
      #submit:hover{
          background-image: linear-gradient(to right,rgb(255, 45, 45), rgb(248, 76, 76));
      }
  </style>

    <title>Contato - FreeGames</title>
  </head>
  <hr></hr>
  <body style="background-color: rgb(236, 236, 236);">
    
    <!-- HEADER -->
    <div id="header"></div>
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light  justify-content-between justify-danger" style="background-color: rgb(236, 236, 236);">
                <a class="navbar-brand" href="#">
                <img src="assets/logo_freegames-removebg-preview.png" class="img-fluid" width="250px"/>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse just" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="promocoes.html">Promoções</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="games.html">Games</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="contato.html">Contato</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</div>
      <!-- //HEADER -->
<hr></hr>

<div class="box">
  <form action="contato.php" method="POST">
      <fieldset>
          <legend><b>Como podemos lhe ajudar?</b></legend>
          <br>
          <br>
          <br>
          <div class="inputBox">
              <input type="text" name="nome" id="nome" class="inputUser" required>
              <label for="nome" class="labelInput">Nome completo</label>
          </div>
          <br><br>
          <div class="inputBox">
              <input type="text" name="email" id="email" class="inputUser" required>
              <label for="email" class="labelInput">Email</label>
          </div>
          <br>
          <p>Sexo:</p>
          <input type="radio" id="feminino" name="genero" value="feminino" required>
          <label for="feminino">Feminino</label>
          <br>
          <input type="radio" id="masculino" name="genero" value="masculino" required>
          <label for="masculino">Masculino</label>
          <br>
          <input type="radio" id="outro" name="genero" value="outro" required>
          <label for="outro">Outro</label>
          <br><br>
          <label for="data_nascimento"><b>Data de Nascimento:</b></label>
          <input type="date" name="data_nascimento" id="data_nascimento" required>
          <br><br>
          <div class="inputBox">
              <input type="text" name="mensagem" id="mensagem" class="inputUser" required>
              <label for="mensagem" class="labelInput">Digite sua mensagem</label>
          </div>
          <br><br>
          <input type="submit" name="submit" id="submit">
      </fieldset>
  </form>
  
</div>



</body>
</html>