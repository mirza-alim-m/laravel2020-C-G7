

<?php $__env->startSection('title', 'Laravel - Toko Elektronik'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="jumbotron">

            <?php if($msg = Session::get('msg')): ?>
                <div class="alert alert-success">
                    <span><?php echo e($msg); ?></span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>   
                </div>
            <?php endif; ?> 

            <h1 class="display-6">Data Barang</h1>
            <hr class="my-2">     

            <a href="<?php echo e(route('barang.create')); ?>" class="btn btn-primary mb-1 my-3">Tambah Barang</a>
            
            <table class="table table-bordered table-striped" id="table-barang">
                <thead class="thead-dark">
                    <tr>
                
                    <th scope="col">ID</th>
                    <th scope="col">Jenis Barang</th>
                    <th scope="col">Type Barang</th>
                    <th scope="col">Jumlah Barang</th>
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
                    url: "<?php echo e(route('barang.index')); ?>",
                    type: 'GET',
                },
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                    { data: 'jenis', name: 'jenis' },
                    { data: 'type', name: 'type' },
                    { data: 'jumlah', name: 'jumlah' },
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\smt6\framework\laravel2020-C-G7\resources\views/Data_Barang/data-barang.blade.php ENDPATH**/ ?>