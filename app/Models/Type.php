<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Type extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = array('id');
    protected $dates = ['deleted_at'];

    public static $rules = array(
        'name' => 'required'
    );

    public function getData()
    {
        return '名前：'.$this -> name;
    }

    public function stocks()
    {
        return $this->hasMany('App\Model\Stock');
    }
}
