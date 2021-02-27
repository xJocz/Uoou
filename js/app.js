
    google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      let dataGraph = [];
      graphConfig = '';

      function onLoad() {
        for (let index = 1; index <= 26; index++) {
          
          dataGraph.push([
            document.getElementById('state' + index).innerText,
            document.getElementById('resultCases' + index).innerText,
            document.getElementById('resultDies' + index).innerText
          ])
        }
        getDataGraph()
      }

      function getDataGraph() {
        for (let index = 0; index < dataGraph.length; index++) {
          graphConfig += '[' + dataGraph[index][0] + ',' + dataGraph[index][1] + ',' + dataGraph[index][2] +'],';
        }
        console.log(graphConfig)
      }

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['', 'Contaminados', 'Mortes'],
          ['','','']
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
