
if(typeof minDate != "undefined" && typeof dataFinance != "undefined"){

  let a = 0

  profit = []
  credit = []
  earning = []
  expense = []
  
  
  for(i = 0; i <= minDate-2; i++ )
  {
    profit[i] = null;
    credit[i] = null;
    earning[i] = null;
    expense [i] = null;
  }
  
  for(i = minDate-1; i <= minDate - 2 + dataFinance.length; i++)
  {
      profit[i] = dataFinance[a]['earning'] - dataFinance[a]['expense']
      credit[i] = dataFinance[a]['credit']
      earning[i] = dataFinance[a]['earning'];
      expense[i] = dataFinance[a]['expense'];
      
      a++;
  }
  
  
  
  Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
  Chart.defaults.global.defaultFontColor = '#858796';
  
  
  
  // Area Chart Example
  var ctx = document.getElementById("myAreaChart");
  var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
      datasets: [{
        label: "Lucros",
        lineTension: 0.3,
        backgroundColor: "rgba(78, 115, 223, 0.09)",
        borderColor: "rgba(78, 115, 223, 1)",
        pointRadius: 3,
        pointBackgroundColor: "rgba(78, 115, 223, 1)",
        pointBorderColor: "rgba(78, 115, 223, 1)",
        pointHoverRadius: 3,
        pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
        pointHoverBorderColor: "rgba(78, 115, 223, 1)",
        pointHitRadius: 10,
        pointBorderWidth: 2,
        data: profit
      },{
        label: "Créditos",
        lineTension: 0.3,
        backgroundColor: "rgba(246, 194, 62, 0.2)",
        borderColor: "rgba(246, 194, 62, 1)",
        pointRadius: 3,
        pointBackgroundColor: "rgba(246, 194, 62, 1)",
        pointBorderColor: "rgba(246, 194, 62, 1)",
        pointHoverRadius: 3,
        pointHoverBackgroundColor: "rgba(246, 194, 62, 1)",
        pointHoverBorderColor: "rgba(246, 194, 62, 1)",
        pointHitRadius: 10,
        pointBorderWidth: 2,
        data: credit
      },{
        label: "Ganhos",
        lineTension: 0.3,
        backgroundColor: "rgba(28, 200, 138, 0.1)",
        borderColor: "rgba(28, 200, 138, 1)",
        pointRadius: 3,
        pointBackgroundColor: "rgba(28, 200, 138, 1)",
        pointBorderColor: "rgba(28, 200, 138, 1)",
        pointHoverRadius: 3,
        pointHoverBackgroundColor: "rgba(28, 200, 138, 1)",
        pointHoverBorderColor: "rgba(28, 200, 138, 1)",
        pointHitRadius: 10,
        pointBorderWidth: 2,
        data: earning
      },{
        label: "Despesas",
        lineTension: 0.3,
        backgroundColor: "rgba(239, 83, 80, 0.1)",
        borderColor: "rgba(239, 83, 80, 1)",
        pointRadius: 3,
        pointBackgroundColor: "rgba(239, 83, 80, 1)",
        pointBorderColor: "rgba(239, 83, 80, 1)",
        pointHoverRadius: 3,
        pointHoverBackgroundColor: "rgba(239, 83, 80, 1)",
        pointHoverBorderColor: "rgba(239, 83, 80, 1)",
        pointHitRadius: 10,
        pointBorderWidth: 2,
        data: expense
      }],
    },
    options: {
      maintainAspectRatio: false,
      layout: {
        padding: {
          left: 10,
          right: 20,
          top: 0,
          bottom: 0
        }
      },
      scales: {
        xAxes: [{
          time: {
            unit: 'date'
          },
          gridLines: {
            display: false,
            drawBorder: false
          },
  
   
        }],
        yAxes: [{
          ticks: {
            maxTicksLimit: 5,
            padding: 10,
            // Include a dollar sign in the ticks
            callback: function(value) {
              return number_format(value);
            }
          },
          gridLines: {
            color: "rgb(234, 236, 244)",
            zeroLineColor: "rgb(234, 236, 244)",
            drawBorder: false,
            borderDash: [2],
            zeroLineBorderDash: [2]
          }
        }],
      }, 
    legend: {
      labels:{
        boxWidth: 15,
  
      }
    },
      tooltips: {
        backgroundColor: "rgb(255,255,255)",
        bodyFontColor: "#858796",
        titleMarginBottom: 10,
        titleFontColor: '#6e707e',
        titleFontSize: 14,
        borderColor: '#dddfeb',
        borderWidth: 1,
        xPadding: 20,
        yPadding: 25,
        intersect: false,
        
        mode: 'index',
        caretPadding: 10,
        callbacks: {
          label: function(tooltipItem, chart) {
            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
            return datasetLabel + ": " + number_format(tooltipItem.yLabel);
          }
        }
      }
    }
  });
  



}else if(document.getElementById("chart-area") != null){
  
  var desc = document.createElement('h5')
  desc.innerHTML = "Dados insuficientes para criação de gráfico."
  desc.style.textAlign = "center"
  document.getElementById("chart-area").appendChild(desc)

  var desc2 = document.createElement('h6')
  desc2.innerHTML = "Dados insuficientes para criação de gráfico."
  desc2.style.textAlign = "center"
  desc2.style.marginTop = "-100"

  var chart_pie = document.getElementById("chart-pie")
  chart_pie.style.paddingTop = "0"
  chart_pie.appendChild(desc2)
  
  
  
}


