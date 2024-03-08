<div>
      <!-- Navbar -->
      <div class="topnav">
      <img style="height: 55px!important;" src="https://www.oaxaca.gob.mx/sedeco/wp-content/uploads/sites/60/2023/12/sedeco.png" />
      </div>
      <!-- End Navbar -->
      <div class="container-fluid py-4">
          <div class="row">
              <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                  <div class="card">
                      <div class="card-header p-3 pt-2">
                          <div
                              class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                              <i class="material-icons opacity-10">weekend</i>
                          </div>
                          <div class="text-end pt-1 pe-3 ps-6">
                             <p class="text-sm mb-0 text-capitalize">Total de unidades económicas </p>
                             <h4 class="mb-0">30,258</h4>
                         </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                  <div class="card">
                      <div class="card-header p-3 pt-2">
                          <div
                              class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                              <i class="material-icons opacity-10">person</i>
                          </div>
                          <div class="text-end pt-1 pe-3 ps-6">
                              <p class="text-sm mb-0 text-capitalize">Total de personal</p>
                              <h4 class="mb-0">350,014</h4>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                  <div class="card">
                      <div class="card-header p-3 pt-2">
                          <div
                              class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                              <i class="material-icons opacity-10">person</i>
                          </div>
                          <div class="text-end pt-1 pe-3 ps-6">
                              <p class="text-sm mb-0 text-capitalize">Remuneración promedio por empleado (mensual)</p>
                              <h4 class="mb-0">$13,655</h4>
                          </div>
                      </div>
                  </div>
              </div>
              
              <div class="col-xl-4 col-sm-6">
                  <div class="card">
                      <div class="card-header p-3 pt-2">
                          <div
                              class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                              <i class="material-icons opacity-10">weekend</i>
                          </div>
                          <div class="text-end pt-1 pe-3 ps-6">
                              <p class="text-sm mb-0 text-capitalize">Productividad laboral promedio (anual)</p>
                              <h4 class="mb-0">$1,339,160</h4>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- nuevo cuadro de la iamgen -->

              <p class="fs-5 ...">Actividad consultada</p>
              <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                  <div class="card">
                      <div class="card-header p-3 pt-2">
                          <div
                              class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                              <i class="material-icons opacity-10">weekend</i>
                          </div>
                          <div class="text-end pt-1 ps-6">
                             <p class="text-sm mb-0 text-capitalize">Tienda de artículos de limpieza </p>
                             <h4 class="mb-0">(151)</h4>
                         </div>
                      </div>
                  </div>
              </div>

              <!-- new div -->
              <p class="fs-5 ...">Actividad predominante</p>

              <div class="row">
              <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                  <div class="card">
                      <div class="card-header p-3 pt-2">
                          <div
                              class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                              <i class="material-icons opacity-10">weekend</i>
                          </div>
                          <div class="text-end pt-1 pe-3 ps-6">
                             <p class="text-sm mb-0 text-capitalize">Tienda de abarrotes </p>
                             <h4 class="mb-0">$30,258</h4>
                         </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                  <div class="card">
                      <div class="card-header p-3 pt-2">
                          <div
                              class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                              <i class="material-icons opacity-10">person</i>
                          </div>
                          <div class="text-end pt-1 pe-3 ps-6">
                              <p class="text-sm mb-0 text-capitalize">Estética</p>
                              <h4 class="mb-0">(2412)</h4>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                  <div class="card">
                      <div class="card-header p-3 pt-2">
                          <div
                              class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                              <i class="material-icons opacity-10">person</i>
                          </div>
                          <div class="text-end pt-1 pe-3 ps-6">
                              <p class="text-sm mb-0 text-capitalize">Restaurantes a la carta y de comida corrida</p>
                              <h4 class="mb-0">(869)</h4>
                          </div>
                      </div>
                  </div>
              </div>
          <!-- Final de componentes top -->
          <!-- Inicio de nuevo gráficos -->

          <p class="fs-5 ...">Composición de unidades económicas por sector</p>
        <div class="d-flex flex-row">

        <div class="card mb-3 me-5">
            <div class="card-body">
                <div class="chart">
                    <canvas id="doughnut-chart" class="chart-canvas" height="200px"></canvas>
                </div>
            </div>
          </div>  
          <div class="card mb-3 me-5">
            <div class="card-body">
                <div class="chart">
                    <canvas id="doughnut-chart01" class="chart-canvas" height="200px"></canvas>
                </div>
            </div>
          </div>  
          <div class="card mb-3 me-5">
            <div class="card-body">
                <div class="chart">
                    <canvas id="doughnut-chart02" class="chart-canvas" height="200px"></canvas>
                </div>
            </div>
          </div>  

        </div>
        
        </div>

        <div>
             <p class="fs-5 me-2 d-inline">El 75 % de las unidades económicas tienen de:</p>
         <div>
                <div
                    class="icon icon-lg">
                    <i class="material-icons opacity-10">person</i>
                    <p class="text-sm mb-0 text-capitalize">0 a 5 personas</p>
                </div>
        </div>

         <div>
             <p class="fs-5 me-2 d-inline">Especialización definida:</p>
         <div>
            <div class="icon icon-lg me-2 d-inline">
                <p class="text-capitalize mb-0 me-1 d-inline">Unidades económicas</p>
                <i class="material-icons d-inline">person</i>
                <p class="text-sm text-capitalize mb-0 ms-1 d-inline">55 %</p>
            </div>
        </div>

        <div>
            <div class="icon icon-lg me-2 d-inline">
                <p class="text-capitalize mb-0 me-1 d-inline">Personal ocupado</p>
                <i class="material-icons d-inline">person</i>
                <p class="text-sm text-capitalize mb-0 ms-1 d-inline">65 %</p>
            </div>
        </div>
        <div>
            <div class="icon icon-lg me-2 d-inline">
                <p class="text-capitalize mb-0 me-1 d-inline">Producción bruta total</p>
                <i class="material-icons d-inline">person</i>
                <p class="text-sm text-capitalize mb-0 ms-1 d-inline">53 %</p>
            </div>
        </div>
                
         </div>

         <div>
             <p class="fs-5 me-2 d-inline">Índice de desarrollo económico:</p>
         <div>
                <div
                    class="icon icon-lg ">
                    <i class="material-icons opacity-10">person</i>
                    <p class="text-sm mb-0 text-capitalize">asd</p>
                </div>
        </div>
          <!-- Final de componentes top -->

          <!-- COMENTARIO PARA CONTENEDOR DE GRAFICAS -->
          <div class="row mt-4">
              <div class="col-lg-4 col-md-6 mt-4 mb-4">
                  <div class="card z-index-2 ">
                      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                          <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                              <div class="chart">
                                  <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                              </div>
                          </div>
                      </div>
                      <div class="card-body">
                          <h6 class="mb-0 ">Website Views</h6>
                          <p class="text-sm ">Last Campaign Performance</p>
                          <hr class="dark horizontal">
                          <div class="d-flex ">
                              <i class="material-icons text-sm my-auto me-1">schedule</i>
                              <p class="mb-0 text-sm"> campaign sent 2 days ago </p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 mt-4 mb-4">
                  <div class="card z-index-2  ">
                      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                          <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                              <div class="chart">
                                  <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
                              </div>
                          </div>
                      </div>
                      <div class="card-body">
                          <h6 class="mb-0 "> Daily Sales </h6>
                          <p class="text-sm "> (<span class="font-weight-bolder">+15%</span>) increase in today
                              sales. </p>
                          <hr class="dark horizontal">
                          <div class="d-flex ">
                              <i class="material-icons text-sm my-auto me-1">schedule</i>
                              <p class="mb-0 text-sm"> updated 4 min ago </p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 mt-4 mb-3">
                  <div class="card z-index-2 ">
                      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                          <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                              <div class="chart">
                                  <canvas id="chart-line-tasks" class="chart-canvas" height="170"></canvas>
                              </div>
                          </div>
                      </div>
                      <div class="card-body">
                          <h6 class="mb-0 ">Completed Tasks</h6>
                          <p class="text-sm ">Last Campaign Performance</p>
                          <hr class="dark horizontal">
                          <div class="d-flex ">
                              <i class="material-icons text-sm my-auto me-1">schedule</i>
                              <p class="mb-0 text-sm">just updated</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- COMENTARIO PARA MOSIFICAR DE GRAFICAS -->

      </div>
  </div>

  </div>
  @push('js')
  <script src="{{ asset('assets') }}/js/plugins/chartjs.min.js"></script>
  <script>
      var ctx = document.getElementById("chart-bars").getContext("2d");

      new Chart(ctx, {
          type: "bar",
          data: {
              labels: ["M", "T", "W", "T", "F", "S", "S"],
              datasets: [{
                  label: "Sales",
                  tension: 0.4,
                  borderWidth: 0,
                  borderRadius: 4,
                  borderSkipped: false,
                  backgroundColor: "rgba(255, 255, 255, .8)",
                  data: [50, 20, 10, 22, 50, 10, 40],
                  maxBarThickness: 6
              }, ],
          },
          options: {
              responsive: true,
              maintainAspectRatio: false,
              plugins: {
                  legend: {
                      display: false,
                  }
              },
              interaction: {
                  intersect: false,
                  mode: 'index',
              },
              scales: {
                  y: {
                      grid: {
                          drawBorder: false,
                          display: true,
                          drawOnChartArea: true,
                          drawTicks: false,
                          borderDash: [5, 5],
                          color: 'rgba(255, 255, 255, .2)'
                      },
                      ticks: {
                          suggestedMin: 0,
                          suggestedMax: 500,
                          beginAtZero: true,
                          padding: 10,
                          font: {
                              size: 14,
                              weight: 300,
                              family: "Roboto",
                              style: 'normal',
                              lineHeight: 2
                          },
                          color: "#fff"
                      },
                  },
                  x: {
                      grid: {
                          drawBorder: false,
                          display: true,
                          drawOnChartArea: true,
                          drawTicks: false,
                          borderDash: [5, 5],
                          color: 'rgba(255, 255, 255, .2)'
                      },
                      ticks: {
                          display: true,
                          color: '#f8f9fa',
                          padding: 10,
                          font: {
                              size: 14,
                              weight: 300,
                              family: "Roboto",
                              style: 'normal',
                              lineHeight: 2
                          },
                      }
                  },
              },
          },
      });
