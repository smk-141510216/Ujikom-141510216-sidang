<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Tambah Tunjangan Pegawai</center></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('tunjangan_pegawai.update',$tunjangan_pegawai->id)); ?>">
                        <input name="_method" type="hidden" value="PATCH">
                        <?php echo e(csrf_field()); ?>

                            
                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nama Pengguna</label>
                            <div class="col-md-6">
                             <div class="form-group <?php echo e($errors->has('id_pegawai') ? 'has-errors':'message'); ?>" >
                            <select class="form-control" name="id_pegawai" >
                            <option value="">Pilih</option>
                            <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <option value="<?php echo $data->id; ?>"><?php echo $data->User->name; ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </select>
                             <?php if($errors->has('id_pegawai')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('id_pegawai')); ?></strong>
                                </span>
                            <?php endif; ?>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Kode Tunjangan</label>
                            <div class="col-md-6">
                            <div class="form-group <?php echo e($errors->has('kode_tunjangan_id') ? 'has-errors':'message'); ?>" >
                            <select class="form-control" name="id_tunjangan" >
                            <option value="">Pilih</option>
                            <?php $__currentLoopData = $tunjangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <option value="<?php echo $data->id; ?>"><?php echo $data->besaran_uang; ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        
                            </select>
                             <?php if($errors->has('kode_tunjangan_id')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('kode_tunjangan_id')); ?></strong>
                                </span>
                            <?php endif; ?>
                            </div>
                            </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
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