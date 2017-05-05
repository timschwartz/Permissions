<?php

namespace timscomputerservices\Permissions\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    use SoftDeletes;

    protected $table = "timscomputerservices_permissions";
}
