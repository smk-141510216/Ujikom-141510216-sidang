<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Index Tunjangan</center></div>

                <div class="panel-body">
                    <table class="table" border="2">
                        <thead>
                            <tr>
                            <th><center>No</center></th>
                            <th><center>Kode Tunjangan</center></th>
                            <th><center>Nama Jabatan</center></th>
                            <th><center>NamaGologan</center></th>
                            <th><center>Status</center></th>
                            <th><center>Jumlah Anak</center></th>
                            <th><center>Besaran Uang</center></th>
                            <th><center>Opsi</center></th>
                        </tr>
                        </thead>
                        <?php 
                        $a=1;
                         ?>
                        <?php $__currentLoopData = $tunjangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <tbody>
                            <tr>
                                <td><center><?php echo e($a++); ?></center></td>
                                <td><center><?php echo e($data->kode_tunjangan); ?></center></td>
                                <td><center><?php echo e($data->jabatan->nama_jabatan); ?></center></td>
                                <td><center><?php echo e($data->golongan->nama_golongan); ?></center></td>
                                <td><center><?php echo e($data->status); ?></center></td>
                                <td><center><?php echo e($data->jumlah_anak); ?></center></td>
                                <td><center><?php echo e($data->besaran_uang); ?></center></td>
                                 <td >
                                  <center><a data-toggle="modal" href="#delete<?php echo e($data->id); ?>" class="btn btn-danger" title="Delete" data-toggle="tooltip">Delete</a></center>
                                  <?php echo $__env->make('modals.delete', [
                                    'url' => route('tunjangan.destroy', $data->id),
                                    'model' => $data
                                  ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            </td>
                            </tr>
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