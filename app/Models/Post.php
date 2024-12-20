<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Post extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title',
        'body',
        'category_id'
    ];
    use HasFactory;
    public function getPaginateByLimit(int $limit_count = 10)
        {
            // updated_atで降順に並べたあと、limitで件数制限をかける
            //クエリ使わなくてもDBに命令できるってやつかな。あとで見ようか。
            return $this::with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
        }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
}

?>