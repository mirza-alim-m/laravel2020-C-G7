<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah password</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <div class="container">
        <div class="col-lg-10 mx-auto">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h2>Ubah Password</h2>
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

                    @if ($id)
                    <form action="{{ route('profile.update', $id) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>password:</strong>
                                    <input type="password" name="password" class="form-control" placeholder="password">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Retype password:</strong>
                                    <input type="password" class="form-control" name="rpassword" placeholder="tulis ulang password">
                                </div>
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