@extends('main')

@section('title', 'Laravel - Toko Elektronik')

@section('content')
    <div class="container">
        <div class="jumbotron">
                @if ($msg = Session::get('msg'))
                    <div class="alert alert-success">
                        <span>{{ $msg }}</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>   
                    </div>
                @endif


            <h1 class="display-6">Data Karyawan</h1>
            <hr class="my-2">     

            <a href="{{ route('karyawan.create') }}" class="btn btn-primary mb-1 my-3">Tambah Karyawan</a>

            <table class="table table-bordered table-striped" id="table-karyawan">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Karyawan</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">No Hp</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Link Pdf</th>
                    <th scope="col">Action</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>                    
                </tbody>
            </table>
        </div>
    </div>

    <script>
        $(function() {
            $('#table-karyawan').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('karyawan.index') }}",
                    type: 'GET',
                },
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                    { data: 'nama', name: 'nama' },
                    { data: 'alamat', name: 'alamat' },
                    { data: 'jabatan', name: 'jabatan' },
                    { data: 'no_hp', name: 'no_hp' },
                    { data: 'foto', name: 'foto',
                        render: function( data, type, full, meta ) {
                            return "<img src=\"foto_karyawan/" + data + "\" width=\"80\" height=\"100\" class=\"img-fluid img-thumbnails\"/>";
                        }
                        },
                    { data: 'filepdf', name: 'filepdf', 
                        render: function( data, type, full, meta ) {
                        if(data == null){
                          return '<small class="text-muted">Belum upload</small>';
                        }else{
                          return "<a class='btn btn-rounded btn-success btn-sm' href=\"pdf_karyawan/" + data + "\" target='_blank'>PDF</a>"; 
                        }
                      }},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        });
    </script>

@endsection