<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'begin_date',
        'end_date'
    ];
}
