<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Post extends Model
{
    use HasFactory;
    public function getPaginateByLimit(int $limit_count = 10)
        {
            // updated_atで降順に並べたあと、limitで件数制限をかける
            //クエリ使わなくてもDBに命令できるってやつかな。あとで見ようか。
            return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
        }
}
?>