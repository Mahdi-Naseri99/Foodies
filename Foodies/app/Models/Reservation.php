<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstName',
        'lastName',
        'phoneNumber',
        'resDate',
        'email',
        'table_id',
        'guestsNumber',
    ];

    protected $dates = [
        'resDate'
    ];

    public function table() {
        return $this->belongsTo(Table::class);
    }
}
