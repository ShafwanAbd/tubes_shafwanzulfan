<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konfirmasi;
use App\Models\Order;
use App\Models\Tugas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KonfirmasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Order::all();

        return view('tugas.konfirmasiAdmin', compact(
            'datas'
        ));
    }

    public function indexAdminBayar()
    {
        $datas = Konfirmasi::where('done', 1)->get();

        return view('tugas.konfirmasiAdminBayar', compact(
            'datas'
        ));
    }

    public function hapus_done($id)
    {
        $model = Konfirmasi::find($id);

        $model->done = 0;
        $model->save();

        return redirect('konfirmasiAdminBayar')->with('success', 'Berhasil Membayar Penjoki!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    public function hapus_order($id)
    {
        $model = Order::find($id);
        $model->delete();

        return redirect('konfirmasi')->with('success', 'Berhasil Menghapus Order!');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();
        $datas = DB::table('konfirmasi')
            ->where('idTugas', $id)
            ->get();

        return view('tugas.konfirmasiTugas', compact(
            'datas'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = new Konfirmasi;
        $tugas = Tugas::find($id);
        $user = Auth::user();
        $owner = Konfirmasi::where('id', Auth::user()->id)->first();

        if ($owner != null){
            $temp_done = $owner->done;
            $owner->delete();
        }
        $model->id = Auth::user()->id;
        $model->idTugas = $id;
        $model->name = DB::table('users')->where('email', $user->email)->value('name');
        $model->universitas = DB::table('users')->where('email', $user->email)->value('universitas');
        $model->email = $user->email;
        $model->name = $user->name;
        $model->konfirmasi = 1; // 1 for exist, 2 for waiting, 3 for done tugas
        if(isset($temp_done) ? true : false){
            $model->done = $temp_done;
        }

        $model->save(); 

        return redirect('tugas/'.$tugas->id)->with('success', 'Berhasil Memesan Tugas, Silahkan Tunggu Konfirmasi Dari Pembuat Tugas');
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
        $model = Konfirmasi::find($id);

        $model->konfirmasi++; // 1 for accept, 2 for decline
        
        $model->save(); 
        
        return redirect('konfirmasi/'.$model->idTugas)->with('success', 'Berhasil Menerima Penjoki!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $konfirmasi = DB::table('konfirmasi')->where('id', $id)->first();

        $model = Konfirmasi::find($id);

        $model->konfirmasi = 0;
        $model->save();

        return redirect('konfirmasi/'.$konfirmasi->idTugas)->with('success', 'Berhasil Menghapus Penjoki!');
    }
}
