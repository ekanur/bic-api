<?php
namespace App\Transformers;
use App\Pembayaran;
use League\Fractal\TransformerAbstract;

class PembayaranTransformer extends TransformerAbstract
{
    function transform(Pembayaran $pembayaran){
        return [
            'id' => (int) $pembayaran->id,
            'tahap' => (int) $pembayaran->tahap,
            'bayar' => (int) $pembayaran->bayar,
            'bukti_bayar' => (string) $pembayaran->bukti_bayar,
            'created_at' => (string) $pembayaran->created_at,
            'updated_at' => (string) $pembayaran->updated_at,
            'deleted_at' => (string) $pembayaran->deleted_at,
        ];
    }
}
