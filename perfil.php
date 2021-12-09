<?php
    // PHP 7
    $link = mysqli_connect("localhost", "root", "", "eleicao_db");

    $query = 'SELECT * FROM eleitor WHERE id = "1" ';
    $result = mysqli_query($link, $query);
	  $dados = mysqli_fetch_assoc($result);
    $total = mysqli_num_rows($result);
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--<meta http-equiv="refresh" content="5">-->

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/general.css">
  <link rel="stylesheet" href="css/perfil.css">

  <link rel="shortcut icon" href="img/bandeira.png" />

  <title>Eleições 2020</title>
</head>

<body>
  <!-- cabeçalho -->
  <nav class="navbar fixed-top" id="mainNav">
    <div class="container">
      <a href="home.php">
        <div class="container-logo">Eleições 2020</div>
      </a>

      <div class="info">
        <div class="info-text">
          <span>Bem vindo, </span>
          <span>Rodrigo Azevedo da Costa</span>
        </div>

        <div class="info-img"></div>
      </div>

    </div>
  </nav>

  <!-- formulário de perfil  -->
  <div class="container perfil-content">
    <div class="row">
      <div class="col"></div>

      <div class="col-5">
        <form id="formPerfil" name="formPerfil" method="post" action="php/salvarPerfil.php">

          <div class="text-center">
            <img src="img/perfil.jpg" alt="Imagem de Perfil" width="150" height="150" class="rounded-circle">

            <a href="#" title="Trocar foto de perfil">
              <label class="btn btn-default btn-file">

                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-camera-fill" fill="currentColor"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                  <path fill-rule="evenodd"
                    d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z" />
                </svg>

                <input type="file" accept="image/*" style="display: none;">
              </label>
            </a>
          </div>

          <h5>Meu Perfil</h5>
          <hr>

          <div class="form-group">
            <svg class="form-svg" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill"
              fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
            </svg>

            <input type="text" class="form-control" id="formGroupExampleInput" name="nome" value="<?php echo $dados['nome']; ?>" placeholder="Nome Completo">
          </div>

          <div class="form-group">
            <svg class="form-svg" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-list"
              fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
              <path fill-rule="evenodd"
                d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z" />
              <circle cx="3.5" cy="5.5" r=".5" />
              <circle cx="3.5" cy="8" r=".5" />
              <circle cx="3.5" cy="10.5" r=".5" />
            </svg>

            <input type="email" class="form-control" id="formGroupExampleInput2" name="email" value="<?php echo $dados['email']; ?>" placeholder="Email">
          </div>

          <div class="form-group">
            <svg class="form-svg" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-people-fill"
              fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
            </svg>

            <select class="form-control" id="exampleFormControlSelect2">              
              <option value="masculino"              
                <?php if ($dados['sexo'] == 'masculino') { ?> selected <?php } ?>              
              >Masculino</option>

              <option selected value="feminino"
                <?php if ($dados['sexo'] == 'feminino') { ?> selected <?php } ?>
              >Feminino</option>
            </select>
          </div>

          <div class="form-group">
            <svg class="form-svg" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-key-fill"
              fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
            </svg>

            <input type="password" class="form-control" id="formGroupExampleInput3" placeholder="Senha">
          </div>

          <div class="form-group">
            <svg class="form-svg" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-key-fill"
              fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
            </svg>

            <input type="password" class="form-control" id="formGroupExampleInput4" placeholder="Confirmar Senha">
          </div>

          <div class="form-group">
            <button name="saveProfile" class="btn btn-primary btn-block">Atualizar Dados</button>
          </div>

        </form>
      </div>

      <div class="col"></div>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>

  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>