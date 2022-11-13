<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Models\Tugas;
use Illuminate\Support\Facades\Auth;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $datas = Tugas::paginate(10);

        $keywordNama = "";
        $keywordFakultas = "";
        $keywordJurusan = "";
        $keywordKategori = "";

        if ($request->keywordNama){
            $keywordNama = $request->keywordNama;
            $datas = Tugas::where('nama', 'LIKE', '%'.$keywordNama.'%')
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
            'datas', 'keywordNama', 'keywordFakultas', 'keywordJurusan', 'keywordKategori'
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
        $model->fakultas = $user->fakultas;
        $model->jurusan = $user->jurusan;
        $model->kategori = $request->kategori;
        $model->deskripsi = $request->deskripsi;
        $model->deadline = $request->deadline;
        $model->harga = $request->harga;
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
        $model = Tugas::find($id);

        return view('tugas.detailTugas', compact(
            'model'
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
        //
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
