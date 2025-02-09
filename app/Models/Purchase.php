<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Purchase extends Model
{
    use HasFactory;

    public $timestamp = true;

    protected $guarded = [];

    public function supplier(): HasMany
    {
        return $this->hasMany(Supplier::class);
    }
}
