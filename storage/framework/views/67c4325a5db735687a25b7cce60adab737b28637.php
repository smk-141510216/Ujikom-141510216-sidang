<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Tambah Tunjangan Pegawai</center></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('tunjangan_pegawai.store')); ?>">
                        <?php echo e(csrf_field()); ?>


                          <div class="form-group<?php echo e($errors->has('id_pegawai') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">Nip Pegawai</label>
                            <div class="col-md-6">
                                <select class="form-control" name="id_pegawai" require>
                                    <option>pilih</option>
                                    <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo $data->id; ?>"><?php echo $data->nip; ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </select>
                            </div>
                        </div>

                       
                         <div class="form-group <?php echo e($errors->has('kode_tunjangan_id') ? ' has-error' : ''); ?>" >
                        <label for="name" class="col-md-4 control-label">Uang Tunjangan</label>
                        <div class="col-md-6">
                            <select class="form-control" name="kode_tunjangan_id" required>
                            <option >Pilih</option>
                            <?php $__currentLoopData = $tunjangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <option value="<?php echo $data->id; ?>"><?php echo $data->besaran_uang; ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </select>
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>