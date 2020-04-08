<?php $__env->startSection('title', 'Laravel - Data Penjualan Toko'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="jumbotron">

            <?php
                $jenis = ['samsung', 'xiaomi', 'Oppo', 'iphone', 'Nokia', "SEMUA"];
            ?>
                    
                

                <?php if($msg = Session::get('msg')): ?>
                    <div class="alert alert-success">
                        <span><?php echo e($msg); ?></span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>   
                    </div>
                <?php endif; ?>


            <h1 class="display-6">Kategori Barang</h1>
            <hr class="my-2">     

            <a href="<?php echo e(route('kategori.create')); ?>" class="btn btn-primary mb-1 my-3">Tambah Kategori</a>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Kategori</th>
                        <th scope="col" width="20%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php $__empty_1 = true; $__currentLoopData = $dataKategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($no++); ?> </td>
                        <td><?php echo e($brg['nama_kategori']); ?></td>
                        <td>
                            <form action="<?php echo e(route('kategori.destroy',$brg['id'])); ?>" method="POST">
                            <a href="<?php echo e(route('kategori.show',$brg['id'])); ?>" class="badge badge-primary">Detail</a>
                            <a href="<?php echo e(route('kategori.edit',$brg['id'])); ?>" class="badge badge-primary">Edit</a>
                            <?php echo e(csrf_field()); ?>

                            <?php echo e(method_field('DELETE')); ?>

                            <button type="submit" class="badge badge-danger" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <td colspan="3"> Tidak ada Data</td>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        function action(){  
            var jenis = document.getElementById('jenis').value;
            window.location = "<?php echo e(url('kategori')); ?>/"+jenis;
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\smt6\framework\laravel2020-C-G7\resources\views/Kategori_barang/data-kategori.blade.php ENDPATH**/ ?>