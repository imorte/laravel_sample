<?php

namespace App;


use App\Scopes\IdScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;

class Post extends Model
{
    public function scopeOfId($query, $id){
        return $query->where('id', $id);
    }

    public function scopeOfIsAdmin($query, $adminType){
        return $query->where('is_admin', $adminType);
    }


    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public $fillable = ['title', 'content'];
}
