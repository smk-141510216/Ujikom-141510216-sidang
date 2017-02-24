<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">


                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
            
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <ul class="nav navbar-nav">

                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              Golongan<span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                    
                     <li><a href="<?php echo e(url('/golongan/create')); ?>">Tambah Golongan</a></li>
                     <li><a href="<?php echo e(url('/golongan')); ?>">Index Golongan</a></li></ul>

                <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              Jabatan<span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                    
                     <li><a href="<?php echo e(url('/jabatan/create')); ?>">Tambah Jabatan</a></li>
                     <li><a href="<?php echo e(url('/jabatan')); ?>">Index Jabatan</a></li></ul>

                     
                      <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              Pegawai<span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                    
                     <li><a href="<?php echo e(url('/pegawai/create')); ?>">Tambah Pegawa</a></li>
                     <li><a href="<?php echo e(url('/pegawai')); ?>">Index Pegawa</a></li></ul>
                      <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              Kategori Lembur<span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                    
                     <li><a href="<?php echo e(url('/kategori_lembur/create')); ?>">Tambah Kategori Lembur</a></li>
                     <li><a href="<?php echo e(url('/kategori_lembur')); ?>">Index Kategori Lembur</a></li></ul>

                      <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              Lembur Pegawai<span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                    
                     <li><a href="<?php echo e(url('/lembur_pegawai/create')); ?>">Tambah Lembur Pegawai</a></li>
                     <li><a href="<?php echo e(url('/lembur_pegawai')); ?>">Index Lembur Pegawai </a></li></ul>
                    
                     <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              Tunjangan<span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                    
                     <li><a href="<?php echo e(url('/tunjangan/create')); ?>">Tambah tunjangan</a></li>
                     <li><a href="<?php echo e(url('/tunjangan')); ?>">Index tunjangan</a></li></ul>

                     

                     

                      <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              Tunjangan Pegawai<span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                    
                     <li><a href="<?php echo e(url('/tunjangan_pegawai/create')); ?>">Tambah Tunjangan Pegawai  </a></li>
                     <li><a href="<?php echo e(url('/tunjangan_pegawai')); ?>">Index Tunjangan Pegawai   </a></li></ul>




                    

                </ul>
        
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <?php if(Auth::guest()): ?>
                            <li><a href="<?php echo e(url('/login')); ?>">Login</a></li>
                            <li><a href="<?php echo e(url('/register')); ?>">Register</a></li>
                        <?php else: ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="<?php echo e(url('/logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>

                </div>
            </div>
        </nav>

        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
