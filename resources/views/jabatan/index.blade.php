@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Index Jabatan</center></div>

                <div class="panel-body">
                    <table class="table" border="1">
                        <thead>
                            <tr>
                                <th><center>No</th></center>
                                <th><center>Kode Jabatan</th></center>
                                <th><center>Nama Jabatan</th></center>
                                <th><center>Besaran Uang</th></center>
                                <th colspan="2"><center>Opsi</th></center>
                            </tr>
                        </thead>
                        @php
                        $a=1;
                        @endphp
                        @foreach($jabatan as $data)
                        <tbody>
                            <td><center>{{$a++}}</td></center>
                            <td><center>{{$data->kode_jabatan}}</td></center>
                            <td><center>{{$data->nama_jabatan}}</td></center>
                            <td><center>{{$data->besaran_uang}}</td></center>
                            <td><center>
                                <a href="{{route('jabatan.edit',$data->id)}}" class="btn btn-primary">Ubah</a>
                            </center></td>
                            <td >
                                  <center><a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" title="Delete" data-toggle="tooltip">Delete</a></center>
                                  @include('modals.delete', [
                                    'url' => route('jabatan.destroy', $data->id),
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
