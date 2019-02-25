<?php
namespace App\Transformers;
use App\Pengumuman;
use League\Fractal\TransformerAbstract;

class PengumumanTransformer extends TransformerAbstract
{
    function transform(Pengumuman $pengumuman){
        return [
            'id' => (int) $pengumuman->id,
            'user_id' => (int) $pengumuman->user_id,
            'judul' => (string) $pengumuman->judul,
            'deskripsi' => (string) $pengumuman->deskripsi,
            'unread' => (int) $pengumuman->unread,
            'created_at' => (string) $pengumuman->created_at,
            'updated_at' => (string) $pengumuman->updated_at,
        ];
    }
}
