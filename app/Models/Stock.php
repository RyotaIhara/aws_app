<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Validation\Rule;

class Stock extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public static $bk_rules = array(
        'type_id' => 'required',
        'user_id' => 'requied',
        'amount' => 'required|max:99999999|numeric',
        'note' => 'max:255'
    );

    public static $rules = [
        'type_id' => ['required'],
        'user_id' => ['required'],
        'amount' => ['required', 'max:99999999', 'numeric'],
        'note' => ['max:255'],
    ];

    public function uniqueCheck($user_id, $type_id)
    {
        // データが存在している場合、trueを返す
        return Stock::where([
            ['user_id', $user_id],
            ['type_id', $type_id],
        ])->exists();
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\Type');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','type_id','amount','note'
    ];
}
