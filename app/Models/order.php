<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class order extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected static function boot()
{
    parent::boot();

    static::updating(function ($model) {
     
        if ($model->isDirty('ktp') && $model->getOriginal('ktp') !== null) {
            Storage::disk('public')->delete($model->getOriginal('ktp'));
        }        
         if ($model->isDirty('npwp') && $model->getOriginal('npwp') !== null) {
            Storage::disk('public')->delete($model->getOriginal('npwp'));
        }        
        if ($model->isDirty('siup') && $model->getOriginal('siup') !== null) {
            Storage::disk('public')->delete($model->getOriginal('siup'));
        }
    });
}
}
