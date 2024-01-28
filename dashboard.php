<!DOCTYPE html>
<html data-bs-theme="light">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin.css" />
  </head>

  <body>
  <?php include 'part/header.php'; ?>
    <div class="col-12 pt-3 pb-2 mb-3">
      <h3 class="fw-bold">Dashboard</h3>
      <h5 id="opening"></h5>
    </div>
    <div class="col-12 col-xl-9 mb-3 mb-xl-0">
      <div class="row">
        <div class="col-6 col-lg-3 mb-3">
          <div class="card">
            <div class="card-body d-flex align-items-center">
              <div class="fs-4 text-white"><i class="ri-news-fill p-2 rounded" style="background: #9694ff"></i></div>
              <div class="det ms-3">
                <h6>News</h6>
                <h6 id="jumlahBerita" class="fw-bold">Loading..</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-3 mb-3">
          <div class="card">
            <div class="card-body d-flex align-items-center">
              <div class="fs-4 text-white"><i class="ri-user-3-fill p-2 rounded" style="background: #57caeb"></i></div>
              <div class="det ms-3">
                <h6>User</h6>
                <h6 class="fw-bold">10</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-3 mb-3">
          <div class="card">
            <div class="card-body d-flex align-items-center">
              <div class="fs-4 text-white"><i class="ri-bill-fill p-2 rounded" style="background: #5ddab4"></i></div>
              <div class="det ms-3">
                <h6>Bill</h6>
                <h6 class="fw-bold">$400</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-3 mb-3">
          <div class="card">
            <div class="card-body d-flex align-items-center">
              <div class="fs-4 text-white"><i class="ri-shopping-cart-fill p-2 rounded" style="background: #ff7976"></i></div>
              <div class="det ms-3">
                <h6>Sold</h6>
                <h6 class="fw-bold">100</h6>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card my-3">
        <div class="card-body p-4">
          <div class="d-flex justify-content-between align-items-center border-bottom pb-3">
            <h4>News Chart</h4>
            <div class="d-flex">
              <select class="form-control me-3" style="width: fit-content;" id="tahunSelect"></select>
              <div class="dropdown">
                <button class="btn btn-outline-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="ri-download-line me-2"></i>Export
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><button type="button" class="dropdown-item" onclick="downloadExcel()">Download Excel</button></li>
                  <li><button type="button" class="dropdown-item" onclick="downloadPDF()">Download PDF</button></li>
                </ul>
              </div>
            </div>
          </div>
          <h4 class="text-center mt-3">CHART OF THE NUMBER OF NEWS IN 1 YEAR</h4>
          <canvas id="newsChart" width="400" height="200"></canvas>
        </div>
      </div>
      <!-- <div class="card my-3">
        <div class="card-body p-4">
          <h4>Recent Orders</h4>
          <div class="table-responsive small">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Header</th>
                  <th scope="col">Header</th>
                  <th scope="col">Header</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>001</td>
                  <td>Body</td>
                  <td>Random</td>
                  <td>Text</td>
                </tr>
                <tr>
                  <td>002</td>
                  <td>Body</td>
                  <td>Random</td>
                  <td>Text</td>
                </tr>
                <tr>
                  <td>003</td>
                  <td>Body</td>
                  <td>Random</td>
                  <td>Text</td>
                </tr>
                <tr>
                  <td>004</td>
                  <td>Body</td>
                  <td>Random</td>
                  <td>Text</td>
                </tr>
                <tr>
                  <td>005</td>
                  <td>Body</td>
                  <td>Random</td>
                  <td>Text</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div> -->
    </div>
    <div class="col-12 col-xl-3 mb-3">
      <div class="row">
        <div class="col-12 col-sm-6 col-xl-12 mb-3">
          <div class="card">
            <div class="card-body">
              <h5>Progress Bar</h5>
              <div class="progress my-3">
                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 75%">75%</div>
              </div>
              <div class="progress mb-3">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 50%">50%</div>
              </div>
              <div class="progress mb-3">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 25%">25%</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-12 my-3 mt-xl-3 mt-sm-0">
          <div class="card">
            <div class="card-body">
              <h5>Reminders</h5>
              <ol class="list-group list-group-numbered">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="ms-2 me-auto">
                    <div class="fw-bold">Subheading</div>
                    Content for list item
                  </div>
                  <span class="badge bg-primary rounded-pill">14</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="ms-2 me-auto">
                    <div class="fw-bold">Subheading</div>
                    Content for list item
                  </div>
                  <span class="badge bg-primary rounded-pill">14</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="ms-2 me-auto">
                    <div class="fw-bold">Subheading</div>
                    Content for list item
                  </div>
                  <span class="badge bg-primary rounded-pill">14</span>
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include 'part/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/xlsx/dist/xlsx.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/vfs_fonts.js"></script>
    <script>
      if(localStorage.getItem("session_token")){
        document.getElementById("opening").innerText = "Selamat datang, " + localStorage.getItem('nama') + "😊";
      }
      document.getElementById("dashboard").classList.add("active");

      function fetchData(tahun) {
        var formData = new FormData();
        formData.append('year', tahun);

        return axios ({
          method: 'post',
          url: 'https://scenix-photo.000webhostapp.com/sumnewsyears.php',
          data: formData,
          headers: {'Content-Type': 'multipart/form-data'}
        });
      }
      function createChart(data) {
        var ctx = document.getElementById('newsChart').getContext('2d');
        var existingChart = Chart.getChart(ctx);
        if(existingChart){
          existingChart.destroy();
        }
        var myChart = new Chart(ctx, {
          type: 'bar',
          data: {
            labels: data.map(item=>item.allmonth),
            datasets: [{
              label: 'Sum News',
              data: data.map(item=>item.sum_news),
              backgroundColor: '#9694ff77',
              borderColor: '#9694ffff',
              borderWidth: 2
            }]
          },
          options: {
            scales: {
              y: {
                beginAtZero: true,
                ticks: {
                  stepSize: 1
                }
              }
            }
          }
        });
      }
      function populateSelectOptions(data) {
        var selectElement = document.getElementById('tahunSelect');
        data.forEach(item => {
          var option = document.createElement('option');
          option.value = item.year;
          option.text = item.year;
          selectElement.add(option);
        });
        var latestYear = data[0].year;
        document.getElementById('tahunSelect').value = latestYear;
        fetchData(latestYear)
        .then(response=>{
          var chartData = response.data;
          createChart(chartData);
        })
        .catch(error=>{
          console.error('Error fetching data:', error);
        });
      }
      document.getElementById('tahunSelect').addEventListener('change',function() {
        var selectedYear = this.value;
        fetchData(selectedYear)
        .then(response=>{
          var chartData = response.data;
          createChart(chartData);
        })
        .catch(error=>{
          console.error('Error fetching data:', error);
        });
      });
      axios.get('https://scenix-photo.000webhostapp.com/selectyears.php')
        .then(response => {
          var tahunData = response.data;
          populateSelectOptions(tahunData);
        })
        .catch(error => {
          console.error('Error fetching years data', error);
        });
      axios.get('https://scenix-photo.000webhostapp.com/sumnews.php')
        .then(response => {
          var dataSumNews = response.data;
          var sumNewsElement = document.getElementById('jumlahBerita');
          sumNewsElement.innerHTML = dataSumNews[0].sum_news;
        })
        .catch(error => {
          console.error('Error fetching data', error);
        });
        function downloadExcel(){
          var selectedYear = document.getElementById('tahunSelect').value;
          fetchData(selectedYear)
          .then(response=>{
            var data = response.data;
            var ws = XLSX.utils.json_to_sheet(data);
            var wb = XLSX.utils.book_new();
            XLSX.utils.book_append_sheet(wb, ws, "Report");
            XLSX.writeFile(wb, "report_excel_"+selectedYear+".xlsx");
          })
          .catch(error => {
            console.error('Error fetching data for excel', error);
          });
        }
        function downloadPDF(){
          var canvas = document.getElementById('newsChart');
          var imgData = canvas.toDataURL('image/png');
          var selectedYear = document.getElementById('tahunSelect').value;
          var docDefinition = {
            content: [
              { text: 'Report ' + selectedYear, style: 'header' },
              { image: imgData, width: 500 },
            ],
            styles: {
              header: {
                fontSize: 18,
                bold: true,
                margin: [0, 0, 0, 10],
              },
            },
          };
          pdfMake.createPdf(docDefinition).download('report_pdf_'+selectedYear+'.pdf');
        }
    </script>
  </body>
</html>
