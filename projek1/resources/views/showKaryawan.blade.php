<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>MidProjek</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="../css/styleindex.css" />
    </head>
    <body>
        <div id="hero">

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nomor Telepon</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($karyawans as $k)
                  <tr>
                    <td>{{$k->Nama}}</td>
                    <td>{{$k->Umur}}</td>
                    <td>{{$k->Alamat}}</td>
                    <td>{{$k->NomorTelepon}}</td>
                  </tr>
                  @endforeach

                </tbody>
              </table>

            <footer>谢谢! Thankyou! Terimakasih!</footer>
        </div>
    </body>
</html>
