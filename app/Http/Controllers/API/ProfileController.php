<?php

namespace App\Http\Controllers\API;

use App\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $validator = $this->validate($request, [
            "nama_lengkap" => "required|string|min:3",
            "foto" => "required|image|max:800",
            "tempat_lahir" => "required|string|min:3",
            "tanggal_lahir" => "required",
            "asal_sekolah" => "required|min:7",
            "no_hp" => "required|numeric",
            "email" => "required|email",
            "ig" => "nullable|min:3",
            "fb" => "nullable|min:3",
            "line" => "nullable|min:3",
            "nama_ayah" => "nullable|string|min:3",
            "pekerjaan_ayah" => "nullable|string|min:3",
            "foto_ayah" => "nullable|image|max:800",
            "nama_ibu" => "nullable|string|min:3",
            "pekerjaan_ibu" => "nullable|string|min:3",
            "foto_ibu" => "nullable|image|max:800",
        ]);

        $sosmed = array(
            "ig" => (null !== $request->ig)?$request->ig:null,
            "fb" => (null !== $request->fb)?$request->fb:null,
            "line" => (null !== $request->line)?$request->line:null,
        );
        $detail_ayah = array(
            "nama" => ((null !== $request->nama_ayah)?$request->nama_ayah:null),
            "pekerjaan" => (null !== ($request->pekerjaan_ayah)?$request->pekerjaan_ayah:null),
            "foto" => (null !== ($request->file("foto_ayah"))?$request->file("foto_ayah")->store("foto_ayah"):null),
        );
        $detail_ibu = array(
            "nama" => (null !== ($request->nama_ibu)?$request->nama_ibu:null),
            "pekerjaan" => (null !== ($request->pekerjaan_ibu)?$request->pekerjaan_ibu:null),
            "foto" => (null !== ($request->file("foto_ibu"))?$request->file("foto_ibu")->store("foto_ibu"):null),
        );

        $profil = new Profile;
        $profil->nama_lengkap = $request->nama_lengkap;
        $profil->user_id = auth()->user()->id;
        $profil->foto = $request->file("foto")->store("foto");
        $profil->ttl = $request->tempat_lahir.", ".$request->tanggal_lahir;
        $profil->asal_sekolah = $request->asal_sekolah;
        $profil->no_hp = $request->no_hp;
        $profil->email = $request->email;
        $profil->sosmed = json_encode($sosmed);
        $profil->detail_ayah = json_encode($detail_ayah);
        $profil->detail_ibu = json_encode($detail_ibu);

        $profil->save();
        return $this->json(array("message"=>"Profil Berhasil Disimpan"));
    }

    public function myProfile(){
        $profile = Profile::where("user_id", auth()->user()->id)->first();
        
        return $this->json($profile);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
