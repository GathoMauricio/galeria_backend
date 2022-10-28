<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $table = 'photos';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'gallery_id',
        'category_id',
        'name',
        'description',
        'route',
    ];

    public function gallery()
    {
        return $this->belongsTo(
            'App\Models\Gallery',
            'gallery_id',
            'id'
        )
            ->withDefault();
    }

    public function category()
    {
        return $this->belongsTo(
            'App\Models\Category',
            'category_id',
            'id'
        )
            ->withDefault();
    }
}
