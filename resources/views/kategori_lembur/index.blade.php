@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Index Kategori Lembur</center></div>

                <div class="panel-body">
                    <table class="table" border='2'>
                        <thead>
                            <th><center>No</th></center>
                            <th><center>Kode Lembur</th></center>
                            <th><center>Nama Jabatan</th></center>
                            <th><center>Nama Golongan</th></center>
                            <th><center>Besaran Uang</th></center>
                            <th colspan="2"><center>Opsi</th></center>
                        </thead>
                        @php
                        $a=1;
                        @endphp
                        @foreach ($kategori_lembur as $data)
                        <tbody>
                            <td><center>{{$a++}}</td></center>
                            <td><center>{{$data->kode_lembur}}</td></center>
                            <td><center>{{$data->jabatan->nama_jabatan}}</td></center>
                            <td><center>{{$data->golongan->nama_golongan}}</td></center>
                            <td><center>{{$data->besaran_uang}}</td></center>
                             <td><center>
                                <a href="{{route('kategori_lembur.edit',$data->id)}}" class="btn btn-primary">Ubah</a>
                            </center></td>
                              <td >
                                  <center><a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" title="Delete" data-toggle="tooltip">Delete</a></center>
                                  @include('modals.delete', [
                                    'url' => route('kategori_lembur.destroy', $data->id),
                                    'model' => $data
                                  ])
                            </td>
                        </tbody>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
