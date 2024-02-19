<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = ['total', 'kasir_nama', 'status','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected $guarded = [];
}