// Nuevo script dounot
var ctx = document.getElementById("doughnut-chart").getContext("2d");

new Chart(ctx, {
      type: "doughnut",
      data: {
          labels: [ "Comercio", "No comercio"],
          datasets: [{
              label: "Sales",
              backgroundColor: [ "#9966FF", "#F8F8F8F8"],
              data: [220, 450]
          }]
      },
      options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
              legend: {
                  display: true,
                  position: 'bottom'
              }
          },
          interaction: {
              intersect: false,
              mode: 'index',
          }
      }
  });

// fin dounnot
// dona 2
var ctx = document.getElementById("doughnut-chart01").getContext("2d");

new Chart(ctx, {
      type: "doughnut",
      data: {
          labels: ["Industria", "No industria"],
          datasets: [{
              label: "Sales",
              backgroundColor: ["#20c997", "#F8F8F8F8"],
              data: [100, 400]
          }]
      },
      options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
              legend: {
                  display: true,
                  position: 'bottom'
              }
          },
          interaction: {
              intersect: false,
              mode: 'index',
          }
      }
  });
// dona 3
var ctx = document.getElementById("doughnut-chart02").getContext("2d");

new Chart(ctx, {
      type: "doughnut",
      data: {
          labels: ["Servicios", "No servicios"],
          datasets: [{
              label: "Sales",
              backgroundColor: ["#336BFF", "#F8F8F8F8"],
              data: [300, 200]
          }]
      },
      options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
              legend: {
                  display: true,
                  position: 'bottom'
              }
          },
          interaction: {
              intersect: false,
              mode: 'index',
          }
      }
  });
