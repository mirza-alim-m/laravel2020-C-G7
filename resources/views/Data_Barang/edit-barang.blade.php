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
                    
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if ($dataBarang)
                    <form action="{{ route('barang.update', $dataBarang['id']) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                      
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>jenis:</strong>
                                    <input type="text" value="{{ $dataBarang['jenis'] }}" name="jenis" class="form-control" placeholder="jenis">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>type:</strong>
                                    <input type="text" value="{{ $dataBarang['type'] }}" class="form-control" name="type" placeholder="type">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>jumlah:</strong>
                                    <input type="text" value="{{ $dataBarang['jumlah'] }}" class="form-control" name="jumlah" placeholder="jumlah">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nama">Foto</label></br>
                                <input type="file" name="foto" placeholder="Foto" value="{{ $dataBarang['foto'] }}">
                            </div>
                            <div class="form-group">
                                <label for="nama">File</label></br>
                                <input type="file" name="filepdf" placeholder="File Pdf" value="{{ $dataBarang['filepdf'] }}">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                    @endif

                </div>
            </div>
        </div>
    </div>
</body>
</html>