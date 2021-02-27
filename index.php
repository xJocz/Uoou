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
  <script src="./js/app.js"></script>

  <title>Uoou</title>
</head>

<body>
  <div class="container-fluid" style="margin-top: 8rem;">
    <div class="row">
      <!-- Table column: placed on left -->
      <div class="col-md-3">
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
                  <tr>
                    <th scope="row">'. $resultCases->state . '</th>
                    <td>'. $resultCases->count . '</td>';

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
      <!-- Cards column: placed on center -->
      <div class="col-md-5 col-lg-5 col-xl-5">
        <div class="card-group justify-content-center">
          <div class="card-item">
            <div class="card bg-light mb-3 rounded shadow">
              <div class="card-header bg-success text-white">
                <h2>SP</h2>
              </div>
              <div class="card-body">
                <h5 class="card-title text-right"><i class="fas fa-virus mr-2"></i>2014529</h5>
                <p class="card-text text-right"><i class="fas fa-cross text-danger mr-2"></i>58873</p>
              </div>
            </div>
          </div>

          <div class="card-item">
            <div class="card bg-light mb-3 rounded shadow">
              <div class="card-header bg-success text-white">
                <h2>SP</h2>
              </div>
              <div class="card-body">
                <h5 class="card-title text-right"><i class="fas fa-virus mr-2"></i></i>2014529</h5>
                <p class="card-text text-right"><i class="fas fa-cross text-danger mr-2"></i>>58873</p>
              </div>
            </div>
          </div>
          <div class="card-item">
            <div class="card bg-light mb-3 rounded shadow">
              <div class="card-header bg-success text-white">
                <h2>SP</h2>
              </div>
              <div class="card-body">
                <h5 class="card-title text-right"><i class="fas fa-virus mr-2"></i></i>2014529</h5>
                <p class="card-text text-right"><i class="fas fa-cross text-danger mr-2"></i>>58873</p>
              </div>
            </div>
          </div>
          <div class="card-item">
            <div class="card bg-light mb-3 rounded shadow">
              <div class="card-header bg-success text-white">
                <h2>SP</h2>
              </div>
              <div class="card-body">
                <h5 class="card-title text-right"><i class="fas fa-virus mr-2"></i></i>2014529</h5>
                <p class="card-text text-right"><i class="fas fa-cross text-danger mr-2"></i>>58873</p>
              </div>
            </div>
          </div>
          <div class="card-item">
            <div class="card bg-light mb-3 rounded shadow">
              <div class="card-header bg-success text-white">
                <h2>SP</h2>
              </div>
              <div class="card-body">
                <h5 class="card-title text-right"><i class="fas fa-virus mr-2"></i></i>2014529</h5>
                <p class="card-text text-right"><i class="fas fa-cross text-danger mr-2"></i>>58873</p>
              </div>
            </div>
          </div>
          <div class="card-item">
            <div class="card bg-light mb-3 rounded shadow">
              <div class="card-header bg-success text-white">
                <h2>SP</h2>
              </div>
              <div class="card-body">
                <h5 class="card-title text-right"><i class="fas fa-virus mr-2"></i></i>2014529</h5>
                <p class="card-text text-right"><i class="fas fa-cross text-danger mr-2"></i>>58873</p>
              </div>
            </div>
          </div>
          <div class="card-item">
            <div class="card bg-light mb-3 rounded shadow">
              <div class="card-header bg-success text-white">
                <h2>SP</h2>
              </div>
              <div class="card-body">
                <h5 class="card-title text-right"><i class="fas fa-virus mr-2"></i></i>2014529</h5>
                <p class="card-text text-right"><i class="fas fa-cross text-danger mr-2"></i>>58873</p>
              </div>
            </div>
          </div>
          <div class="card-item">
            <div class="card bg-light mb-3 rounded shadow">
              <div class="card-header bg-success text-white">
                <h2>SP</h2>
              </div>
              <div class="card-body">
                <h5 class="card-title text-right"><i class="fas fa-virus mr-2"></i></i>2014529</h5>
                <p class="card-text text-right"><i class="fas fa-cross text-danger mr-2"></i>>58873</p>
              </div>
            </div>
          </div>


        </div>
      </div>
      <!-- Graph column: placed on right -->
      <div class="col-md-4 col-lg-4 col-xl-4">
        <div id="dual_x_div" class="graph"></div>
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

<!-- <?php
                  foreach($data->infectedByRegion as $resultCases) {
                    echo '
                      <tr>
                        <th scope="row">'. $resultCases->state . '</th>
                        <td>'. $resultCases->count . '</td>';
  
                  foreach($data->deceasedByRegion as $resultDies){
                    if ($resultCases->state == $resultDies->state) {
                    echo '<td>' . $resultDies->count . '</td>
                      </tr>';
                      }
                    };
                  };
                ?> -->


</html>