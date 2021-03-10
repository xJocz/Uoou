
google.charts.load('current', { 'packages': ['bar'] });
google.charts.setOnLoadCallback(drawStuff);

let graphConfig = [];

function onLoad() {
  for (let index = 1; index <= 27; index++) {

    graphConfig.push([
      document.getElementById('state' + index).innerText,
      parseInt(document.getElementById('resultCases' + index).innerText),
      parseInt(document.getElementById('resultDies' + index).innerText)
    ])
  }
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
    graphConfig[9]
  ])

  var options = {
    width: document.getElementById('dual_x_div').offsetWidth,
    height: 720,
    chart: {
      title: 'Covid progression',
    },
    bars: 'horizontal',
    colors: ['blueviolet', 'red'],

    axes: {
      x: {
        distance: { label: 'Quantidade' },
        brightness: { side: 'top', label: 'Gráfico geral' }
      }
    }
  };

  var chart = new google.charts.Bar(document.getElementById('dual_x_div'));
  chart.draw(data, options);

  function resizeMainGraph() {
    var divWidth = document.getElementById('dual_x_div').offsetWidth;

    options.width = divWidth;

    var chart = new google.charts.Bar(document.getElementById('dual_x_div'));
    chart.draw(data, options);

  }

  document.body.onresize = () => {
    resizeMainGraph()
  };

};

function openModal(id) {

  google.charts.load('current', { 'packages': ['bar'] });
  google.charts.setOnLoadCallback(drawStuff2);

  function drawStuff2() {
    var dataModal = new google.visualization.arrayToDataTable([
      ['', 'Contaminados', 'Mortes'],
      graphConfig[id],
    ])

    let clientWidth = document.body.clientWidth > 991 ? 766 : 466;

    var optionsModal = {
      width: clientWidth > 574 ? clientWidth : 380,
      height: 400,
      chart: {
        title: 'Progressão do covid em: ' + graphConfig[id][0],
      },
      bars: 'horizontal',
      colors: ['blueviolet', 'red'],

      axes: {
        x: {
          distance: { label: 'Quantidade' },
          brightness: { side: 'top', label: 'Gráfico geral' }
        }
      }
    };

    var chartModal = new google.charts.Bar(document.getElementById('modal_div'));
    chartModal.draw(dataModal, optionsModal);

    // This function was created to resize the chart obtained from API

    // function resizeModalGraph() {
    //   var divModalWidth = document.getElementById('modal_div').offsetWidth;
  
    //   optionsModal.width = divModalWidth;
  
    //   var chartModal = new google.charts.Bar(document.getElementById('modal_div'));
    //   chartModal.draw(dataModal, optionsModal);

    //   console.log('Modal resized')
    // }
    
    // document.body.onresize = () => {
    //   resizeModalGraph()
    // }

    $('#exampleModal').modal('show')

  }

}