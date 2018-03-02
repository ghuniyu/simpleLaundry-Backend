<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id', 'name'
    ];

    protected $hidden = [
        'token'
    ];

    public function laundry()
    {
        return $this->hasMany('App\ItemLaundry');
    }
}
