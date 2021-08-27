<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['keyword'] ?? false, function ($query, $keyword) {
            return
                $query->where('nama', 'like', '%' . $keyword . '%')
                ->orWhere('umur', 'like', '%' . $keyword . '%')
                ->orWhere('agama', 'like', '%' . $keyword . '%')
                ->orWhere('sabuk', 'like', '%' . $keyword . '%')
                ->orWhere('alamat', 'like', '%' . $keyword . '%');
        });
    }
}
