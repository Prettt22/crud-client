<!DOCTYPE html>
<html data-bs-theme="light">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Edit Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin.css" />
  </head>

  <body>
    <?php include 'part/header.php'; ?>
    <div class="col-12 pt-3 pb-2 mb-3">
      <div class="d-flex justify-content-between flex-wrap align-items-center">
        <h3 class="fw-bold">Edit Data</h3>
        <div class="btn-toolbar mb-2">
          <button type="button" class="btn btn-secondary" onclick="history.back()">
            <i class="ri-arrow-left-line"></i>
            Back
          </button>
        </div>
      </div>
    </div>
    <div class="col-12 mb-3">
      <div class="card">
        <div class="card-body">
          <form id="editNewsForm">
            <input type="hidden" id="newsId" name="newsId" value="<?= isset($_POST['id']) ? $_POST['id'] : null; ?>">
            <div class="mb-3">
              <label for="judul" class="form-label">Title</label>
              <input type="text" class="form-control" maxlength="50" id="judul" name="judul" required autocomplete="off">
            </div>
            <div class="mb-3">
              <label for="deskripsi" class="form-label">Description</label>
              <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
            </div>
            <div class="mb-5">
              <label for="url_image" class="form-label">Image</label>
              <input class="form-control" type="file" id="url_image" name="url_image" accept="image/*" required>
            </div>
            <button type="button" class="btn btn-primary" onclick="editNews()">Edit News</button>
          </form>
        </div>
      </div>
    </div>
    <?php include 'part/footer.php'; ?>
    <script>
      function getData(){
        const newsId = document.getElementById('newsId').value;
        var formData = new FormData();
        formData.append('idnews', newsId);
        axios
          .post("https://scenix-photo.000webhostapp.com/selectdata.php", formData)
          .then(function(response) {
            document.getElementById('judul').value = response.data.judul;
            document.getElementById('deskripsi').value = response.data.desk;
          })
          .catch(function(error) {
            console.error(error);
            alert("Error fetching news data.");
          });
      }
      function editNews(){
        const newsId = document.getElementById('newsId').value;
        const judul = document.getElementById("judul").value;
        const deskripsi = document.getElementById("deskripsi").value;
        const urlImageInput = document.getElementById("url_image");
        const url_image = urlImageInput.files[0];
        const tanggal = new Date().toISOString().split('T')[0];
        var formData = new FormData();
        formData.append('idnews', newsId);
        formData.append('judul', judul);
        formData.append('desk', deskripsi);
        formData.append('tgl', tanggal);

        if(urlImageInput.files.length > 0){
          formData.append('url_image', url_image);
        } else {
          formData.append('url_image', null);
        }

        axios
          .post("https://scenix-photo.000webhostapp.com/editnews.php", formData, {
            header: {
              'Content-Type': 'multipart/form-data'
            }
          })
          .then(function(response) {
            console.log(response.data);
            alert(response.data);
            window.location.href = "manage.php";
          })
          .catch(function(error) {
            console.error(error);
            alert("Error editing news.");
          });
      }
      window.onload = getData();
      document.getElementById("manage").classList.add("active");
    </script>
  </body>
</html>