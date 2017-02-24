<?php

namespace App\Http\Controllers;

use Request;
use DB;
use App\lembur_pegawai;
use App\tunjangan_pegawai;
use App\pegawai;
use App\tunjangan;
use App\penggajian;
use App\jabatan;
use App\kategori_lembur;
use App\golongan;
use App\User;
use Carbon\Carbon;
class PenggajianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //public function __construct (){
      //  $this->middleware('auth');
    //}
    public function index()
    {
        $penggajian = penggajian::with('tunjangan_pegawai')->get();

        $tunjangan_pegawai = tunjangan_pegawai::with('tunjangan')->first();
        if(!isset($tunjangan_pegawai))
        {
            return view('penggajian.index',compact('penggajian','users','pegawai','tunjangan_pegawai','tunjangan'));
        }
        else 
        {
        $tunjangan = tunjangan::where('id',$tunjangan_pegawai->kode_tunjangan_id)->first();
        $pegawai = pegawai::with('User')->first();
        $users = User::where('id',$pegawai['id_user'])->first();
        $penggajian = penggajian::all();
        }
        return view('penggajian.index',compact('penggajian','users','pegawai','tunjangan_pegawai','tunjangan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $pegawai = pegawai::with('User')->get();
     return view('penggajian.create',compact('pegawai','tunjangan_pegawai'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $penggajian = Request::all();

        $now = Carbon::now();
            $kode_tunjangan_id = tunjangan_pegawai::where('id_pegawai', $penggajian['id_pegawai'])->first();
            $tunjangan_pegawai = tunjangan_pegawai::where('id_pegawai',$penggajian['id_pegawai'])->first();
    // $hari = cal_days_in_month($now->day,$now->month, $now->year);
    //     dd($hari); 

        $user = $penggajian['id_pegawai'];

         $lembur_pegawai1 = lembur_pegawai::where('id_pegawai', $user)->first();
        if($tunjangan_pegawai==null)
        {
            $missing_count=true;

            $pegawai = pegawai::with('User')->get();
            return view('penggajian.create',compact('missing_count','pegawai'));
        }
        else
        {
            $penggajian1 = penggajian::where('tunjangan_pegawai_id', $kode_tunjangan_id->id)->first();
            $jumlah_hari = $now->daysInMonth;
            // if($penggajian1->created_at->day<=$jumlah_hari && $penggajian1->created_at->month==$now->month)
            // {
            //     dd('success');
            // }
            // else
            // {
            //     dd('Failed');
            // }
            if(isset($penggajian1->id))
            {
            if($penggajian1->created_at->month==$now->month)
            {

                return redirect('penggajian/create'.'?errors_match');
            }
            }

        $jumlah_jam_lembur = DB::table('lembur_pegawais')
        ->where('lembur_pegawais.id_pegawai', '=', $user)
        ->sum('lembur_pegawais.jumlah_jam');
               
      
        }
        return redirect('penggajian');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
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
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        penggajian::find($id)->delete();
        alert()->success('Data Terhapus');
        return redirect('penggajian');
    }
}
