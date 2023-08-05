<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        #日付順＝updated_at, 降順＝DESC. 日付降順に並べる
        return $this->orderby('updated_at','DESC')->paginate($limit_count);
    }
    
    protected $fillable = [
        'title',
        'body'
    ];
}
