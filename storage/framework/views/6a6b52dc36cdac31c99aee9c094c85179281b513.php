<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Tambah Lembur Pegawai</center></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('lembur_pegawai.store')); ?>">
                        <?php echo e(csrf_field()); ?>



                       

                               <div class="form-group">
                               <label for="name" class="col-md-4 control-label">Nama Pegawai</label>
                               <div class="col-md-6">
                             
                               <div class="form-group <?php echo e($errors->has('id_pegawai') ? 'has-errors':'message'); ?>" >
                               <select class="form-control" name="id_pegawai" >
                                <option value="">pilihan</option>
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
                                </div>
                         

                                <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Uang Kategori Lembur</label>
                                <div class="col-md-6">
                                <div class="form-group <?php echo e($errors->has('kode_lembur_id') ? 'has-errors':'message'); ?>" >
                                <select class="form-control" name="kode_lembur_id" >
                                    <option value="">pilih</option>
                                    <?php $__currentLoopData = $kategori_lembur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo $data->id; ?>"><?php echo $data->besaran_uang; ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </select>
                                <?php if($errors->has('kode_lembur_id')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('kode_lembur_id')); ?></strong>
                                </span>
                                 <?php endif; ?>
                                </div>
                                </div>
                                </div>

                            <div class="form-group">
                            <label for="jumlah_jam" class="col-md-4 control-label">Jumlah Jam</label>
                            <div class="col-md-6">
                            <div class="form-group <?php echo e($errors->has('jumlah_jam') ? 'has-errors':'message'); ?>" >
                                <input id="jumlah_jam" type="text" class="form-control" name="jumlah_jam" value="<?php echo e(old('jumlah_jam')); ?>"  autofocus>
                             <?php if($errors->has('jumlah_jam')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('jumlah_jam')); ?></strong>
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