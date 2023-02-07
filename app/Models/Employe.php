<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'company',

    ];

    public function company(){
        return $this->belongsTo(Companiedetail::class, 'com_id');
    }
}
