<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;
    protected $table = 'mails';
    protected $fillable = ['name', 'phone_number', 'job', 'city', 'email'];

}
