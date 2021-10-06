<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class ProductGallery extends Model
{
    use softDeletes;

    protected $fillable = [
        // nama-nama dari column yang ada di database
        'products_id', 'photo', 'is_default'

    ];

    protected $hidden = [

    ];

    public function product()
    {
        return $this->belongsTo(product::class,'products_id','id');
    }

// fungsi menggunakan fungsi accesor
    public function getPhotoAttribute($value)
    {
        return url('storage/' . $value);
    }
}
