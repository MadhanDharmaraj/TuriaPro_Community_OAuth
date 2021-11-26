
$(document).ready(function () {

  var $primary = '#7367F0',
    $success = '#28C76F',
    $danger = '#EA5455',
    $warning = '#FF9F43',
    $info = '#00cfe8'
    $primary_light = '#A9A2F6',
    $success_light = '#55DD92',
    $warning_light = '#ffc085',
    $label_color_light = '#dae1e7';

  var themeColors = [$primary, $success, $danger, $warning, $info];

// Mixed Chart
  // -----------------------------
  var mrrChartOptions = {
    chart: {
      height: 350,
      type: 'line',
      stacked: false,
    },
    colors: themeColors,
    stroke: {
      width: [0, 2, 5],
      curve: 'smooth'
    },
    plotOptions: {
      bar: {
        columnWidth: '50%'
      }
    },
    // colors: ['#3A5794', '#A5C351', '#E14A84'],
    series: [{
      name: 'Revenue (in Rs)',
      type: 'column',
      data: [20000, 60000, 128000, 270000, 389000, 545000, 725000, 916000, 1074350, 1191760, 1590710]
    },{
      name: 'Customers',
      type: 'area',
      data: [33, 100, 213, 450, 648, 908, 1208, 1526, 1790, 1986, 2600]
    }],
    fill: {
      opacity: [0.85, 0.25, 1],
      gradient: {
        inverseColors: false,
        shade: 'light',
        type: "vertical",
        opacityFrom: 0.85,
        opacityTo: 0.55,
        stops: [0, 100, 100, 100]
      }
    },
    labels: ['01/01/2019', '02/01/2019', '03/01/2019', '04/01/2019', '05/01/2019', '06/01/2019', '07/01/2019', '08/01/2019', '09/01/2019', '10/01/2019', '11/01/2019'],
    markers: {
      size: 0
    },
    legend: {
      offsetY: -10
    },
    xaxis: {
      type: 'datetime'
    },
    yaxis: {
      min: 0,
      tickAmount: 5,
      title: {
        text: 'MRR'
      }
    },
    tooltip: {
      shared: true,
      intersect: false,
      y: {
        formatter: function (y) {
          if (typeof y !== "undefined") {
            console.log(y);
            return y.toFixed(0);
          }
          return y;

        }
      }
    }
  }
  var mrrChart = new ApexCharts(
    document.querySelector("#mrr-chart"),
    mrrChartOptions
  );
  mrrChart.render();




    // Subscribed Gained Chart
    // ----------------------------------

    var activeCustomersChartoptions = {
        chart: {
            height: 100,
            type: 'area',
            toolbar:{
              show: false,
            },
            sparkline: {
                enabled: true
            },
            grid: {
                show: false,
                padding: {
                    left: 0,
                    right: 0
                }
            },
        },
        colors: [$primary],
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth',
            width: 2.5
        },
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 0.9,
                opacityFrom: 0.7,
                opacityTo: 0.5,
                stops: [0, 80, 100]
            }
        },
        series: [{
            name: 'Subscribers',
            data: [648, 908, 1208, 1526, 1790, 1986, 2600]
        }],

        xaxis: {
          type: 'datetime',
          categories: ['05/01/2019', '06/01/2019', '07/01/2019', '08/01/2019', '09/01/2019', '10/01/2019', '11/01/2019'],
        },
        yaxis: [{
            y: 0,
            offsetX: 0,
            offsetY: 0,
            padding: { left: 0, right: 0 },
        }],
        tooltip: {
            x: { show: true }
        },
    }

    var activeCustomersChart = new ApexCharts(
        document.querySelector("#active-customer-chart"),
        activeCustomersChartoptions
    );

    activeCustomersChart.render();



    // Revenue Generated Chart
    // ----------------------------------

    var revenueChartoptions = {
        chart: {
            height: 100,
            type: 'area',
            toolbar:{
              show: false,
            },
            sparkline: {
                enabled: true
            },
            grid: {
                show: false,
                padding: {
                    left: 0,
                    right: 0
                }
            },
        },
        colors: [$success],
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth',
            width: 2.5
        },
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 0.9,
                opacityFrom: 0.7,
                opacityTo: 0.5,
                stops: [0, 80, 100]
            }
        },
        series: [{
            name: 'Revenue',
            data: [389000, 545000, 725000, 916000, 1074350, 1191760, 1590710]
        }],

        xaxis: {
          type: 'datetime',
          categories: ['05/01/2019', '06/01/2019', '07/01/2019', '08/01/2019', '09/01/2019', '10/01/2019', '11/01/2019'],
       },
        yaxis: [{
            y: 0,
            offsetX: 0,
            offsetY: 0,
            padding: { left: 0, right: 0 },
        }],
        tooltip: {
            x: { show: true }
        },
    }

    var revenueChart = new ApexCharts(
        document.querySelector("#revenue-chart"),
        revenueChartoptions
    );

    revenueChart.render();


    // Quaterly Sales Chart
    // ----------------------------------

    var newCustomersChartoptions = {
        chart: {
            height: 100,
            type: 'area',
            toolbar:{
              show: false,
            },
            sparkline: {
                enabled: true
            },
            grid: {
                show: false,
                padding: {
                    left: 0,
                    right: 0
                }
            },
        },
        colors: [$danger],
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth',
            width: 2.5
        },
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 0.9,
                opacityFrom: 0.7,
                opacityTo: 0.5,
                stops: [0, 80, 100]
            }
        },
        series: [{
            name: 'Customers',
            data: [198, 260, 300, 318, 264, 196, 614]
        }],

        xaxis: {
          type: 'datetime',
          categories: ['05/01/2019', '06/01/2019', '07/01/2019', '08/01/2019', '09/01/2019', '10/01/2019', '11/01/2019'],
        },
        yaxis: [{
            y: 0,
            offsetX: 0,
            offsetY: 0,
            padding: { left: 0, right: 0 },
        }],
        tooltip: {
            x: { show: true }
        },
    }

    var newCustomersChart = new ApexCharts(
        document.querySelector("#new-customers-chart"),
        newCustomersChartoptions
    );

    newCustomersChart.render();

    // Order Received Chart
    // ----------------------------------

    var newCustomerRevenueChartoptions = {
        chart: {
            height: 100,
            type: 'area',
            toolbar:{
              show: false,
            },
            sparkline: {
                enabled: true
            },
            grid: {
                show: false,
                padding: {
                    left: 0,
                    right: 0
                }
            },
        },
        colors: [$warning],
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth',
            width: 2.5
        },
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 0.9,
                opacityFrom: 0.7,
                opacityTo: 0.5,
                stops: [0, 80, 100]
            }
        },
        series: [{
            name: 'New Revenue',
            data: [119, 156, 180, 191, 158, 117, 399]
        }],

        xaxis: {
          type: 'datetime',
          categories: ['05/01/2019', '06/01/2019', '07/01/2019', '08/01/2019', '09/01/2019', '10/01/2019', '11/01/2019'],
        },
        yaxis: [{
            y: 0,
            offsetX: 0,
            offsetY: 0,
            padding: { left: 0, right: 0 },
            labels: {
              formatter: function (value) {
                return value + "k";
              }
            },
        }],
        tooltip: {
            x: { show: true }
        }
    }

    var newCustomerRevenueChart = new ApexCharts(
        document.querySelector("#new-customer-revenue-chart"),
        newCustomerRevenueChartoptions
    );

    newCustomerRevenueChart.render();


});
