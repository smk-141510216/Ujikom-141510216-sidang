<?php

namespace App\Http\Controllers;
use App\pegawai;
use App\User;
use App\golongan;
use App\jabatan;
use Input;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Request;


class pegawaicontroller extends Controller
{
    use RegistersUsers;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

  
    
    public function index()
    {
        //
        $pegawai = pegawai::with('jabatan')->get();
        $pegawai = pegawai::with('golongan')->get();
        $pegawai = pegawai::with('User')->get();
        $pegawai = pegawai::all();
        return view('pegawai.index',compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $golongan = golongan::all();
        $jabatan = jabatan::all();
        $user=User::all();
        return view('pegawai.create',compact('golongan','jabatan','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $akun=new User ;
         $akun->name=Input::get('name');
         $akun->email=Input::get('email');
         $akun->password=bcrypt(Input::get('password'));
         $akun->permission=Input::get('permission');
         $akun->save();

        $file = Input::file('foto');
        $destinationPath = public_path().'/assets/image/';
        $filename = $file->getClientOriginalName();
        $uploadSuccess = $file->move($destinationPath, $filename);

        if(Input::hasFile('foto')){
         $pegawai=new pegawai ;
         $pegawai->nip=Input::get('nip');
         $pegawai->foto = $filename;
         //$pegawai->foto=Input::get('foto');
         $pegawai->id_jabatan=Input::get('id_jabatan');
         $pegawai->id_golongan=Input::get('id_golongan');
         $pegawai->id_user=$akun->id;
         $pegawai->save();
         
    }        
        return redirect('pegawai');

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
      
        $data = pegawai::where('id',$id)->with('golongan','jabatan','User')->first();
        $jabatan = jabatan::all();
        $golongan = golongan::all();
        return view('pegawai.edit',compact('pegawai','jabatan','golongan','data'));
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
        
        $pegawai = pegawai::where('id', $id)->first();
        $emal = User::where('id', $pegawai->id_user)->first()->email;
        $pass = User::where('id', $pegawai->id_user)->first()->password;
        $name = User::where('id', $pegawai->id_user)->first()->name;
        $data = Request::all();
        $user = User::where('id', $pegawai->id_user)->first()->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'permission' => $data['permission'],
           
            ]);


        $user = User::where('id', $pegawai->id_user)->first();
            $file = Input::file('foto');
            $destination_path = public_path().'/assets/image';
            $filename = $user->name.'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destination_path,$filename);
            $data['foto'] = $filename;

            
        if(Input::hasFile('foto')){
        
        pegawai::where('id', $id)->first()->update([
            'nip' => $data['nip'],
            'id_jabatan' => $data['id_jabatan'],
            'id_golongan' => $data['id_golongan'],
            'foto' => $data['foto'],
            ]);

    }  
        return redirect('pegawai');


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
        pegawai::find($id)->delete();
        return redirect('pegawai');
    }
}
 