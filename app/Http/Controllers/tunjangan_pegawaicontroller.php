<?php

namespace App\Http\Controllers;
use App\tunjangan_pegawai;
use App\pegawai;
use App\tunjangan;
use Validator;
use Input;

use Request;

class tunjangan_pegawaicontroller extends Controller
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
        $tunjangan_pegawai=tunjangan_pegawai::all();
        return view ('tunjangan_pegawai.index',compact('tunjangan_pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tunjangan=tunjangan::all();
        $pegawai=pegawai::all();
        return view ('tunjangan_pegawai.create',compact('tunjangan','pegawai'));
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
        $tunjangan_pegawai=Request::all();
        $rules=['id_pegawai'=>'required',
                'kode_tunjangan_id'=>'required'
                ];
         $message=['id_pegawai.required'=>'Pilih Tidak Memiliki Variable',
                    'kode_tunjangan_id.required'=>'Pilih Tidak Memiliki Variable'
                   ];
         $validator=Validator::make(Input::all(),$rules,$message);

        if ($validator->fails())
         {
            # code...
            return redirect('/tunjangan_pegawai/create')
            ->withErrors($validator)
            ->withInput();
        }
        else
        {
         
         tunjangan_pegawai::create($tunjangan_pegawai);
         return redirect('tunjangan_pegawai');
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
        $tunjangan_pegawai=tunjangan_pegawai::find($id);
        $pegawai=pegawai::all();
        $tunjangan=tunjangan::all();
        return view('tunjangan_pegawai.edit',compact('tunjangan_pegawai','tunjangan','pegawai'));
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
        $nam=tunjangan_pegawai::where('id',$id)->first()->kode_tunjangan_id;
        $peg=tunjangan_pegawai::where('id',$id)->first()->id_pegawai;
       
        

        if( $data['id_pegawai'] !=$peg || $data['kode_tunjangan_id'] !=$peg )
        {
          $rules=['kode_tunjangan_id'=>'required:tunjangans',
                'id_pegawai'=>'required:tunjangans'];   
        }
       

        else
        {
             $rules=['kode_tunjangan_id'=>'required',
                     'id_pegawai'=>'required'];            
        }
        
        
         $message=[
          'id_pegawai.required'=>'Pilih Tidak Memiliki Variable','kode_tunjangan_id.required'=>'Pilih Tidak Memiliki Variable',

         ];
         $validator=Validator::make(Input::all(),$rules,$message);

        if ($validator->fails())
         {
            # code...
            return redirect('/tunjangan_pegawai/'.$id.'/edit')
            ->withErrors($validator)
            ->withInput();
        }
        else
        {
         tunjangan_pegawai::where('id',$id)->first()->update(
            [
                'kode_tunjangan_id'=>$data['kode_tunjangan_id'],
                'id_pegawai'=>$data['id_pegawai']
           ]);
        }
        return redirect('/tunjangan_pegawai');
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
        tunjangan_pegawai::find($id)->delete();
        return redirect('tunjangan_pegawai');
    }
}
