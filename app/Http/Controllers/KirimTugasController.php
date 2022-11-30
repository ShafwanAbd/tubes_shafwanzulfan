<?php

namespace App\Http\Controllers;

use App\Models\KirimTugas;
use App\Models\Konfirmasi;
use App\Models\Order;
use App\Models\Tugas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

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

            'item_details' => array(
              [
                "id" => $tugas->id,
                "name" => $tugas->kategori,
                "price" => $tugas->harga,
                "quantity" => 1
              ]
            ),

            'customer_details' => array(
                // 'first_name' => $konfirmasi->name,
                'first_name' => Auth::user()->name,
                'last_name' => "",
                'email' => Auth::user()->email,
                'phone' => Auth::user()->whatsapp,
            ),
        );
        
        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $user = Auth::user();
        $kirimTugas = KirimTugas::where('id', $id)
            ->first();

        return view('tugas.lihatTugas', compact(
            'user', 'kirimTugas', 'snapToken', 'id'
        ));
    }

    public function show_post(Request $request, $id)
    {
        $json = json_decode($request->get('json'));
        $order = new Order;
        $order->status = $json->transaction_status;
        $order->name = Auth::user()->name;
        $order->email = Auth::user()->email;
        $order->nomerHP = Auth::user()->whatsapp;
        $order->transaction_id = $json->transaction_id;
        $order->order_id = $json->order_id;
        $order->gross_amount = $json->gross_amount;
        $order->payment_type = $json->payment_type;
        $order->payment_code = isset($json->payment_code) ? $json->payment_code : null;
        $order->pdf_url = isset($json->pdf_url) ? $json->pdf_url : null;;
        $order->save();

        $konfirmasi = DB::table('konfirmasi')->where('id', $id)->first();
        $konfirmasi = Konfirmasi::find($konfirmasi->id);
    
        $konfirmasi->delete();
        return redirect('/konfirmasi/'.$konfirmasi->idTugas)->with('success', 'Berhasil Membayar Tugas!');
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
        
        if ($request->file('fileTugas')){
            $file = $request->file('fileTugas');
            // $namaFile = time().str_replace(" ", "", getClientOriginalName());
            $namaFile = "kirimTugas_".str_replace(" ", "", $file->getClientOriginalName());
            $file->move('fileTugas', $namaFile);
            $model->fileTugas = $namaFile;
        }

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
