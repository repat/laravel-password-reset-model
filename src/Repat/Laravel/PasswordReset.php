<?php

namespace Repat\Laravel;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PasswordReset extends \Illuminate\Database\Eloquent\Model
{
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'email';

    /**
     * The data type of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the model should auto increment.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * Indicates if the model has no timestamps
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable or guarded against it.
     *
     * @var array
     */
    public $guarded = [];

    /**
     * Casting DB fields
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
    ];

    /**
     * User Relationship
     *
     * @return BelongsTo
     */
    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class, 'email', 'email');
    }
}
