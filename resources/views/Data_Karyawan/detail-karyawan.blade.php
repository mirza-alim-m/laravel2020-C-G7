<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Karyawan</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <div class="container">
        <div class="col-lg-10 mx-auto">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h2>Detail Karyawan</h2>
                </div>
                <div class="card-body">
                    
                    <table class="table">
                        @if ($dataKaryawan)
                          <tr>
                            <th style="border:0">Nama</th>
                            <td style="border:0">:</td>
                            <td style="border:0">{{ $dataKaryawan['nama'] }}</td>
                          </tr>
                          <tr>
                            <th style="border:0">Alamat</th>
                            <td style="border:0">:</td>
                            <td style="border:0">{{ $dataKaryawan['alamat'] }}</td>
                          </tr>
                          <tr>
                            <th style="border:0">Jabatan</th>
                            <td style="border:0">:</td>
                            <td style="border:0">{{ $dataKaryawan['jabatan'] }}</td>
                          </tr>
                          <tr>
                            <th style="border:0">No HP</th>
                            <td style="border:0">:</td>
                            <td style="border:0">{{ $dataKaryawan['no_hp'] }}</td>
                          </tr>
                          <tr>
                            <th style="border:0">Foto</th>
                            <td style="border:0">:</td>
                            <td><img src='{{ Storage::url("public/foto/".$dataKaryawan->foto) }}' class='img-fluid img-thumbnails' style='width:80px; height:100px;'></td>
                        </tr>
                        <tr>
                            <th style="border:0">Pdf</th>
                            <td style="border:0">:</td>
                            <td><a href='{{ Storage::url("public/pdf/".$dataKaryawan->filepdf) }}'>link</a></td>
                        </tr>
                        @else
                            <td colspan="4">Tidak dapat menampilkan detail data</td>
                        @endif
                      </table>

                </div>
            </div>
        </div>
    </div>
</body>
</html>