<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable, SoftDeletes;

    /**
     * Setting Fillable
     *
     * @var array
     */
    protected $fillable = ['title', 'body', 'user_id', 'is_draft'];
}
