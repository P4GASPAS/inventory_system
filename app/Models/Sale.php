<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Sale extends Model
{
    use HasFactory;

    public $timestamp = true;

    protected $guarded = [];

    public function bundle(): HasMany
    {
        return $this->hasMany(Bundle::class);
    }

    public function customer(): HasOne
    {
        return $this->hasOne(Customer::class);
    }
}
