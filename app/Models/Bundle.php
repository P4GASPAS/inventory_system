<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Bundle extends Model
{
    use HasFactory;

    public $timestamp = true;

    protected $guarded = [];

    public function purchase(): HasOne
    {
        return $this->hasOne(Purchase::class);
    }
}
