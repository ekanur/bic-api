<?php
namespace App\Transformers;
use App\Beasiswa;
use League\Fractal\TransformerAbstract;

class BeasiswaTransformer extends TransformerAbstract
{
    function transform(Beasiswa $beasiswa){
        return [
            'id' => (int) $beasiswa->id,
            'judul' => (string) $beasiswa->judul,
            'subtitle' => (string) $beasiswa->subtitle,
            'deskripsi' => (string) $beasiswa->deskripsi,
            'deleted_at' => (string) $beasiswa->deleted_at,
            'created_at' => (string) $beasiswa->created_at,
            'updated_at' => (string) $beasiswa->updated_at,
        ];
    }
}
