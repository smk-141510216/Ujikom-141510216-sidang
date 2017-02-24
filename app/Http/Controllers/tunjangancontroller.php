<?php

namespace App\Http\Controllers;
use App\tunjangan;
use App\golongan;
use App\jabatan;
use Validator;
use Input;


use Request;

class tunjangancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //public function __construct(){
      //  $this->middleware('auth');
        //$this->middleware('pegawai');
    //}
    public function index()
    {
        //
        $tunjangan=tunjangan::all();
        return view('tunjangan.index',compact('tunjangan'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $golongan=golongan::all();
        $jabatan=jabatan::all();
        return view('tunjangan.create',compact('golongan','jabatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

         $tunjangan=Request::all();
         $rules=['kode_tunjangan'=>'required|unique:tunjangans',
                  'id_jabatan'=>'required',
                  'id_golongan'=>'required|unique:tunjangans',
                  'status'=>'required',
                  'jumlah_anak'=>'required',
                 'besaran_uang'=>'required|unique:tunjangans'];
         $message=['kode_tunjangan.required'=>'Kolom Jangan Kosong','kode_tunjangan.unique'=>'Masukan Sudah Ada',
                   'id_jabatan.required'=>'Pilihan Tidak Memiliki Variable',
                   'id_golongan.required'=>'Pilihan Tidak Memiliki Variable','id_golongan.unique'=>'Masukan Sudah Ada',
                   'status.required'=>'Kolom Jangan Kosong',
                   'jumlah_anak.required'=>'Kolom Jangan Kosong',
                   'besaran_uang.required'=>'Kolom Jangan Kosong','besaran_uang.unique'=>'Masukan Sudah Ada'];
         $validator=Validator::make(Input::all(),$rules,$message);

        if ($validator->fails())
         {
            # code...
            return redirect('/tunjangan/create')
            ->withErrors($validator)
            ->withInput();
        }
        else
        {
         
         tunjangan::create($tunjangan);
         return redirect('tunjangan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tunjangan=tunjangan::find($id);
        $golongan=golongan::all();
        $jabatan=jabatan::all();
        return view('tunjangan.edit',compact('tunjangan','jabatan','golongan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

       $data=Request::all();
        $kode=tunjangan::where('id',$id)->first()->kode_tunjangan;
        $uang=tunjangan::where('id',$id)->first()->besaran_uang;
        $uang=tunjangan::where('id',$id)->first()->besaran_uang;
        $gol=tunjangan::where('id',$id)->first()->id_golongan;
        $jab=tunjangan::where('id',$id)->first()->id_jabatan;
        $sta=tunjangan::where('id',$id)->first()->status;

        if($data['kode_tunjangan'] !=$kode)
        {
          $rules=['kode_tunjangan'=>'required|unique:tunjangans'];   
        }
        elseif ($data['besaran_uang'] !=$uang) 
        {
            $rules=['besaran_uang'=>'required|numeric|unique:tunjangans'];   
        }

         elseif ($data['id_golongan'] !=$gol || $data['id_jabatan'] !=$jab  ||$data['status'] !=$sta) 
        {
           $rules=['id_golongan'=>'required:kategori_lemburs',
                   'id_jabatan'=>'required:kategori_lemburs',
                   'status'=>'required:kategori_lemburs'];    
        }
        

        else
        {
             $rules=['kode_tunjangan'=>'required',
                     'besaran_uang'=>'required|numeric'];            
        }
        
        
         $message=[
          'id_jabatan.required'=>'Pilih Tidak Memiliki Variable','id_golongan.required'=>'Pilih Tidak Memiliki Variable',
         'kode_tunjangan.unique'=>'Masukan Sudah Ada','kode_tunjangan.required'=>'Kolom Jangan Kosong',
         'besaran_uang.unique'=>'Masukan Sudah Ada','besaran_uang.required'=>'Kolom Jangan Kosong',
          'status.unique'=>'Masukan Sudah Ada','status.required'=>'Kolom Jangan Kosong'];
         $validator=Validator::make(Input::all(),$rules,$message);

        if ($validator->fails())
         {
            # code...
            return redirect('/tunjangan/'.$id.'/edit')
            ->withErrors($validator)
            ->withInput();
        }
        else
        {
         tunjangan::where('id',$id)->first()->update(
            [
                'kode_tunjangan'=>$data['kode_tunjangan'],
                'besaran_uang'=>$data['besaran_uang']
           ]);
        }
        return redirect('/tunjangan');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        tunjangan::find($id)->delete();
        return redirect ('tunjangan');
    }
}
