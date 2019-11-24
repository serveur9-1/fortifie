@extends('layout_admin')
@section('title','Accueil')

@section('content')
 <!-- Begin Page Content -->
      <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Visiteurs </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $nb_visiteur }}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Annonces</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $nb_article }}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-bullhorn fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Comptes</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $nb_compte }}</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Abonnés</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $nb_abonne }}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-bell fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Diocèses</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $nb_diocese }}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-place-of-worship fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Paroisses</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $nb_paroisse }}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-church fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Publicités</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $nb_pub }}</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Galéries</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $nb_gallery }}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-picture-o fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-12">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Aperçu de visite du site</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    </a>
                  </div>
                  </div>
                  <div class="card-body">
                    <div class="chart-area">
                      <canvas id="myAreaChart"></canvas>
                    </div>
                  </div>
                   <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Annonce par semaine</h6>
                  <p class="m-0 ml-auto float-right">
                    <a href="#">Par semaine</a>
                    <a href="#">Par Mois</a>
                  </p>
                </div>
                <div class="card-body">
                  <div class="chart-bar">
                    <canvas id="myBarChart"></canvas>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

 <script src="{{ asset('/dist/js/Chart.min.js') }}"></script>

 <script>
     // Set new default font family and font color to mimic Bootstrap's default styling
     Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
     Chart.defaults.global.defaultFontColor = '#858796';

     function number_format(number, decimals, dec_point, thousands_sep) {
         // *     example: number_format(1234.56, 2, ',', ' ');
         // *     return: '1 234,56'
         number = (number + '').replace(',', '').replace(' ', '');
         var n = !isFinite(+number) ? 0 : +number,
             prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
             sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
             dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
             s = '',
             toFixedFix = function(n, prec) {
                 var k = Math.pow(10, prec);
                 return '' + Math.round(n * k) / k;
             };
         // Fix for IE parseFloat(0.55).toFixed(0) = 0;
         s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
         if (s[0].length > 3) {
             s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
         }
         if ((s[1] || '').length < prec) {
             s[1] = s[1] || '';
             s[1] += new Array(prec - s[1].length + 1).join('0');
         }
         return s.join(dec);
     }

     // Area Chart Example
     var ctx = document.getElementById("myAreaChart");
     var myLineChart = new Chart(ctx, {
         type: 'line',
         data: {
             labels: {!! $data_m !!},
             datasets: [{
                 label: "Visite",
                 lineTension: 0.3,
                 backgroundColor: "rgba(78, 115, 223, 0.05)",
                 borderColor: "rgba(78, 115, 223, 1)",
                 pointRadius: 3,
                 pointBackgroundColor: "rgba(78, 115, 223, 1)",
                 pointBorderColor: "rgba(78, 115, 223, 1)",
                 pointHoverRadius: 3,
                 pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                 pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                 pointHitRadius: 10,
                 pointBorderWidth: 2,
                 data: {!! $data_d !!},
             }],
         },
         options: {
             maintainAspectRatio: false,
             layout: {
                 padding: {
                     left: 10,
                     right: 25,
                     top: 25,
                     bottom: 0
                 }
             },
             scales: {
                 xAxes: [{
                     time: {
                         unit: 'date'
                     },
                     gridLines: {
                         display: true,
                         drawBorder: true
                     },
                     ticks: {
                         maxTicksLimit: 7
                     }
                 }],
                 yAxes: [{
                     ticks: {
                         maxTicksLimit: 5,
                         padding: 10,
                         // Include a dollar sign in the ticks
                         callback: function(value, index, values) {
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
                 display: false
             },
             tooltips: {
                 backgroundColor: "rgb(255,255,255)",
                 bodyFontColor: "#858796",
                 titleMarginBottom: 10,
                 titleFontColor: '#6e707e',
                 titleFontSize: 14,
                 borderColor: '#dddfeb',
                 borderWidth: 1,
                 xPadding: 15,
                 yPadding: 15,
                 displayColors: false,
                 intersect: false,
                 mode: 'index',
                 caretPadding: 10,
                 callbacks: {
                     label: function(tooltipItem, chart) {
                         var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                         return datasetLabel +': '+ number_format(tooltipItem.yLabel);
                     }
                 }
             }
         }
     });

 </script>



 <script>
 
 // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

function number_format(number, decimals, dec_point, thousands_sep) {
  // *     example: number_format(1234.56, 2, ',', ' ');
  // *     return: '1 234,56'
  number = (number + '').replace(',', '').replace(' ', '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
}

// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myBarChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: {!! $batonne_m !!},
    datasets: [{
      label: "Nombre article",
      backgroundColor: "#4e73df",
      hoverBackgroundColor: "#2e59d9",
      borderColor: "#4e73df",
      data: {!! $batonne_d !!},
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: true,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 6
        },
        maxBarThickness: 10,
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 300,
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
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
      display: false
    },
    tooltips: {
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel +': '+ number_format(tooltipItem.yLabel);
        }
      }
    },
  }
});

 </script>
@endsection
