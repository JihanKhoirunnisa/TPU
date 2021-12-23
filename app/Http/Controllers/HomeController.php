<?php

namespace App\Http\Controllers;

use App\Models\datamakam;
use App\Models\tambahslot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $slot = DB::select('SELECT * FROM `tambahslot` WHERE `ketersediaan` = 1');
        $slot = DB::table('datamakam')
        ->where('ketersediaan', '=', '1')
        ->paginate(12);

        $ketersediaan = datamakam::all();

        return view('welcome', compact('slot', 'ketersediaan'));
    }

    public function index_cari(Request $request)
    {
        $ketersediaan = datamakam::all();
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $slot = DB::table('tambahslot')
        ->where('kodemakam','like',"%".$cari."%")
        ->paginate(12);

        // mengirim data pegawai ke view index
        return view('welcome',['slot' => $slot], compact('ketersediaan'));

    }

      //Tambah data makam
      public function konfirmasi_tambah(Request $request)
      {

           datamakam::create([
    		'longitude' => $request->longitude,
    		'latitude' => $request->latitude,
            'ketersediaan' => $request->ketersediaan,
            'kodemakam' => $request->kodemakam,
            'tpu' => $request->tpu,
            's' => $request->s,
            'e' => $request->e,
            'name' => $request->name,
            'nik' => $request->nik,
            'alamat' => $request->alamat,
            'ttl' => $request->ttl,
            'ttk' => '',
            'ketersediaan' =>'1'
    	]);
           return redirect('/');
      }
}
