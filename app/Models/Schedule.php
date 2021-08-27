<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['keyword'] ?? false, function ($query, $keyword) {
            return
                $query->where('nama_pelatih', 'like', '%' . $keyword . '%')
                ->orWhere('nama_sekolah', 'like', '%' . $keyword . '%')
                ->orWhere('alamat_sekolah', 'like', '%' . $keyword . '%')
                ->orWhere('hari', 'like', '%' . $keyword . '%')
                ->orWhere('jam', 'like', '%' . $keyword . '%');
        });
    }
}