// fin de dona 3

      var ctx2 = document.getElementById("chart-line").getContext("2d");

      new Chart(ctx2, {
          type: "line",
          data: {
              labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
              datasets: [{
                  label: "Mobile apps",
                  tension: 0,
                  borderWidth: 0,
                  pointRadius: 5,
                  pointBackgroundColor: "rgba(255, 255, 255, .8)",
                  pointBorderColor: "transparent",
                  borderColor: "rgba(255, 255, 255, .8)",
                  borderColor: "rgba(255, 255, 255, .8)",
                  borderWidth: 4,
                  backgroundColor: "transparent",
                  fill: true,
                  data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
                  maxBarThickness: 6

              }],
          },
          options: {
              responsive: true,
              maintainAspectRatio: false,
              plugins: {
                  legend: {
                      display: false,
                  }
              },
              interaction: {
                  intersect: false,
                  mode: 'index',
              },
              scales: {
                  y: {
                      grid: {
                          drawBorder: false,
                          display: true,
                          drawOnChartArea: true,
                          drawTicks: false,
                          borderDash: [5, 5],
                          color: 'rgba(255, 255, 255, .2)'
                      },
                      ticks: {
                          display: true,
                          color: '#f8f9fa',
                          padding: 10,
                          font: {
                              size: 14,
                              weight: 300,
                              family: "Roboto",
                              style: 'normal',
                              lineHeight: 2
                          },
                      }
                  },
                  x: {
                      grid: {
                          drawBorder: false,
                          display: false,
                          drawOnChartArea: false,
                          drawTicks: false,
                          borderDash: [5, 5]
                      },
                      ticks: {
                          display: true,
                          color: '#f8f9fa',
                          padding: 10,
                          font: {
                              size: 14,
                              weight: 300,
                              family: "Roboto",
                              style: 'normal',
                              lineHeight: 2
                          },
                      }
                  },
              },
          },
      });

      var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

      new Chart(ctx3, {
          type: "line",
          data: {
              labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
              datasets: [{
                  label: "Mobile apps",
                  tension: 0,
                  borderWidth: 0,
                  pointRadius: 5,
                  pointBackgroundColor: "rgba(255, 255, 255, .8)",
                  pointBorderColor: "transparent",
                  borderColor: "rgba(255, 255, 255, .8)",
                  borderWidth: 4,
                  backgroundColor: "transparent",
                  fill: true,
                  data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                  maxBarThickness: 6

              }],
          },
          options: {
              responsive: true,
              maintainAspectRatio: false,
              plugins: {
                  legend: {
                      display: false,
                  }
              },
              interaction: {
                  intersect: false,
                  mode: 'index',
              },
              scales: {
                  y: {
                      grid: {
                          drawBorder: false,
                          display: true,
                          drawOnChartArea: true,
                          drawTicks: false,
                          borderDash: [5, 5],
                          color: 'rgba(255, 255, 255, .2)'
                      },
                      ticks: {
                          display: true,
                          padding: 10,
                          color: '#f8f9fa',
                          font: {
                              size: 14,
                              weight: 300,
                              family: "Roboto",
                              style: 'normal',
                              lineHeight: 2
                          },
                      }
                  },
                  x: {
                      grid: {
                          drawBorder: false,
                          display: false,
                          drawOnChartArea: false,
                          drawTicks: false,
                          borderDash: [5, 5]
                      },
                      ticks: {
                          display: true,
                          color: '#f8f9fa',
                          padding: 10,
                          font: {
                              size: 14,
                              weight: 300,
                              family: "Roboto",
                              style: 'normal',
                              lineHeight: 2
                          },
                      }
                  },
              },
          },
      });

  </script>
  @endpush
