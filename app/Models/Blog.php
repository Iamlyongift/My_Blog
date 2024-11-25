<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title', 'content', 'author','dojo_id'];
    /** @use HasFactory<\Database\Factories\BlogFactory> */
    use HasFactory;

    public function dojo(){
        return $this->belongsTo(Dojo::class);
    }


}
