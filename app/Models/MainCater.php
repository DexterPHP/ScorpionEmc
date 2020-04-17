<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainCater extends Model
{
    protected $table = 'main_caters';
    protected $fillable = ['id','title','title_en','desc','desc_en','cover_link','icon_link'];

}
