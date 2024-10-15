<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class section extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected static function boot()
{
    parent::boot();

    static::updating(function ($model) {
        // Periksa apakah thumbnail diubah dan thumbnail lama ada
        if ($model->isDirty('thumbnail') && $model->getOriginal('thumbnail') !== null) {
            // Hapus thumbnail lama dari disk 'public'
            Storage::disk('public')->delete($model->getOriginal('thumbnail'));
        }
    });
}
}
