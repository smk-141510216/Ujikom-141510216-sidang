@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Tambah Tunjangan</center></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('tunjangan.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="kode_tunjangan" class="col-md-4 control-label">Kode Tunjangan</label>
                            <div class="col-md-6">
                            <div class="form-group {{$errors->has('kode_tunjangan') ? 'has-errors':'message'}}" >
                                <input id="kode_tunjangan" type="text" class="form-control" name="kode_tunjangan" value="{{ old('kode_tunjangan') }}"  autofocus>
                             @if($errors->has('kode_tunjangan'))
                                <span class="help-block">
                                    <strong>{{$errors->first('kode_tunjangan')}}</strong>
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
                            <option value="">Pilih</option>
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
                            <label for="status" class="col-md-4 control-label">Status</label>
                            <div class="col-md-6">
                            <div class="form-group {{$errors->has('status') ? 'has-errors':'message'}}" >
                            <select class="form-control" name="status" >
                            <option value="">Pilih</option>
                            <option value='kawin'>Kawin</option>
                            <option value="Lajang">Lajang</option>
                                </select>
                             @if($errors->has('status'))
                                <span class="help-block">
                                    <strong>{{$errors->first('status')}}</strong>
                                </span>
                            @endif
                            </div>
                            </div>
                            </div>
                           

                           <div class="form-group">
                            <label for="jumlah_anak" class="col-md-4 control-label">Jumlah Anak</label>
                            <div class="col-md-6">
                            <div class="form-group {{$errors->has('jumlah_anak') ? 'has-errors':'message'}}" >
                                <input id="jumlah_anak" type="text" class="form-control" name="jumlah_anak" value="{{ old('jumlah_anak') }}"  autofocus>
                             @if($errors->has('jumlah_anak'))
                                <span class="help-block">
                                    <strong>{{$errors->first('jumlah_anak')}}</strong>
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
