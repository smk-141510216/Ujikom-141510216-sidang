<?php $__env->startSection('content'); ?>
<?php $page="Tambah Penggjian"?>
<title>Golongan</title>
<div class="col-md-6 col-md-offset-3">
	<div class="panel panel-primary">
		<div class="panel-heading" ><center>Tambah Penggajian</center></div>
			<div class="panel-body">
				<form class="form-horizontal" action="<?php echo e(route('penggajian.store')); ?>" method="POST">
                    <div class="form-group<?php echo e($errors->has('id_pegawai') ? ' has-error' : ''); ?>">
                            <label for="pegawaiid_pegawai_id" class="col-md-4 control-label">Nama Pegawai :</label>
                                <div class="col-md-6">
                                    <select type="text" name="id_pegawai" class="form-control">
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
                                <?php if(isset($_GET['errors_match'])): ?>
                            <span class="help-block">
                                    <strong>Pegawai sudah melakukan penggajian bulan ini</strong>
                            </span>
                            <?php endif; ?>
                            <?php if(isset($missing_count)): ?>
                            <div  style="width: 100%;color: red;text-align: center;">
                                Tunjangan Pegawai InI Tidak Ada  <br>Silahkan Buat <a href="<?php echo e(url('tunjanganpegawai/create')); ?>"></a>
                            </div>
                            <?php endif; ?>
                            </div>
                    </div>
					<div class="form-group">
						<div class="col-md-6 col-md-offset-4" >
							<button type="submit" class="btn btn-primary">
								Simpan
							</button>
						</div>
					</div>
				</form>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>