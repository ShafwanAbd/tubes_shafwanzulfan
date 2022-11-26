<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tugas;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{

    protected $id;

    public function logIn()
    {
        $model = User::all();

        return view('user.logIn', compact(
            'model'
        ));
    }

    public function logInPost(Request $request)
    {
        if ($request->username && $request->password) {
            
            $datas = User::where('username', 'LIKE', $request->username)
                ->where('password', 'LIKE', $request->password)
                ->get();

            $id = $datas[0]->id;

            return view('home.home_main', compact(
                'id'
            ));
        } else {
            return redirect('logIn');
        }

    }

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
        $model = new User;

        return view('user.signUp', compact(
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
        $model = new User;
        $model->email = $request->email;
        $model->name = $request->name;
        $model->universitas = $request->universitas;
        $model->fakultas = $request->fakultas;
        $model->jurusan = $request->jurusan;
        $model->password = $request->password;
        $model->save(); 

        return redirect('home_main')->with('success', 'Account Berhasil Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = User::find($id);

        return view('user.profile', compact(
            'model', 'id'
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
        $model = User::find($id);

        return view('user.editProfile', compact(
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
        $model = User::find($id);

        if ($request->file('photo')){
            $file = $request->file('photo');
            // $namaFile = time().str_replace(" ", "", $model->name);
            $namaFile = "photoProfile_".$model->id.".png";
            $file->move('photoUser', $namaFile);
            $model->photo = $namaFile;

            DB::table('tugas')
            ->where('email', $model->email)
            ->update([
                'photo' => $namaFile,
            ]);

            DB::table('users')
            ->where('email', $model->email)
            ->update([
                'photo' => $namaFile,
            ]);
        }
        
        DB::table('tugas')
        ->where('email', $model->email)
        ->update([
            'email' => $request->email,
            'owner' => $request->name,
            'whatsapp' => $request->whatsapp,
            'instagram' => $request->instagram,
            'fakultas' => $request->fakultas,
            'jurusan' => $request->jurusan
        ]);

        DB::table('users')
        ->where('email', $model->email)
        ->update([
            'email' => $request->email,
            'name' => $request->name,
            'universitas' => $request->universitas,
            'fakultas' => $request->fakultas,
            'jurusan' => $request->jurusan,
            'whatsapp' => $request->whatsapp,
            'instagram' => $request->instagram
        ]);

        return redirect('user/'.$model->id)->with('success', 'Account Berhasil Diupdate!');
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
