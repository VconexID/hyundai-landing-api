<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Descendant extends Model
{
    use HasFactory;

    protected $fillable = ['content', 'ancestor_id'];

    public function ancestor()
    {
        return $this->belongsTo('App\Models\Ancestor');
    }
}
