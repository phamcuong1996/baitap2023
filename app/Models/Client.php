<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes, HasFactory;

    protected $table = 'clients';
    protected $fillable = [
        'name',
        'birth',
        'type',
        'money',
        'group',
    ];
}
