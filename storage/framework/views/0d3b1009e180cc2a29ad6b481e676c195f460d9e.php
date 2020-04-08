<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script type="text/javascript" src="<?php echo e(asset('dataTables/jquery.min.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="<?php echo e(asset('dataTables/jquery.dataTables.min.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('dataTables/dataTables.bootstrap.min.css')); ?>">

    <script type="text/javascript" src="<?php echo e(asset('dataTables/dataTables.bootstrap.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('dataTables/jquery.dataTables.min.js')); ?>"></script>
    
    <title><?php echo $__env->yieldContent('title'); ?></title>
  </head>
  <body>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/">HOME</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-item nav-link" href="/barang">Barang</a>
                <a class="nav-item nav-link" href="/kategori">Kategori Barang</a>
                <a class="nav-item nav-link" href="/karyawan">Karyawan</a>
                <a class="nav-item nav-link" href="/pelanggan">Pelanggan</a>
                </div>
            </div>
        </nav>
    </div>

    <?php echo $__env->yieldContent('content'); ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  </body>
</html><?php /**PATH C:\xampp\htdocs\smt6\framework\laravel2020-C-G7\resources\views/main.blade.php ENDPATH**/ ?>