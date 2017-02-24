@extends('layouts.app')
@section('content')
<div class="col-md-6 col-md-offset-3">
    <div class="panel panel-primary">
        <div class="panel-heading"><center>Ubah Pegawai</center></div>
            <div class="panel-body">
                <form class="form-horizontal" action="{{route('pegawai.update', $data->id)}}" method="POST" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="PATCH">
                    {{csrf_field()}}
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Nama</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ $data->User->name }}" required >
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    </td></tr><tr><td>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">Email</label>

                        <div class="col-md-6">
                            <input id="email" class="form-control" name="email" value="{{ $data->User->email }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    </td></tr><tr><td>
                    <div class="form-group{{ $errors->has('permission') ? ' has-error' : '' }}">
                        <label for="permission" class="col-md-4 control-label">Permisions</label>
                        <div class="col-md-6">
                           <input id="permission" class="form-control" name="permission" value="{{ $data->User->permission }}" required>
                            @if ($errors->has('permission'))
                                <span class="help-block">                                </span>
                            @endif
                        </div>
                    </div>
                    </td></tr><tr><td>
                    
                    <div class="form-group{{ $errors->has('nip') ? ' has-error' : '' }}">
                            <label for="nip" class="col-md-4 control-label">NIP :</label>
                                <div class="col-md-6">
                                    <input type="text" name="nip" value="{{$data->nip}}" class="form-control" required>
                                    @if ($errors->has('nip'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nip') }}</strong>
                                    </span>
                                @endif
                                </div>
                    </div>
                    <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nama Golongan</label>
                            <div class="col-md-6">
                            <select class="form-control" name="id_golongan" required >
                            <option value="">Pilih</option>
                            @foreach($golongan as $data)
                            <option value="{!! $data->id !!}">{!! $data->nama_golongan !!}</option>
                            @endforeach
                            </select>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nama Jabatan </label>
                            <div class="col-md-6">
                            <select class="form-control" name="id_jabatan"required >
                            <option value="">Pilih</option>
                            @foreach($jabatan as $data)
                            <option value="{!! $data->id !!}">{!! $data->nama_jabatan !!}</option>
                            @endforeach
                            </select>
                            </div>
                            </div>


                   <div class="form-group{{ $errors->has('foto') ? ' has-error' : '' }}">
                            <label for="foto" class="col-md-4 control-label">Foto :</label>
                                <div class="col-md-6">
                                    <input type="file" name="foto" value="{{$data->foto}}" class="form-control" required>
                                    @if ($errors->has('foto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('foto') }}</strong>
                                    </span>
                                @endif
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
@endsection