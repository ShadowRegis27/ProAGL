<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleUtilisateur extends Model
{
    use HasFactory;
    public function Utilisateur()
    {
        return $this->hasMany(Utilisateur::class);
    }
    protected $table = "role_utilisateurs";
    protected $primaryKey="id_Role_Utilisateur";
    protected $fillable = ['nom_Role_Utilisateur'];
}
