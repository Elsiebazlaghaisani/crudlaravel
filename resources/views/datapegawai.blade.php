<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD LARAVEL</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
    integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style>
    body {
        font-family: 'Poppins';font-size: 16px;
    }
    </style>
</head>

<body>
  <h1 class="text-center mb-4">Data Player</h1>


  <div class="container">
    <a href="/tambahpegawai" class="btn btn-success">Tambah +</a>

    <div class="row g-3 align-items-center mt-2">
      <div class="col-auto">
        <form action="/pegawai" method="GET">
        <input type="search" id="inputPassword6" name="search" placeholder="Search.." class="form-control" aria-describedby="passwordHelpInline">
      </form>
      </div>



    </div>

    <div class="row">
      <!-- @if ($message = Session::get('success'))
      <div class="alert alert-success" role="alert">
        {{ $message }}
      </div>
      @endif -->

      <table class="table table-success table-striped mt-3">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Email</th>
            <th scope="col">Foto</th>
            <th scope="col">Dibuat</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @php
          $no = 1;
          @endphp

          @foreach ( $data as $index => $row)
          <tr>
            <th scope="row">{{ $index + $data->firstItem() }}</th>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->jeniskelamin }}</td>
            <td>{{ $row->email }}</td>
            <td>
              <img src="{{ asset('img/'.$row->foto) }}" alt="" style="width: 60px;">
            </td>
            <td>{{ $row->created_at->diffForHumans()}}</td>
            <td>
              <a href="/tampilkandata/{{  $row->id }}" class="btn btn-info">Edit</a>
              <a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}"
                data-nama="{{ $row->nama }}">Delete</button>
            </td>
          </tr>
          @endforeach

        </tbody>
      </table>
      {{ $data->links() }}


    </div>
  </div>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</body>
<script>

  $('.delete').click(function () {
    var pegawaiid = $(this).attr('data-id');
    var nama = $(this).attr('data-nama');

    swal({
      title: "Yakin?",
      text: "Kamu akan menghapus data pegawai bernama " + nama + " ",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
      .then((willDelete) => {
        if (willDelete) {
          window.location = "/delete/" + pegawaiid + ""
          swal("Data berhasil dihapus", {
            icon: "success",
          });
        } else {
          swal("Data tidak jadi dihapus");
        }
      });
  });


</script>

<script>
  @if(Session::has('success'))  
  toastr.success("{{ Session::get('success') }}")
    @endif
</script>

</html>