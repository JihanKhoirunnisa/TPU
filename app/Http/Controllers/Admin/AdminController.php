<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\datamakam;
use App\Models\tambahslot;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //Halaman Dashboard
    public function index(){
        $datamakam = datamakam::all();
        $dataadmin = User::all();

        return view('admin.dashboard', compact('datamakam', 'dataadmin'));
    }

    public function konfirmasi_tambah(Request $request){

        datamakam::created([
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
        return redirect('/dashboard');
    }

    //Halaman DataMakam
    public function datamakam(){
        $datamakam = datamakam::all();
        $dataadmin = User::all();

        return view('admin.datamakam', compact('datamakam', 'dataadmin'));
    }

    // Halaman Data Admin
    public function datauser(){
        $datamakam = datamakam::all();
        $dataadmin = User::all();

        return view('admin.datauser', compact('datamakam', 'dataadmin'));
    }

    //Delete DataAdmin
    public function datauser_delete($id, Request $request){
        $dataadmin = User::find($id);
    	$dataadmin->delete();

        return redirect('/DataUser&Admin');
    }

    //Update DataAdmin
    public function datauser_update($id, Request $request){

        // $this->validate($request, [
        //     'email' => 'required|email',
        //     'password' => 'required|confirmed|min:6',
        // ]);

        $dataadmin = User::find($id);
        $dataadmin->name = $request->name;
        $dataadmin->email = $request->email;
        $dataadmin->password = Hash::make($request['password']);
        $dataadmin->status = $request->status;
        $dataadmin->save();

        return redirect('/DataUser&Admin');
    }

    //Update konfirmasi data makam
    public function konfirmasi_update($id, Request $request){

        $slot = datamakam::find($id);
        $slot->longitude = $request->longitude;
        $slot->latitude = $request->latitude;
        $slot->ketersediaan = $request->ketersediaan;
        $slot->kodemakam = $request->kodemakam;
        $slot->tpu = $request->tpu;
        $slot->s = $request->s;
        $slot->e = $request->e;
        $slot->name = $request->name;
        $slot->nik = $request->nik;
        $slot->alamat = $request->alamat;
        $slot->ttl = $request->ttl;
        $slot->ttk = $request->ttk;
        $slot->ketersediaan = $request->ketersediaan;
        $slot->save();

        return redirect('/DataMakam');
    }

    //Delete Data Makam
    public function konfirmasi_delete ($id, Request $request){
        $slot = datamakam::find($id);
    	$slot->delete();

        return redirect('/DataMakam');
    }
}
