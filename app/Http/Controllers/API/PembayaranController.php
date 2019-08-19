<?php

namespace App\Http\Controllers\API;

use App\Pembayaran;
use App\Program;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transformers\PembayaranTransformer;
use Intervention\Image\ImageManagerStatic as Image;

class PembayaranController extends Controller
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
        $validator = $this->validate($request, [
            "program_id" => "required|integer",
            "tahap" => "required|integer",
            "bayar" => "required|integer",
            "bukti_bayar" => "required|image|max:250",
        ]);

        $pembayaran = new Pembayaran();
        $pembayaran->user_id = auth()->user()->id;
        $pembayaran->program_id = $request->program_id;
        $pembayaran->tahap = $request->tahap;
        $pembayaran->bayar = $request->bayar;
        $pembayaran->bukti_bayar = $request->file("bukti_bayar")->store("bukti_bayar");
        $pembayaran->save();

        return $this->json(array("message"=>"Pembayaran Berhasil"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pembayaran = Pembayaran::find($id);
        $data = array(
            "program_id" => (int) $id,
            "user_id" => $pembayaran->user_id,
            "tahap" => (int) $pembayaran->tahap,
            "program" => $pembayaran->program->judul
        );

        return $this->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembayaran $pembayaran)
    {
        //
    }
}
