<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MidProjek</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styleindex.css">
  </head>
  <body>

<div id="hero">
  <div class="judul">
    <h1 class="text-center pt-4 pb-4 fs-1" >
    Create Karyawan </h1>
  </div>

  <div class="container col-md-6 " style="padding-top: 20px">
        <div class="card shadow p-3" style="background-color:  rgba(117, 118, 117, 0.3);">
            <div class="card-body pt-4">
                <form action="/create-karyawan" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Karyawan</label>
                        <input name="nama" type="text" required minlength="5" maxlength="20"class="form-control" id="formGroupExampleInput"
                            placeholder="Input  Nama Karyawan">
                    </div>

                    <div class="mb-3">
                        <label for="Umur" class="form-label"> Umur Karyawan</label>
                        <input name="umur" type="number" required min="20" class="form-control" id="formGroupExampleInput"
                            placeholder="Input umur karyawan">
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat Karyawan</label>
                        <input name="alamat" type="text" class="form-control" minlength = "10" maxlength= "40" id="formGroupExampleInput"
                            placeholder="Input Alamat Karyawan">
                    </div>
                    <div class="mb-4">
                        <label for="nomortelepon" class="form-label">Nomor Telepon</label>
                        <input name="nomortelepon" type="number" class="form-control" id="formGroupExampleInput"
                            placeholder="Input Nomor Telepon">
                    </div>

                    <button type="submit" class="btn btn-success "> Submit </button>
                    <a class="btn btn-dark" href="/"> Back </a>
                </form>
            </div>
        </div>
    </div>

</div>
<footer>
        谢谢! Thankyou! Terimakasih!
</footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
