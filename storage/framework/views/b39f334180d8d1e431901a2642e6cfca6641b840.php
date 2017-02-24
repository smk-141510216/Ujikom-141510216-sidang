<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Tambah Tunjangan</center></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('tunjangan.store')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group">
                            <label for="kode_tunjangan" class="col-md-4 control-label">Kode Tunjangan</label>
                            <div class="col-md-6">
                            <div class="form-group <?php echo e($errors->has('kode_tunjangan') ? 'has-errors':'message'); ?>" >
                                <input id="kode_tunjangan" type="text" class="form-control" name="kode_tunjangan" value="<?php echo e(old('kode_tunjangan')); ?>"  autofocus>
                             <?php if($errors->has('kode_tunjangan')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('kode_tunjangan')); ?></strong>
                                </span>
                            <?php endif; ?>
                            </div>
                            </div>
                        </div>

                            <div class="form-group " >
                            <label for="name" class="col-md-4 control-label">Nama Golongan </label>
                            <div class="col-md-6">
                            <div class="form-group <?php echo e($errors->has('id_golongan') ? 'has-errors':'message'); ?>" >
                            <select class="form-control" name="id_golongan" >
                            <option value="">Pilih</option>
                            <?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <option value="<?php echo $data->id; ?>"><?php echo $data->nama_golongan; ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </select>
                             <?php if($errors->has('id_golongan')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('id_golongan')); ?></strong>
                                </span>
                            <?php endif; ?>
                            </div>
                            </div>
                            </div>

                            <div class="form-group " >
                        <label for="name" class="col-md-4 control-label">Nama Jabatan </label>
                        <div class="col-md-6">
                        <div class="form-group <?php echo e($errors->has('id_jabatan') ? 'has-errors':'message'); ?>" >
                            <select class="form-control" name="id_jabatan" >
                            <option value="">Pilih</option>
                            <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <option value="<?php echo $data->id; ?>"><?php echo $data->nama_jabatan; ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </select>
                           <?php if($errors->has('id_jabatan')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('id_jabatan')); ?></strong>
                                </span>
                            <?php endif; ?>
                            </div>
                            </div>
                            </div>


                            <div class="form-group">
                            <label for="status" class="col-md-4 control-label">Status</label>
                            <div class="col-md-6">
                            <div class="form-group <?php echo e($errors->has('status') ? 'has-errors':'message'); ?>" >
                            <select class="form-control" name="status" >
                            <option value="">Pilih</option>
                            <option value='kawin'>Kawin</option>
                            <option value="Lajang">Lajang</option>
                                </select>
                             <?php if($errors->has('status')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('status')); ?></strong>
                                </span>
                            <?php endif; ?>
                            </div>
                            </div>
                           

                           <div class="form-group">
                            <label for="jumlah_anak" class="col-md-4 control-label">Jumlah Anak</label>
                            <div class="col-md-6">
                            <div class="form-group <?php echo e($errors->has('jumlah_anak') ? 'has-errors':'message'); ?>" >
                                <input id="jumlah_anak" type="text" class="form-control" name="jumlah_anak" value="<?php echo e(old('jumlah_anak')); ?>"  autofocus>
                             <?php if($errors->has('jumlah_anak')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('jumlah_anak')); ?></strong>
                                </span>
                            <?php endif; ?>
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