<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Ubah Pegawai</center></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('pegawai.update',$pegawai->id)); ?>">
                        <input name="_method" type="hidden" value="PATCH">
                        <?php echo e(csrf_field()); ?>

                            
                            <div class="form-group">
                            <label for="nip" class="col-md-4 control-label">Nip</label>
                            <div class="col-md-6">
                                <input id="nip" type="text" class="form-control" name="nip" value="<?php echo e($pegawai->nip); ?>" required autofocus>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label">pengguna</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>"  autofocus>
                            </div>
                            </div>
                  

                            <div class="form-group">                     
                            <label for="email" class="col-md-4 control-label">Alamat E-mail</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" > 
                            </div>
                            </div>
                            



                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nama Golongan</label>
                            <div class="col-md-6">
                            <select class="form-control" name="id_golongan" required>
                            <option >Pilih</option>
                            <?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <option value="<?php echo $data->id; ?>"><?php echo $data->nama_golongan; ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </select>
                            </div>
                            </div>

                            <div class="form-group">
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

                            <div class="form-group">
                            <label for="foto" class="col-md-4 control-label">Foto</label>
                            <div class="col-md-6">
                                <input id="foto" type="file" class="form-control" name="foto" value="<?php echo e(old('foto')); ?>"  autofocus></input> 
                            </div>
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