@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Index Tunjangan</center></div>

                <div class="panel-body">
                    <table class="table" border="2">
                        <thead>
                            <tr>
                            <th><center>No</center></th>
                            <th><center>Kode Tunjangan</center></th>
                            <th><center>Nama Jabatan</center></th>
                            <th><center>NamaGologan</center></th>
                            <th><center>Status</center></th>
                            <th><center>Jumlah Anak</center></th>
                            <th><center>Besaran Uang</center></th>
                            <th colspan="2"><center>Opsi</center></th>
                        </tr>
                        </thead>
                        @php
                        $a=1;
                        @endphp
                        @foreach($tunjangan as $data)
                        <tbody>
                            <tr>
                                <td><center>{{$a++}}</center></td>
                                <td><center>{{$data->kode_tunjangan}}</center></td>
                                <td><center>{{$data->jabatan->nama_jabatan}}</center></td>
                                <td><center>{{$data->golongan->nama_golongan}}</center></td>
                                <td><center>{{$data->status}}</center></td>
                                <td><center>{{$data->jumlah_anak}}</center></td>
                                <td><center>{{$data->besaran_uang}}</center></td>
                                 <td><center>
                                <a href="{{route('tunjangan.edit',$data->id)}}" class="btn btn-primary">Ubah</a>
                            </center></td>
                                 <td >
                                  <center><a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" title="Delete" data-toggle="tooltip">Delete</a></center>
                                  @include('modals.delete', [
                                    'url' => route('tunjangan.destroy', $data->id),
                                    'model' => $data
                                  ])
                            </td>
                            </tr>
                        </tbody>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
