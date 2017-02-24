<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Register</center></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('jabatan.update',$jabatan->id)); ?>">
                       <input name="_method" type="hidden" value="PATCH">
                        <?php echo e(csrf_field()); ?>


                            <label for="kode_jabatan" class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                <input id="kode_jabatan" type="text" class="form-control" name="kode_jabatan" value="<?php echo e($jabatan->kode_jabatan); ?>" required autofocus>
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