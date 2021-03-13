<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CodespacePhoto extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function codespaces()
    {
    	return $this->belongsTo(Codespace::class,'codespace_id','id');
    }
}
