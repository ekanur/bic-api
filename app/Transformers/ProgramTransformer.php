<?php
namespace App\Transformers;

use App\Program;
use League\Fractal\TransformerAbstract;

class ProgramTransformer extends TransformerAbstract
{
    function transform(Program $program){
        return [
            "id" => (int) $program->id,
            "judul" => (string) $program->judul,
            "deskripsi" => (string) $program->deskripsi,
            "harga" => (int) $program->harga,
            "dp" => (int) $program->dp,
            "created_at" => (string) $program->created_at,
            "updated_at" => (string) $program->updated_at,
        ];
    }
}