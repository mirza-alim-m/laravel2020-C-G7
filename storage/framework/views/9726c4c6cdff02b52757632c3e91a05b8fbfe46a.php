<?php $__env->startSection('title', 'Laravel - SI Toko Elektronik'); ?>

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


            <h1 class="display-6">Data Karyawan</h1>
            <hr class="my-2">     

            <a href="<?php echo e(route('karyawan.create')); ?>" class="btn btn-primary mb-1 my-3">Tambah Karyawan</a>

            <table class="table table-bordered table-striped" id="table-karyawan">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Karyawan</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">No Hp</th>
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
                    url: "<?php echo e(route('karyawan.index')); ?>",
                    type: 'GET',
                },
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                    { data: 'nama', name: 'nama' },
                    { data: 'alamat', name: 'alamat' },
                    { data: 'jabatan', name: 'jabatan' },
                    { data: 'no_hp', name: 'no_hp' },
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        });
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\smt6\framework\laravel2020-C-G7\resources\views/Data_karyawan/data-karyawan.blade.php ENDPATH**/ ?>