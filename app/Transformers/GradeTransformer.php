<?php
namespace App\Transformers;

use App\Grade;
use League\Fractal\TransformerAbstract;

class GradeTransformer extends TransformerAbstract
{
    function transform(Grade $grade){
        $grade_jurusan = json_decode($grade->grade_jurusan);
        return [
            "id" => (int) $grade->id,
            "kampus" => (string) $grade->kampus,
            "grade_jurusan" => $grade_jurusan,
            "created_at" => (string) $grade->created_at,
            "updated_at" => (string) $grade->updated_at,
        ];
    }
}