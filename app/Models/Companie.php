<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Companie extends Model
{
    use HasFactory,
    LogsActivity;

    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'address',
        'phone_number',
    ];

    /**
     * @var string[]
     */
    protected $dates = [
        'starts_at',
        'ends_at',
    ];
}
