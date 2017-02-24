@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Index Lembur Pegawai</center></div>

                <div class="panel-body">
                <table class="table" border="2">
                    <thead>
                    <tr>
                        <th><center>No</th></center>
                        <th><center>Uang Kategori Lembur</th></center>
                        <th><center>Nama Pegawai</th></center>
                        <th><center>Jumlah Jam</th></center>
                        <th colspan="2"><center>Opsi</th></center>
                    </tr>
                </head>
                @php
                $a=1;
                @endphp
                @foreach ($lembur_pegawai as $data)
                <tbody>
                    <td><center>{{$a++}}</td></center>
                    <td><center>{{$data->kategori_lembur->besaran_uang}}</td></center>
                    <td><center>{{$data->pegawai->User->name}}</td></center>
                    <td><center>{{$data->jumlah_jam}}</td></center>
                    <td><center>
                                <a href="{{route('lembur_pegawai.edit',$data->id)}}" class="btn btn-primary">Ubah</a>
                            </center></td>
                     <td >
                                  <center><a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" title="Delete" data-toggle="tooltip">Delete</a></center>
                                  @include('modals.delete', [
                                    'url' => route('lembur_pegawai.destroy', $data->id),
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
