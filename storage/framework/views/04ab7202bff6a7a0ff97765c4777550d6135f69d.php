<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Register</center></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('tunjangan_pegawai.update',$tunjangan_pegawai->id)); ?>">
                        <input name="_method" type="hidden" value="PATCH">
                        <?php echo e(csrf_field()); ?>

                            
                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nip Pegawai</label>
                            <div class="col-md-6">
                            <select class="form-control" name="id_pegawai" required>
                            <option >Pilih</option>
                            <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <option value="<?php echo $data->id; ?>"><?php echo $data->nip; ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </select>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Uang Tunjangan</label>
                            <div class="col-md-6">
                            <select class="form-control" name="id_tunjangan" required>
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
                                    Register
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