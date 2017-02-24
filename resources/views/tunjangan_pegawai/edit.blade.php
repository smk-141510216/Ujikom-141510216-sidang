@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Tambah Tunjangan Pegawai</center></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('tunjangan_pegawai.update',$tunjangan_pegawai->id) }}">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                            
                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nama Pengguna</label>
                            <div class="col-md-6">
                             <div class="form-group {{$errors->has('id_pegawai') ? 'has-errors':'message'}}" >
                            <select class="form-control" name="id_pegawai" >
                            <option value="">Pilih</option>
                            @foreach($pegawai as $data)
                            <option value="{!! $data->id !!}">{!! $data->User->name !!}</option>
                            @endforeach
                            </select>
                             @if($errors->has('id_pegawai'))
                                <span class="help-block">
                                    <strong>{{$errors->first('id_pegawai')}}</strong>
                                </span>
                            @endif
                            </div>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Kode Tunjangan</label>
                            <div class="col-md-6">
                            <div class="form-group {{$errors->has('kode_tunjangan_id') ? 'has-errors':'message'}}" >
                            <select class="form-control" name="id_tunjangan" >
                            <option value="">Pilih</option>
                            @foreach($tunjangan as $data)
                            <option value="{!! $data->id !!}">{!! $data->besaran_uang !!}</option>
                            @endforeach
                        
                            </select>
                             @if($errors->has('kode_tunjangan_id'))
                                <span class="help-block">
                                    <strong>{{$errors->first('kode_tunjangan_id')}}</strong>
                                </span>
                            @endif
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
@endsection
