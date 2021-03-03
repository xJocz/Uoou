<?php
    require './controllers/main.php';
?>

<!doctype html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/custom.css">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script src="https://kit.fontawesome.com/44b7d6d5c2.js" crossorigin="anonymous"></script>
  <script src="./js/app.js"></script>

  <title>Uoou</title>
</head>

<body onload="onLoad()">
  <div class="container-fluid" style="margin-top: 8rem;">

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header bg-success text-white">
            <h5 class="modal-title" id="exampleModalLabel">Gráfico do estado selecionado</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span class="text-white" aria-hidden="true">&times;</span>
            </button>
          </div>
          <div id="modal-body" class="modal-body">
            <div id="modal_div" onresize="resizeModalGraph()"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <!-- Table column: placed on left -->
      <div class="col-sm-6 col-lg-3">
        <div class="col-table tb-group table-responsive">
          <table class="table table-hover table-bordered shadow">
            <thead class="bg-success text-white">
              <tr>
                <th scope="col">UF</th>
                <th scope="col">Casos</th>
                <th scope="col">Mortes</th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach($data->infectedByRegion as $resultCases) {
                  echo '
                    <tr style="cursor: pointer" onclick="openModal('. $countToTable . ')">
                      <th scope="row">'. $resultCases->state . '</th>
                      <td>'. $resultCases->count . '</td>';
                    $countToTable++;
                foreach($data->deceasedByRegion as $resultDies){
                  if ($resultCases->state == $resultDies->state) {
                  echo '<td>' . $resultDies->count . '</td>
                    </tr>';
                    }
                  };
                };
              ?>
            </tbody>
          </table>
        </div>
      </div>
      <!-- Cards column: placed on center -->
      <div class="d-none d-xl-block col-xl-5">
        <div class="card-group justify-content-center">
          <?php
            foreach($data->infectedByRegion as $resultCases) {
              echo '<div class="card-item justify-space-around">
                        <div class="card bg-light mb-3 rounded shadow" onclick="openModal('. $countToCard . ')" style="cursor: pointer;">
                        <div class="card-header bg-success text-white">
                          <h4 id="state' . $count .'">' . $resultCases->state . '</h4>
                          </div>
                        <div class="card-body cards">
                        <h6 class="card-title text-right" id="resultCases' . $count .'"><i class="fas fa-virus mr-1"></i>' . $resultCases->count . '</h6>';
              $count++;
              $countToCard++;
              foreach($data->deceasedByRegion as $resultDies) {
                if ($resultCases->state == $resultDies->state) {
                  $countDies;
                  echo '<p class="card-text text-right" id="resultDies' . $countDies .'"><i class="fas fa-cross text-danger mr-1"></i>' . $resultDies->count . '</p>
                      </div>
                    </div>
                  </div>';
                  $countDies++;
              }

            }
          }
        ?>
        </div>
      </div>
    <!-- Graph column: placed on right -->
    <div class="col-sm-6 col-lg-9 col-xl-4">
      <div class="row">
        <div class="col">
            <div class="card bg-light shadow">
              <div class="card-body">
                <h5 class="card-title">Ultimo update da base de dados: </h5>
                <p class="card-text"><?php $date=date_create($data->lastUpdatedAtApify);
                  echo date_format($date,"d/m/Y H:i:s"); ?></p>
              </div>
            </div>
        </div>
        <div class="col">
          <div class="card bg-light shadow">
            <div class="card-body">
              <h5 class="card-title">Data de consulta: </h5>
              <p class="card-text"><?php
                echo date("d/m/Y H:i:s"); ?></p>
            </div>
          </div>
      </div>
      </div>
      <div class="card my-3 shadow">
        <div class="card-body graph">
          <div id="dual_x_div" class="graph-group my-3 d-flex justify-content-center"></div>
        </div>
    </div>
  </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
    crossorigin="anonymous"></script>
</body>
</html>