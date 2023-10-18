<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Incident extends Model
{
    use HasFactory;
    protected $table = "incidents";
    protected $primaryKey="id_Incident";
    protected $fillable = ['description_Incident'];
}
