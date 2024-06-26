<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Document extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = ['type' , 'name' , 'is_required' , 'file' , 'status' , 'validity'];
}
