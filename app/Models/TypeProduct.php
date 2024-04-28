<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class TypeProduct extends Model
{
    use HasFactory,
        LogsActivity;

    /**
     * @var string[]
     */
    protected $fillable = [
        'type',
        'desc',
    ];

    /**
     * @var string[]
     */
    protected $dates = [
        'starts_at',
        'ends_at',
    ];
}
