<?php

namespace App\Http\Controllers;
use App\kategori_lembur;
use App\golongan;
use App\jabatan;
use Request;
use Input;
use Validator;

class kategori_lemburcontroller extends Controller
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
        $kategori_lembur=kategori_lembur::all();
        return view('kategori_lembur.index',compact('kategori_lembur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $kategori_lembur=kategori_lembur::all();
         $golongan=golongan::all();
         $jabatan=jabatan::all();
         return view('kategori_lembur.create',compact('golongan','jabatan','kategori_lembur'));
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

         $kategori_lembur=Request::all();
         $rules=['kode_lembur'=>'required|unique:kategori_lemburs',
                 'besaran_uang'=>'required|unique:kategori_lemburs',
                 'id_golongan'=>'required|unique:kategori_lemburs',
                 'id_jabatan'=>'required'];
         $message=['kode_lembur.unique'=>'Masukan Sudah Ada','kode_lembur.required'=>'Kolom Jangan Kosong',
                   'besaran_uang.unique'=>'Masukan Sudah Ada','besaran_uang.required'=>'Kolom Jangan Kosong',
                   'id_golongan.required'=>'Pilih Tidak Memiliki Variable','id_golongan.unique'=>'Masukan Sudah Ada',
                   'id_jabatan.required'=>'Pilih Tidak Memiliki Variable'];
         

         $validator=Validator::make(Input::all(),$rules,$message);

        if ($validator->fails())
         {
            # code...

            return redirect('/kategori_lembur/create')
            ->withErrors($validator)
            ->withInput();
        }
        else
        {
         
         kategori_lembur::create($kategori_lembur);
         return redirect('kategori_lembur');
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
        $kategori_lembur=kategori_lembur::find($id);
        $golongan=golongan::all();
        $jabatan=jabatan::all();
        return view('kategori_lembur.edit',compact('kategori_lembur','golongan','jabatan'));
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
        $kode=kategori_lembur::where('id',$id)->first()->kode_lembur;
        $uang=kategori_lembur::where('id',$id)->first()->besaran_uang;
        $gol=kategori_lembur::where('id',$id)->first()->id_golongan;
        $jab=kategori_lembur::where('id',$id)->first()->id_jabatan;

       
        if($data['kode_lembur'] !=$kode )
        {
          $rules=['kode_lembur'=>'required|unique:kategori_lemburs'];   
        }
        elseif ($data['id_golongan'] !=$gol || $data['id_jabatan'] !=$jab) 
        {
           $rules=['id_golongan'=>'required:kategori_lemburs',
                   'id_jabatan'=>'required:kategori_lemburs'];    
        }
        
         
       
        elseif ($data['besaran_uang'] !=$uang) 
        {
            $rules=['besaran_uang'=>'required|numeric|unique:kategori_lemburs'];   
        }


        else
        {
             $rules=['kode_lembur'=>'required',
                     'besaran_uang'=>'required|numeric',
                      'id_jabatan'=>'required',
                       'id_golongan'=>'required'];            
        }


        
        
         $message=[
         'id_golongan.required'=>'Pilih Tidak Memiliki Variable',
         'id_jabatan.required'=>'Pilih Tidak Memiliki Variable',
         'kode_lembur.unique'=>'Masukan Sudah Ada','kode_lembur.required'=>'Kolom Jangan Kosong',
         'besaran_uang.unique'=>'Masukan Sudah Ada','besaran_uang.required'=>'Kolom Jangan Kosong'];
         $validator=Validator::make(Input::all(),$rules,$message);

        if ($validator->fails())
         {
            # code...
            return redirect('/kategori_lembur/'.$id.'/edit')
            ->withErrors($validator)
            ->withInput();
        }
        else
        {
         kategori_lembur::where('id',$id)->first()->update(
            [
                'kode_lembur'=>$data['kode_lembur'],
                'besaran_uang'=>$data['besaran_uang']
           ]);
        }
        return redirect('/kategori_lembur');
     

      

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
        kategori_lembur::find($id)->delete();
        return redirect('kategori_lembur');
    }
}
