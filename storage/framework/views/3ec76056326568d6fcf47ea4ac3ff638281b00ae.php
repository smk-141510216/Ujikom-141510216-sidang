<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Index Golongan</center></div>

                <div class="panel-body">
                    <table class="table" border='2'>
                        <thead>
                            <tr>
                                <th><center>No</th></center>
                                <th><center>Kode Golongan</th></center>
                                <th><center>Nama Golongan</th></center>
                                <th><center>Besaran Uang</th></center>
                                <th colspan="2"><center>Opsi</th></center>
                            </tr>
                        </thead>
                        <?php 
                        $a=1;
                         ?>
                        <?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <tbody>
                            <td><center><?php echo e($a++); ?></td></center>
                            <td><center><?php echo e($data->kode_golongan); ?></td></center>
                            <td><center><?php echo e($data->nama_golongan); ?></td></center>
                            <td><center><?php echo e($data->besaran_uang); ?></td></center>
                            <td ><center>
                                    <a href="<?php echo e(route('golongan.edit', $data->id)); ?>" class="btn btn-primary">Ubah</a>
                            </center></td>
                           <td >
                                  <center><a data-toggle="modal" href="#delete<?php echo e($data->id); ?>" class="btn btn-danger" title="Delete" data-toggle="tooltip">Delete</a></center>
                                  <?php echo $__env->make('modals.delete', [
                                    'url' => route('golongan.destroy', $data->id),
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