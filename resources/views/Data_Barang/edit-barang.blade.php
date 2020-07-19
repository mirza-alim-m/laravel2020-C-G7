<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Barang</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <div class="container">
        <div class="col-lg-10 mx-auto">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h2>Edit Barang</h2>
                </div>
                <div class="card-body">
                    
                @foreach($barang as $brg)
                    @if ($brg)
                    <form action="{{ route('barang.update', $brg->id) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                      
                         <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Jenis:</strong>
                                    <input type="text" value="{{ $brg['jenis'] }}" name="jenis" class="form-control" placeholder="Jenis ">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Type:</strong>
                                    <input type="text" value="{{ $brg['type'] }}" class="form-control" name="type" placeholder="type ">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Jumlah:</strong>
                                    <input type="text" value="{{ $brg['jumlah'] }}" class="form-control" name="jumlah" placeholder="Jumlah ">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nama">Foto</label></br>
                                <input type="file" name="foto" placeholder="Foto">
                            </div>
                            <div class="form-group">
                                <label for="nama">File</label></br>
                                <input type="file" name="filepdf" placeholder="File Pdf">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                    @endif
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</body>
</html>