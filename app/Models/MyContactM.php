<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyContactM extends Model
{
    protected $table = 'my_contacts';
    protected $primaryKey = 'id';
    protected $fillable = ['owner', 'email', 'role'];
    use HasFactory;
}
