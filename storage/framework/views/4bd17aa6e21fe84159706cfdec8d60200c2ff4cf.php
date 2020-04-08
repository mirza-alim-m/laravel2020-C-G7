<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Barang</title>

    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</head>
<body>
    <div class="container">
        <div class="col-lg-10 mx-auto">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h2>Edit Barang</h2>
                </div>
                <div class="card-body">
                    
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <?php if($dataBarang): ?>
                    <form action="<?php echo e(route('barang.update', $dataBarang['id'])); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <?php echo e(method_field('PUT')); ?>

                      
                         <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Jenis:</strong>
                                    <input type="text" value="<?php echo e($dataBarang['jenis']); ?>" name="jenis" class="form-control" placeholder="Jenis HP">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Kategori:</strong>
                                    <select name="id_kategori" class="form-control" required>
                                      <option value="" selected disabled>Pilih Kategori</option>
                                        <?php $kategori = App\BarangKategori::all(); ?>
                                        <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($data['id']); ?>" <?php echo e($dataBarang['id_kategori'] == $data['id'] ? 'selected':''); ?> ><?php echo e($data['nama_kategori']); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>TypeHp:</strong>
                                    <input type="text" value="<?php echo e($dataBarang['type']); ?>" class="form-control" name="type" placeholder="type HP">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>JumlahHp:</strong>
                                    <input type="text" value="<?php echo e($dataBarang['jumlah']); ?>" class="form-control" name="jumlah" placeholder="Jumlah Hp">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\smt6\framework\laravel2020-C-G7\resources\views/Data_Barang/edit-barang.blade.php ENDPATH**/ ?>