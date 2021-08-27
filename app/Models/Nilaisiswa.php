<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilaisiswa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['keyword'] ?? false, function ($query, $keyword) {
            return
                $query->where('nama', 'like', '%' . $keyword . '%')
                ->orWhere('kelas', 'like', '%' . $keyword . '%')
                ->orWhere('registration_id', 'like', '%' . $keyword . '%')
                ->orWhere('kyorugi', 'like', '%' . $keyword . '%')
                ->orWhere('poomsae', 'like', '%' . $keyword . '%')
                ->orWhere('kyukpa', 'like', '%' . $keyword . '%')
                ->orWhere('naikke', 'like', '%' . $keyword . '%');
        });
    }

    public function registration()
    {
        return $this->belongsTo(Registration::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
