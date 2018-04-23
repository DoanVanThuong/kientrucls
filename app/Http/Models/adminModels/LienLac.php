<?php

namespace App\Http\Models\adminModels;

use Illuminate\Database\Eloquent\Model;

class LienLac extends Model
{
    protected $table = 'contact';
   
   public static function getTableName(){
        return with(new static)->getTable();
    }   
}
