
    google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      let graphConfig = [];

      function onLoad() {
        for (let index = 1; index <= 26; index++) {
          
          graphConfig.push([
            document.getElementById('state' + index).innerText,
            parseInt(document.getElementById('resultCases' + index).innerText),
            parseInt(document.getElementById('resultDies' + index).innerText)
          ])
        }
        console.log(graphConfig)
      }

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['TOP 10 Estados com mais casos', 'Contaminados', 'Mortes'],
          graphConfig[0],
          graphConfig[1],
          graphConfig[2],
          graphConfig[3],
          graphConfig[4],
          graphConfig[5],
          graphConfig[6],
          graphConfig[7],
          graphConfig[8],
          graphConfig[9],
          graphConfig[10],
        ])

        var options = {
          width: 600,
          height: 800,
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
