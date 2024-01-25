<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $table = 'accounts';

    protected $primaryKey = 'acc_id';

    public function setAccNameAttribute($input)
    {
        $this->attributes['acc_name'] = strtolower($input);
    }

    public function getAccNameAttribute($input)
    {
        return ucwords($input);
    }
}
