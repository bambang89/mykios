<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class SubTypeProduct extends Model
{
    use HasFactory,
    LogsActivity;

    /**
     * @var string[]
     */
    protected $fillable = [
        'type_id',
        'sub_type',
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
