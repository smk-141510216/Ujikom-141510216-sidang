<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Tambah Golongan</center></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('golongan.store')); ?>">
                        <?php echo e(csrf_field()); ?>


                            <div class="form-group ">
                            <label for="kode_golongan" class="col-md-4 control-label">Kode Golongan</label>
                            <div class="col-md-6">
                            <div class="form-group <?php echo e($errors->has('kode_golongan') ? 'has-errors':'message'); ?>" >
                                <input id="kode_golongan" type="text" class="form-control" name="kode_golongan" value="<?php echo e(old('kode_golongan')); ?>"   autofocus>
                            <?php if($errors->has('kode_golongan')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('kode_golongan')); ?></strong>
                                </span>
                            <?php endif; ?>
                            </div>  
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="nama_golongan" class="col-md-4 control-label">Nama Golongan</label>
                            <div class="col-md-6">
                            <div class="form-group <?php echo e($errors->has('nama_golongan') ? 'has-errors':'message'); ?>" >
                                <input id="nama_golongan" type="text" class="form-control" name="nama_golongan" value="<?php echo e(old('nama_golongan')); ?>" autofocus>
                             <?php if($errors->has('nama_golongan')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('nama_golongan')); ?></strong>
                                </span>
                            <?php endif; ?>
                            </div>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="besaran_uang" class="col-md-4 control-label">Besaran Uang</label>
                            <div class="col-md-6">
                            <div class="form-group <?php echo e($errors->has('besaran_uang') ? 'has-errors':'message'); ?>" >
                                <input id="besaran_uang" type="text" class="form-control" name="besaran_uang" value="<?php echo e(old('besaran_uang')); ?>"  autofocus>
                             <?php if($errors->has('besaran_uang')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('besaran_uang')); ?></strong>
                                </span>
                            <?php endif; ?>
                            </div>
                            </div>
                            </div>

                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" >
                                    Simpan
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