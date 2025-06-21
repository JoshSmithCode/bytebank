<?php

namespace App\Nibble;

use Illuminate\Database\Eloquent\Model;

abstract class ProjectionModel extends Model
{
    /**
     * The database connection that should be used by the model.
     *
     * @var string
     */
    protected $connection = 'sqlite';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
