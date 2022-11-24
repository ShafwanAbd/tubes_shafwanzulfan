<?php

namespace App\Http\Controllers;

use App\Models\KirimTugas;
use App\Models\Konfirmasi;
use App\Models\Tugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KirimTugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-oV9zLKv72azyUqhH7b97HRk0';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
        
        $id_tugas = DB::table('konfirmasi')->where('id', $id)->value('idTugas');
        $tugas = Tugas::find($id_tugas);
        $konfirmasi = Konfirmasi::find($id);
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $tugas->harga
            ),
            'customer_details' => array(
                'first_name' => $konfirmasi->name,
                'email' => $konfirmasi->email,
                'phone' => $konfirmasi->whatsapp,
            ),
        );
        
        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $user = Auth::user();
        $kirimTugas = KirimTugas::where('id', $id)
            ->first();

        return view('tugas.lihatTugas', compact(
            'user', 'kirimTugas', 'snapToken'
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
        $datas = Konfirmasi::find($id);

        return view('tugas.kirimTugas', compact(
            'datas'
        ));
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
        
        $user = Auth::user();
        $konfirmasi = Konfirmasi::find($id);
        $model = new KirimTugas();
        
        $model->id = $konfirmasi->id;
        $model->idTugas = $konfirmasi->idTugas; //
        $model->email = $user->email;
        $model->name = $user->name;
        $model->judul = $request->judul;
        $model->pesan = $request->pesan;
        $model->linkTugas = $request->linkTugas;


        $konfirmasi->konfirmasi++;

        $konfirmasi->save();
        $model->save();

        return redirect('tugas/'.$konfirmasi->idTugas)->with('success', 'Berhasil Menambahkan Tugas!');
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
    }
}
