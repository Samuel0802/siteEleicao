<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--<meta http-equiv="refresh" content="5">-->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/voto.css">

    <link rel="shortcut icon" href="img/bandeira.png" />

    <title>Eleições 2020</title>
</head>

<body>
    <!-- cabeçalho -->  
    <nav class="navbar fixed-top" id="mainNav">
        <div class="container home-top">            
          <div class="container">
            <a href="home.html">
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

    <div class="container" style="margin-top: 10rem;">

      <div class="row voto-itens">
        <div class="col">
          <h5>2360 1733 2190 0141</h5>
          <span>Número Único de Identificação</span>
        </div>
  
        <div class="col">
          <h5>031</h5>
          <span>Zona Eleitoral</span>
        </div>

        <div class="col">
          <h5>0667</h5>
          <span>Seção Eleitoral</span>
        </div>

        <div class="col">
          <h5>E. E. Bem Ali Logo Lá</h5>
          <span>Local de Votação</span>
        </div>
      </div>

      <h5>Selecione um candidato para Dono de Tudo</h5>        
      <form name="formVotacao" method="post" action="php/conexao.php">

        <div class="row" style="margin-bottom: 5rem;">    

          <div class="btn-group btn-group-toggle" data-toggle="buttons">

            <label class="btn btn-secondary voto-candidatos">
              <input type="radio" name="options" id="option1"> 
                <h5>Hércules</h5>
                <span>PODEMOS</span>
            </label>

            <label class="btn btn-secondary voto-candidatos">
              <input type="radio" name="options" id="option2">
                <h5>Ronaldinho Gaúcho</h5>
                <span>PATRIOTA</span>
            </label>

            <label class="btn btn-secondary voto-candidatos">
              <input type="radio" name="options" id="option3">
                <h5>Patixa Teló</h5>
                <span>PARINTINS</span>
            </label>

            <label class="btn btn-secondary voto-candidatos">
              <input type="radio" name="options" id="option4">
                <h5>Ivanildo do 437</h5>
                <span>PARACOMISSO</span>
            </label>

            <label class="btn btn-secondary voto-candidatos">
              <input type="radio" name="options" id="option5">
                <h5>Haylo Neto</h5>
                <span>ESTÁCIOAM</span>
            </label>
          </div>
        </div>   

        <div class="row voto-button">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Registrar meu voto
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Confirmação de Voto</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Mussum Ipsum, cacilds vidis litro abertis. Viva Forevis aptent taciti sociosqu ad litora torquent. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. In elementis mé pra quem é amistosis quis leo. Aenean aliquam molestie leo, vitae iaculis nisl.
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-primary">Confirmar Voto</button>
                </div>
              </div>
            </div>
          </div>
        </div>

      </form>

    </div>
    
</body>

</html>