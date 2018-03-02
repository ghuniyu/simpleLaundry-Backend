<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ItemLaundry extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id', 'client_id', 'status_id', 'weight', 'cost', 'pickup_date', 'finish_date', 'description'
    ];

    public function status()
    {
        return $this->hasOne('App\ItemStatus');
    }

    public function client()
    {
        return $this->hasOne('App\Client');
    }
}
