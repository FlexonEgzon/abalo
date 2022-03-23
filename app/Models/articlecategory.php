<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class articlecategory extends Model
{
    use HasFactory;
    protected $table = 'articlecategory';
    protected $primarykey = 'id';

    protected $fillable=['ab_name', 'ab_description','ab_parent'];
}
