<?php

namespace App\Http\Models\adminModels;

use Illuminate\Database\Eloquent\Model;

class FeedBack extends Model
{
    protected $table = 'feedback';
   
    public static function getTableName(){
         return with(new static)->getTable();
     }    
}
