<?php
namespace App\Transformers;
use App\Pengumuman;
use League\Fractal\TransformerAbstract;

class PengumumanTransformer extends TransformerAbstract
{
    function transform(Pengumuman $pengumuman){
        return [
            'id' => (int) $pengumuman->id,
            'judul' => (string) $pengumuman->judul,
            'pesan' => (string) $pengumuman->pesan,
            'unread' => (int) $pengumuman->pivot->unread,
            'created_at' => (string) $pengumuman->created_at,
            'updated_at' => (string) $pengumuman->updated_at,
        ];
    }
}
