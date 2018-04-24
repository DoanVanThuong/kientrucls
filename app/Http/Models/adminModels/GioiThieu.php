<?php

namespace App\Http\Models\adminModels;

use Illuminate\Database\Eloquent\Model;

class GioiThieu extends Model
{
    protected $table = 'about';
       
    public static function getTableName() {
        return with(new static)->getTable();
    }    
}
