<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Supplier extends Model
{
    use HasFactory,
    LogsActivity;

    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'company_id',
        'address',
        'city',
        'province',
        'code_post',
        'phone_number',
        'email',
        'no_rek',
        'bank',
    ];

    /**
     * @var string[]
     */
    protected $dates = [
        'starts_at',
        'ends_at',
    ];
}
