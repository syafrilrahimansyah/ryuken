<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['keyword'] ?? false, function ($query, $keyword) {
            return
                $query->where('nama', 'like', '%' . $keyword . '%')
                ->orWhere('id', 'like', '%' . $keyword . '%')
                ->orWhere('tmpt_latihan', 'like', '%' . $keyword . '%')
                ->orWhere('sabuk', 'like', '%' . $keyword . '%');
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function nilaisiswa()
    {
        return $this->hasMany(Nilaisiswa::class);
    }
}
