if(typeof dataFinance != "undefined"){

let allData = parseFloat(credit[credit.length-1]) + parseFloat(earning[earning.length-1]) + parseFloat(expense[expense.length-1]);  

let creditPercent = credit[credit.length-1]*100 / allData
let earningPerncent = earning[earning.length-1]*100 / allData
let expensePercent = expense[expense.length-1]*100 / allData



Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Despesas", "Ganhos", "Créditos"],
    datasets: [{
      data: [parseFloat(expensePercent).toFixed(2), parseFloat(earningPerncent).toFixed(2), parseFloat(creditPercent).toFixed(2)],
      backgroundColor: ['#ef5350', '#1cc88a', '#f6c23e'],
      hoverBackgroundColor: ['#e53935', '#17a673', '#ffab00'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
}