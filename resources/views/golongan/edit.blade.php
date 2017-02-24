@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Ubah Golongan</center></div>

               
                <div class="panel-body">
                    <form action="{{route('golongan.update',$golongan->id)}}" method="POST">
                    	<input name="_method" type="hidden" value="PATCH">
                    	{{csrf_field()}}
                    	<div class="form-group">
						<label for="kode_golongan" class="col-md-4 control-label">Kode Golongan </label>
                        <div class="col-md-6">
                        <div class="form-group {{$errors->has('kode_golongan') ? 'has-errors':'message'}}" >
							<input type="text" name="kode_golongan" class="form-control"  value="{{$golongan->kode_golongan}}" autofocus>
                        @if($errors->has('kode_golongan'))
                                <span class="help-block">
                                    <strong>{{$errors->first('kode_golongan')}}</strong>
                                </span>
                        @endif
                            </div>
						</div>
                        </div>

						<div class="form-group">
							<label for="nama_golongan" class="col-md-4 control-label">Nama Golongan</label>
                        <div class="col-md-6">
                        <div class="form-group {{$errors->has('nama_golongan') ? 'has-errors':'message'}}" >
							<input type="text" name="nama_golongan" class="form-control" value ="{{$golongan->nama_golongan}}">
                        @if($errors->has('nama_golongan'))
                                <span class="help-block">
                                    <strong>{{$errors->first('nama_golongan')}}</strong>
                                </span>
                            @endif
                            </div>
						</div>
                        </div>

						<div class="form-group">
							<label for="besaran_uang" class="col-md-4 control-label">Besaran Uang</label>
                        <div class="col-md-6">
                        <div class="form-group {{$errors->has('besaran_uang') ? 'has-errors':'message'}}" >
							<input type="text" name="besaran_uang" class="form-control" value ="{{$golongan->besaran_uang}}">
                         @if($errors->has('besaran_uang'))
                                <span class="help-block">
                                    <strong>{{$errors->first('besaran_uang')}}</strong>
                                </span>
                            @endif
                            </div>
						</div>
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
@endsection





                
