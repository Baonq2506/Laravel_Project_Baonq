<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ban extends Model
{
    use HasFactory;
    protected $table = 'bans';

    public function dateFormat($data)
    {
        return date('d/m/Y', strtotime($data));
    }
}