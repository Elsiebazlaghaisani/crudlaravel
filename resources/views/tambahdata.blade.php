<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD LARAVEL</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style>
    body {
        font-family: 'Poppins';font-size: 16px;
    }
    </style>
</head>

<body>
  <h1 class="text-center mb-4">Tambah Data Player</h1>


  <div class="container">

    <div class="row justify-content-center">
      <div class="col-8">
      <div class="card">
        <div class="card-body">
          <form action="/insertdata" method="GET" enctype="multipart/form-data">
            <form action="/insertdata" method="GET" enctype="multipart/form-data">
            @csrf{{-- penting untuk insert data --}}
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
              <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
  
              <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
              <select class="form-select" name="jeniskelamin" aria-label="Default select example" required>
                <option value="" >Pilih Jenis Kelamin</option>
                <option value="1">Laki Laki</option>
                <option value="2">Perempuan</option>  
              </select>
            </div>
            
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required >
          </div>
  
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Masukkan foto</label>
            <input type="file" class="form-control" name="foto" required>
          </div>
  
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
      </div>

    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</body>

</html>