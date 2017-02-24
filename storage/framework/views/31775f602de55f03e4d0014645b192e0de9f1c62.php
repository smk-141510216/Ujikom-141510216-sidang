<?php $__env->startSection('content'); ?>
<?php $page = "Tabel Penggajian" ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading" align="center" ><font face="Times New Roman" size="5" color="black">Index Penggajian</font></div>
                <div class="panel-body" align="center">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr class="success">
									<th>Nama Pegawai</th>
									<th>Tunjangan Pegawai</th>
									<th>NIP Pegawai</th>
									<th colspan="3"><center>Aksi</center></th>
								</tr>
							</thead>
							<tbody>
							<?php if(isset($tunjangan_penggajian)): ?>
							
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
                                	<td></td>
								</tr>	
							
							<?php else: ?>
							
							<?php $__currentLoopData = $penggajian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
								<tr>
								<?php if(Auth::user()->name==$data->tunjangan_pegawai->pegawai->user->name): ?>
									<td><?php echo e($data->tunjangan_pegawai->pegawai->user->name); ?></td>
									<td><?php echo e($data->tunjangan_pegawai->tunjangan->besaran_uang); ?></td>
									<td><?php echo e($data->tunjangan_pegawai->pegawai->nip); ?></td>

									<td align="right" class="action-web">
									<a href="<?php echo e(url('penggajian',$data->id)); ?>" class="btn btn-default" title="Details"><i class="fa fa-eye"></i></a></td>


                                <td >
                                  <a data-toggle="modal" href="#delete<?php echo e($data->id); ?>" class="btn btn-danger" title="Delete" data-toggle="tooltip"><i class="glyphicon glyphicon-trash"></i></a>
                                  <?php echo $__env->make('modals.delete', [
                                    'url' => route('penggajian.destroy', $data->id),
                                    'model' => $data
                                  ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                </td>
								</tr>
								
                               <?php endif; ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
							
							<?php endif; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>