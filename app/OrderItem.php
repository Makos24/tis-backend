<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderItem extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];

    public function product()
    {
        return $this->belongsTo(Product::class)->withTrashed();
    }

}
