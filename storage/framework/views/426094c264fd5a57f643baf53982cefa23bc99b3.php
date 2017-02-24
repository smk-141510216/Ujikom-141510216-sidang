<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Index Lembur Pegawai</center></div>

                <div class="panel-body">
                <table class="table" border="2">
                    <thead>
                    <tr>
                        <th><center>No</th></center>
                        <th><center>Uang Kategori Lembur</th></center>
                        <th><center>Nip Pegawai</th></center>
                        <th><center>Jumlah Jam</th></center>
                        <th colspan="2"><center>Opsi</th></center>
                    </tr>
                </head>
                <?php 
                $a=1;
                 ?>
                <?php $__currentLoopData = $lembur_pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <tbody>
                    <td><center><?php echo e($a++); ?></td></center>
                    <td><center><?php echo e($data->kategori_lembur->besaran_uang); ?></td></center>
                    <td><center><?php echo e($data->pegawai->nip); ?></td></center>
                    <td><center><?php echo e($data->jumlah_jam); ?></td></center>
                    <td><center>
                                <a href="<?php echo e(route('lembur_pegawai.edit',$data->id)); ?>" class="btn btn-primary">Ubah</a>
                            </center></td>
                     <td >
                                  <center><a data-toggle="modal" href="#delete<?php echo e($data->id); ?>" class="btn btn-danger" title="Delete" data-toggle="tooltip">Delete</a></center>
                                  <?php echo $__env->make('modals.delete', [
                                    'url' => route('lembur_pegawai.destroy', $data->id),
                                    'model' => $data
                                  ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            </td>
                </tbody>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>