<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Ubah Golongan</center></div>

               
                <div class="panel-body">
                    <form action="<?php echo e(route('golongan.update',$golongan->id)); ?>" method="POST">
                    	<input name="_method" type="hidden" value="PATCH">
                    	<?php echo e(csrf_field()); ?>

                    	<div class="form-group">
						<label for="kode_golongan" class="col-md-4 control-label">Kode Golongan </label>
							<input type="text" name="kode_golongan" class="form-control"  value="<?php echo e($golongan->kode_golongan); ?>">
						</div>

						<div class="form-group">
							<label for="nama_golongan" class="col-md-4 control-label">Nama Golongan</label>
							<input type="text" name="nama_golongan" class="form-control" value ="<?php echo e($golongan->nama_golongan); ?>">
						</div>

						<div class="form-group">
							<label for="besaran_uang" class="col-md-4 control-label">Besaran Uang</label>
							<input type="text" name="besaran_uang" class="form-control" value ="<?php echo e($golongan->besaran_uang); ?>">
						</div>
						



                    	<div class="form-group">
                            <div class="col-md-6 col-md-offset-">
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