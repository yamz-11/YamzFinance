<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Category;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id',
        'note',
        'amount',
        'date',
    ];

    public function category(): BelongsTo{
        return $this->belongsTo(Category::class);
    }
}
