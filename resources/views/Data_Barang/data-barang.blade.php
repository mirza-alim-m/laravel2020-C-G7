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

            <h1 class="display-6">Data Barang</h1>
            <hr class="my-2">     

            <a href="{{ route('barang.create') }}" class="btn btn-primary mb-1 my-3">Tambah Barang</a>
            
            <table class="table table-bordered table-striped" id="table-barang">
                <thead class="thead-dark">
                    <tr>
                
                    <th scope="col">ID</th>
                    <th scope="col">Jenis Barang</th>
                    <th scope="col">Type Barang</th>
                    <th scope="col">Jumlah Barang</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Pdf</th>
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
            $('#table-barang').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('barang.index') }}",
                    type: 'GET',
                },
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                    { data: 'jenis', name: 'jenis' },
                    { data: 'type', name: 'type' },
                    { data: 'jumlah', name: 'jumlah' },
                    { data: 'foto', name: 'foto',
                        render: function( data, type, full, meta ) {
                            return "<img src=\"{{ Storage::url('public/foto/') }}" + data + "\" width=\"80\" height=\"100\" class=\"img-fluid img-thumbnails\"/>";
                        }
                        },
                    { data: 'filepdf', name: 'filepdf', 
                        render: function( data, type, full, meta ) {
                        if(data == null){
                          return '<small class="text-muted">Belum upload</small>';
                        }else{
                          return "<a class='btn btn-rounded btn-success btn-sm' href=\"{{ Storage::url('public/pdf/') }}" + data + "\" target='_blank'>PDF</a>"; 
                        }
                      }},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                    
                ]
            });
        });
    </script>
@endsection
<!-- a -->