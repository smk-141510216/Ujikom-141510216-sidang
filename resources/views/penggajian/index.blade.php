@extends('layouts.app')
@section('content')
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
							@if(isset($tunjangan_penggajian))
							
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
                                	<td></td>
								</tr>	
							
							@else
							
							@foreach($penggajian as $data)
								<tr>
								@if(Auth::user()->name==$data->tunjangan_pegawai->pegawai->user->name)
									<td>{{$data->tunjangan_pegawai->pegawai->user->name}}</td>
									<td>{{$data->tunjangan_pegawai->tunjangan->besaran_uang}}</td>
									<td>{{$data->tunjangan_pegawai->pegawai->nip}}</td>

									<td align="right" class="action-web">
									<a href="{{url('penggajian',$data->id)}}" class="btn btn-default" title="Details"><i class="fa fa-eye"></i></a></td>


                                <td >
                                  <a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" title="Delete" data-toggle="tooltip"><i class="glyphicon glyphicon-trash"></i></a>
                                  @include('modals.delete', [
                                    'url' => route('penggajian.destroy', $data->id),
                                    'model' => $data
                                  ])
                                </td>
								</tr>
								
                               @endif
							@endforeach
							
							@endif
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection