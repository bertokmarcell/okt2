<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
#[Fillable(['date', 'airline_id','limit'])]
class Trave extends Model
{
    /** @use HasFactory<\Database\Factories\TraveFactory> */
    use HasFactory;
}
