<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class UnitDerivative extends Model
{
    use HasFactory,LogsActivity;

      /**
     * @var string[]
     */
    protected $fillable = [
        'product_id',
        'stock_derivative',
    ];

    protected $casts = [
        'stock_derivative' => 'array',
    ];

    /**
     * @var string[]
     */
    protected $dates = [
        'starts_at',
        'ends_at',
    ];
}
