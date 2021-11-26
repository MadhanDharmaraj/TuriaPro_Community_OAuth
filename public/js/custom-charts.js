
// function pieChartPopulate(label,value,id) {  

//   alert('ss');

//      var pieChartOptions = {
//     chart: {
//       type: 'pie',
//       height: 350
//     },
//     colors: themeColors,
//     labels: label,
//     series: value,
//     legend: {
//       itemMargin: {
//         horizontal: 2
//       },
//     },
//     responsive: [{
//       breakpoint: 480,
//       options: {
//         chart: {
//           width: 350
//         },
//         legend: {
//           position: 'bottom'
//         }
//       }
//     }]
//   }


//    var pieChart = new ApexCharts(
//     document.querySelector("#"+id),
//     pieChartOptions
//   );
//   pieChart.render();
// }

$(window).on("load", function () {

  var $primary = '#7367F0';
  var $success = '#28C76F';
  var $danger = '#EA5455';
  var $warning = '#FF9F43';
  var $info = '#00cfe8';
  var $primary_light = '#A9A2F6';
  var $danger_light = '#f29292';
  var $success_light = '#55DD92';
  var $warning_light = '#ffc085';
  var $info_light = '#1fcadb';
  var $strok_color = '#b9c3cd';
  var $label_color = '#e7e7e7';
  var $white = '#fff';


  // transactions Chart
  // -----------------------------

  var transactionChartoptions = {
    chart: {
      height: 270,
      toolbar: { show: false },
      type: 'line',
    },
    stroke: {
      curve: 'smooth',
      dashArray: [0, 8],
      width: [4, 2],
    },
    grid: {
      borderColor: $label_color,
    },
    legend: {
      show: false,
    },
    colors: [$danger_light, $strok_color],

    fill: {
      type: 'gradient',
      gradient: {
        shade: 'dark',
        inverseColors: false,
        gradientToColors: [$primary, $strok_color],
        shadeIntensity: 1,
        type: 'horizontal',
        opacityFrom: 1,
        opacityTo: 1,
        stops: [0, 100, 100, 100]
      },
    },
    markers: {
      size: 0,
      hover: {
        size: 5
      }
    },
    xaxis: {
      labels: {
        style: {
          colors: $strok_color,
        }
      },
      axisTicks: {
        show: false,
      },
      categories: ['Fri','Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
      axisBorder: {
        show: false,
      },
      tickPlacement: 'on',
    },
    yaxis: {
      tickAmount: 5,
      labels: {
        style: {
          color: $strok_color,
        },
        formatter: function (val) {
          return val > 999 ? (val / 1000).toFixed(1) + 'k' : val;
        }
      }
    },
    tooltip: {
      x: { show: false }
    },
    series: [{
      name: "This Month",
      data: [87000, 92000, 100800, 101500, 102500, 112000, 122500, 185000]
    },
    {
      name: "Last Month",
      data: [9500, 9000, 8200, 6600, 4500, 3500, 2200, 920]
    }
    ],

  }

  var transactionChart = new ApexCharts(
    document.querySelector("#transaction-chart"),
    transactionChartoptions
  );

  transactionChart.render();

});



$(document).ready(function () {

  var $primary = '#7367F0',
    $success = '#28C76F',
    $danger = '#EA5455',
    $warning = '#FF9F43',
    $info = '#00cfe8',
    $label_color_light = '#dae1e7';

  var themeColors = [$primary, $success, $danger, $warning, $info];


  // Pie Chart
  // -----------------------------
  var pieChartOptions = {
    chart: {
      type: 'pie',
      height: 350
    },
    colors: themeColors,
    labels: ['Business', 'Auditor'],
    series: [145, 55],
    legend: {
      itemMargin: {
        horizontal: 2
      },
    },
    responsive: [{
      breakpoint: 480,
      options: {
        chart: {
          width: 350
        },
        legend: {
          position: 'bottom'
        }
      }
    }]
  }
  var pieChart = new ApexCharts(
    document.querySelector("#customerType-chart"),
    pieChartOptions
  );
  pieChart.render();

});

