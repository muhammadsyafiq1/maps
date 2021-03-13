<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Codespace extends Model
{
    use HasFactory;

   
    protected $fillable = [
        'user_id','title','description','address','latitude','longitude'
    ];


    public function Photos()
    {
    	return $this->hasMany(CodespacePhoto::class,'codespace_id','id');
    }

    public function users()
    {
    	return $this->belongsTo(User::class,'user_id','id');
    }
}
