<?php

namespace Acs\Merchants\Models;

use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','store_name','discount','location'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
        
    }
}
