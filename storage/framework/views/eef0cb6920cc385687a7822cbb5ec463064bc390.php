<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Tambah Kategori Lembur</center></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('kategori_lembur.store')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('kode_lembur') ? ' has-error' : ''); ?>">
                            <label for="kode_lembur" class="col-md-4 control-label">Kode Lembur</label>
                            <div class="col-md-6">
                                <input id="kode_lembur" type="text" class="form-control" name="kode_lembur" value="<?php echo e(old('kode_lembur')); ?>" required autofocus> 
                            </div>
                        </div>

                            <div class="form-group <?php echo e($errors->has('id_jabatan') ? ' has-error' : ''); ?>" >
                        <label for="name" class="col-md-4 control-label">Nama Jabatan </label>
                        <div class="col-md-6">
                            <select class="form-control" name="id_jabatan" required>
                            <option >Pilih</option>
                            <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <option value="<?php echo $data->id; ?>"><?php echo $data->nama_jabatan; ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </select>
                            </div>
                        </div>

                           <div class="form-group <?php echo e($errors->has('id_golongan') ? ' has-error' : ''); ?>" >
                        <label for="name" class="col-md-4 control-label">Nama Golongan </label>
                        <div class="col-md-6">
                            <select class="form-control" name="id_golongan" required>
                            <option >Pilih</option>
                            <?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <option value="<?php echo $data->id; ?>"><?php echo $data->nama_golongan; ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </select>
                            </div>
                        </div>


                            <div class="form-group<?php echo e($errors->has('besaran_uang') ? ' has-error' : ''); ?>">
                            <label for="besaran_uang" class="col-md-4 control-label">Besaran Uang</label>
                            <div class="col-md-6">
                                <input id="besaran_uang" type="text" class="form-control" name="besaran_uang" value="<?php echo e(old('besaran_uang')); ?>" required autofocus> 
                            </div>
                        </div>

                    

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
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