<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class PriceProduct extends Model
{
    use HasFactory,
    LogsActivity;

    /**
     * @var string[]
     */
    protected $fillable = [
        'product_id',
        'unit_id',
        'price',
        'profit',
        'selling_price',
    ];

    /**
     * @var string[]
     */
    protected $dates = [
        'starts_at',
        'ends_at',
    ];
}
