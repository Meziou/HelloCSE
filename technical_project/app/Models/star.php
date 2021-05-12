<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/* corresponding “Model” that allow us to interact with stars_table */
class star extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom', 'prenom','description','profileimage'
    ];
}
