<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Models\Konfirmasi;
use App\Models\Tugas;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $model = Auth::user();
        $datas = Tugas::inRandomOrder()->paginate(10);

        $keywordOwner = "";
        $keywordFakultas = "";
        $keywordJurusan = "";
        $keywordKategori = "";

        if ($request->keywordOwner){
            $keywordOwner = $request->keywordOwner;
            $datas = Tugas::where('owner', 'LIKE', '%'.$keywordOwner.'%')
                ->paginate(10);
        } else if ($request->keywordFakultas){
            $keywordFakultas = $request->keywordFakultas;
            $datas = Tugas::where('fakultas', 'LIKE', '%'.$keywordFakultas.'%')
                ->paginate(10);
        } else if ($request->keywordJurusan){
            $keywordJurusan = $request->keywordJurusan;
            $datas = Tugas::where('jurusan', 'LIKE', '%'.$keywordJurusan.'%')
                ->paginate(10);
        } else if ($request->keywordKategori){
            $keywordKategori = $request->keywordKategori;
            $datas = Tugas::where('kategori', 'LIKE', '%'.$keywordKategori.'%')
                ->paginate(10);
        }
        $datas->appends($request->all());
        $datas->withPath('tugas');

        return view('tugas.cariTugas', compact(
            'model', 'datas', 'keywordOwner', 'keywordFakultas', 'keywordJurusan', 'keywordKategori'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Tugas;

        return view('tugas.buatTugas', compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $model = new Tugas;

        $model->owner = $user->name;
        $model->email = $user->email;
        $model->whatsapp = $user->whatsapp;
        $model->instagram = $user->instagram;
        $model->fakultas = $user->fakultas;
        $model->jurusan = $user->jurusan;
        $model->kategori = $request->kategori;
        $model->deskripsi = $request->deskripsi;
        $model->deadline = $request->deadline;
        $model->harga = $request->harga;

        $model->save();

        if ($request->file('photo')){
            $file = $request->file('photo');
            // $namaFile = time().str_replace(" ", "", $model->name);
            $namaFile = "photoTugas_".$model->id.".png";
            $file->move('photoTugas', $namaFile);
            $model->photo = $namaFile;
        }

        $model->save();

        return redirect('tugas')->with('success', 'Berhasil Menambahkan Tugas!');
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
        $model = Tugas::find($id);
        
        $konfirmasi_value = DB::table('konfirmasi')
            ->where('idTugas', $id)
            ->where('name', $user->name)
            ->value('konfirmasi');
    
        $owner = DB::table('users')
            ->where('email', $model->email)
            ->get()
            ->first();

        $konfirmasi = Konfirmasi::where('name', $user->name)
            ->where('idTugas', $id)
            ->first();

        return view('tugas.detailTugas', compact(
            'user', 'model', 'konfirmasi_value', 'konfirmasi', 'owner'
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
        $model = Tugas::find($id);

        return view('tugas.editTugas', compact(
            'model'
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
        $model = Tugas::find($id);
        $model->owner = $user->name;
        $model->email = $user->email;
        $model->fakultas = $user->fakultas;
        $model->jurusan = $user->jurusan;
        $model->kategori = $request->kategori;
        $model->deskripsi = $request->deskripsi;
        $model->deadline = $request->deadline;
        $model->harga = $request->harga;
        $model->save();

        if ($request->file('photo')){
            $file = $request->file('photo');
            // $namaFile = time().str_replace(" ", "", $model->name);
            $namaFile = "tugasProfile_".$model->id.".png";
            $file->move('photoTugas', $namaFile);
            $model->photo = $namaFile;
        }

        $model->save();

        return redirect('tugas/'.$model->id)->with('success', 'Berhasil Mengupdate Tugas!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Tugas::find($id);
        $model->delete();
        return redirect('tugas')->with('success', 'Berhasil Menghapus Tugas!');
    }
}
