@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Tambah Kategori Lembur</center></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('kategori_lembur.store') }}">
                        {{ csrf_field() }}

                            <div class="form-group">
                            <label for="kode_lembur" class="col-md-4 control-label">Kode Kategori Lembur</label>
                            <div class="col-md-6">
                               <div class="form-group {{$errors->has('kode_lembur') ? 'has-errors':'message'}}" > 
                               <input id="kode_lembur" type="text" class="form-control" name="kode_lembur" value="{{ old('kode_lembur') }}"  autofocus>
                            @if($errors->has('kode_lembur'))
                                <span class="help-block">
                                    <strong>{{$errors->first('kode_lembur')}}</strong>
                                </span>
                            @endif
                            </div> 
                            </div>
                            </div>

                            <div class="form-group " >
                            <label for="name" class="col-md-4 control-label">Nama Golongan </label>
                            <div class="col-md-6">
                            <div class="form-group {{$errors->has('id_golongan') ? 'has-errors':'message'}}" >
                            <select class="form-control" name="id_golongan" >
                            <option value="">Pilih</option>
                            @foreach($golongan as $data)
                            <option value="{!! $data->id !!}">{!! $data->nama_golongan !!}</option>
                            @endforeach
                            </select>
                             @if($errors->has('id_golongan'))
                                <span class="help-block">
                                    <strong>{{$errors->first('id_golongan')}}</strong>
                                </span>
                            @endif
                            </div>
                            </div>
                            </div>

                            <div class="form-group " >
                            <label for="name" class="col-md-4 control-label">Nama Jabatan </label>
                            <div class="col-md-6">
                            <div class="form-group {{$errors->has('id_jabatan') ? 'has-errors':'message'}}" >
                            <select class="form-control" name="id_jabatan" >
                            <option  value="">Pilih</option>
                            @foreach($jabatan as $data)
                            <option value="{!! $data->id !!}">{!! $data->nama_jabatan !!}</option>
                            @endforeach
                            </select>
                            @if($errors->has('id_jabatan'))
                                <span class="help-block">
                                    <strong>{{$errors->first('id_jabatan')}}</strong>
                                </span>
                            @endif
                            </div>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="besaran_uang" class="col-md-4 control-label">Besaran Uang</label>
                            <div class="col-md-6">
                            <div class="form-group {{$errors->has('besaran_uang') ? 'has-errors':'message'}}" >
                                <input id="besaran_uang" type="text" class="form-control" name="besaran_uang" value="{{ old('besaran_uang') }}"  autofocus>
                             @if($errors->has('besaran_uang'))
                                <span class="help-block">
                                    <strong>{{$errors->first('besaran_uang')}}</strong>
                                </span>
                            @endif

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
@endsection
