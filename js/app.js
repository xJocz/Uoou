
    
    // google.charts.load('current', {'packages':['bar']});
    // google.charts.setOnLoadCallback(drawStuff);

    // function drawStuff() {
    // var data = new google.visualization.arrayToDataTable([
    //     ['Opening Move', 'Percentage'],
    //     ["SP", 44],
    //     ["MG", 31],
    //     ["SS", 12],
    //     ["GT", 10],
    //     ['AM', 3]
    // ]);

    // var options = {
    //     title: 'Chess opening moves',
    //     width: 540,
    //     legend: { position: 'none' },
    //     chart: { title: 'Chess opening moves',
    //             subtitle: 'popularity by percentage'},
    //     bars: 'horizontal',
    //     // Required for Material Bar Charts.
    //     axes: {
    //     x: {
    //         0: { side: 'top', label: 'Percentage'} // Top x-axis.
    //     }
    //     },
    //     bar: { groupWidth: "90%" }
    // };

    // var chart = new google.charts.Bar(document.getElementById('top_x_div'));
    // chart.draw(data, options);
    // };

    google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['', 'Contaminados', 'Mortes'],
          ['SP', 2014529, 58873],
          ['MG', 1014529, 258873],
          ['RJ', 1514529, 158873],
          ['RR', 201452, 58873],
          ['AC', 20145, 358873],
          ['SP', 2014529, 58873],
          ['MG', 1014529, 258873],
          ['RJ', 1514529, 158873],
          ['RR', 201452, 58873],
          ['AC', 20145, 358873],
          ['SP', 2014529, 58873],
          ['MG', 1014529, 258873],
          ['RJ', 1514529, 158873],
          ['RR', 201452, 58873],
          ['AC', 20145, 358873]
        ]);

        var options = {
          width: 0,
          height: 500,
          chart: {
            title: 'Covid progression',
            subtitle: 'Last update: 24/02/2021 17:45'
          },
          bars: 'horizontal', // Required for Material Bar Charts.
          colors: ['blueviolet', 'red'],

          axes: {
            x: {
              distance: {label: 'Quantidade'}, // Bottom x-axis.
              brightness: {side: 'top', label: 'Gráfico geral'} // Top x-axis.
            }
          }
        };

      var chart = new google.charts.Bar(document.getElementById('dual_x_div'));
      chart.draw(data, options);
    };
